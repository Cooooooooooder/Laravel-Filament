<?php

namespace App\Filament\Admin\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Validation\Rule;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;



class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Post Name')
                    ->rules(fn($record) => [
                        'required',
                        'string',
                        'max:255',
                        Rule::unique('posts', 'title')->ignore($record),
                    ])
                    ->validationMessages([
                        'required' => 'The Post name field is required.',
                        'string' => 'The Post name must be a string.',
                        'max' => 'The Post name may not be greater than 255 characters.',
                        'unique' => 'The Post name has already been taken.',
                    ]),

                Select::make('category_id')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->rules([
                        'required',
                        'integer',
                        'exists:categories,id',
                    ])
                    ->validationMessages([
                        'required' => 'The category field is required.',
                        'integer'  => 'The selected category is invalid.',
                        'exists'   => 'The selected category does not exist.',
                    ]),

                Select::make('tags')
                    ->relationship('tags', 'name')
                    ->label('Tags')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->required(),



                SpatieMediaLibraryFileUpload::make('thumbnail')
                    ->collection('posts'),

                Toggle::make('is_published')->label('Is Published'),
                
                MarkdownEditor::make('content'),

            ]);
    }
}
