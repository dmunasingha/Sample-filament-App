<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Database\Eloquent\Builder;

class ProductForm {
    public static function configure(Schema $schema): Schema {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                // Many-to-many with product types (morphToMany)
                Select::make('types')
                    ->multiple()
                    ->relationship('types', 'name')
                    ->preload()
                    ->searchable()
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (Set $set) {
                        $set('product_category_id', null);
                    }),
                // Belongs-to relationship with category, filtered by matching types
                Select::make('product_category_id')
                    ->relationship(
                        name: 'categories',
                        titleAttribute: 'name',
                        modifyQueryUsing: function (Builder $query, Get $get) {
                            $typeIds = $get('types') ?? [];
                            $typeCount = count($typeIds);

                            if ($typeCount === 0) {
                                $query->whereDoesntHave('types');
                                return $query;
                            }

                            $query->withCount('types')
                                ->having('types_count', '=', $typeCount);

                            foreach ($typeIds as $typeId) {
                                $query->whereHas('types', function (Builder $q) use ($typeId) {
                                    $q->where('type_id', $typeId);
                                });
                            }

                            return $query;
                        }
                    )
                    ->searchable()
                    ->preload()
                    ->required(),
                // Belongs-to relationship with color
                Select::make('product_color_id')
                    ->relationship('color', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }
}
