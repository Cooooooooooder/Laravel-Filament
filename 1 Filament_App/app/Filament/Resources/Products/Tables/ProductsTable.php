<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name') -> label('الاسم') -> sortable() -> searchable(),
                TextColumn::make('description')-> label('الوصف') -> sortable(),
                TextColumn::make('slug'),
                TextColumn::make('price')-> label('السعر'),
                TextColumn::make('quantity')-> label('الكمية'),
                TextColumn::make('category.name')-> label('التصنيف'),
                TextColumn::make('status')-> label('الحالة'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
