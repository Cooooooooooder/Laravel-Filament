<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['slug'] = Str::slug($data['name']);
        $exchangeRate = 53;
        $data['price'] = round($data['price'] * $exchangeRate, 3);
        return $data;
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $exchangeRate = 53;
        $data['price'] = round($data['price'] / $exchangeRate, 3);

        return $data;
    }
}
