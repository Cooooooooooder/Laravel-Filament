<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use App\Enums\ProductStatus;
use Filament\Forms\Components\Radio;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('اسم المنتج')
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

                Textarea::make('description')
                    ->label('الوصف')
                    ->rules([
                        'nullable',
                    ]),

                TextInput::make('price')
                    ->label('السعر')
                    ->prefix('USA')
                    ->rules([
                        'required',
                        'numeric',
                        'min:1',
                        'max:100000',
                    ])
                    ->validationMessages([
                        'required' => 'السعر مطلوب.',
                        'numeric' => 'السعر يجب أن يكون رقمًا.',
                        'min' => 'السعر يجب أن يكون أكبر من أو يساوي 1.',
                        'max' => 'السعر يجب ألا يزيد عن 100000.',
                    ]),

                TextInput::make('quantity')
                    ->label('الكمية')
                    ->default(0)
                    ->rules([
                        'required',
                        'numeric',
                        'min:0',
                    ])
                    ->validationMessages([
                        'required' => 'الكمية مطلوبة.',
                        'numeric' => 'الكمية يجب أن تكون رقمًا.',
                        'min' => 'الكمية يجب ألا تقل عن 0.',
                    ]),
                Select::make('category_id')
                ->label('التصنيف')
                    ->relationship('category', 'name')
                    ->nullable(),
                Radio::make('status')
                ->label('الحالة')
                    ->options(ProductStatus::class),

            ]);
    }
}
