<?php

namespace App\Filament\Admin\Resources\Posts\RelationManagers;

use App\Filament\Admin\Resources\Tags\TagResource;
use Filament\Actions\CreateAction;
use Filament\Actions\AttachAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class TagsRelationManager extends RelationManager
{
    protected static string $relationship = 'tags';

    protected static ?string $relatedResource = TagResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
                AttachAction::make()->preloadRecordSelect(),
            ]);
    }
}
