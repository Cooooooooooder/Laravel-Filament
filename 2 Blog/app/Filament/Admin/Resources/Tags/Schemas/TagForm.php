<?php

namespace App\Filament\Admin\Resources\Tags\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Illuminate\Validation\Rule;

class TagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Tag Name')
                            ->rules(fn($record) => [
                                'required',
                                'string',
                                'max:255',
                                Rule::unique('tags', 'name')->ignore($record),
                            ])
                            ->validationMessages([
                                'required' => 'The Tag name field is required.',
                                'string' => 'The Tag name must be a string.',
                                'max' => 'The Tag name may not be greater than 255 characters.',
                                'unique' => 'The Tag name has already been taken.',
                            ]),
                    ]),
            ]);
    }
}
