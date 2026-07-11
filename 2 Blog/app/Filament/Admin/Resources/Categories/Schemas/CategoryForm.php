<?php

namespace App\Filament\Admin\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rule;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Category Name')
                            ->rules(fn($record) => [
                                'required',
                                'string',
                                'max:255',
                                Rule::unique('categories', 'name')->ignore($record),
                            ])
                            ->validationMessages([
                                'required' => 'The category name field is required.',
                                'string' => 'The category name must be a string.',
                                'max' => 'The category name may not be greater than 255 characters.',
                                'unique' => 'The category name has already been taken.',
                            ]),
                    ]),
            ]);
    }
}
