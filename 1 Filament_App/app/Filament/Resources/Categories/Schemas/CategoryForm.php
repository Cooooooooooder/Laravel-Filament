<?php

namespace App\Filament\Resources\Categories\Schemas;
use Filament\Forms\Components\TextInput;

use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 TextInput::make('name')
                    ->label('اسم التصنيف')
                    ->unique(ignoreRecord: true)
                    ->rules([
                        'required',
                        'max:255',
                    ])
                    ->validationMessages([
                        'required' => 'اسم المنتج مطلوب.',
                        'unique' => 'اسم المنتج موجود بالفعل.',
                        'max' => 'اسم المنتج يجب ألا يزيد عن 255 حرفًا.',
                    ]),
            ]);
    }
}
