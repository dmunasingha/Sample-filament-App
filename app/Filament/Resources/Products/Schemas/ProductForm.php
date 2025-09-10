<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\ProductColor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Fieldset;
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

                // Many-to-many with categories, filtered by matching types
                Select::make('category_ids') // Use plural for multiple selection
                    ->relationship('categories', 'name',)
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
