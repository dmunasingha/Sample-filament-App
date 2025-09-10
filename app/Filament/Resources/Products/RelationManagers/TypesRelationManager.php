<?php

namespace App\Filament\Resources\ProductsResource\RelationManagers;

use App\Models\ProductType;
use App\Models\TypeAssignment;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Forms;

class TypesRelationManager extends RelationManager {
    protected static string $relationship = 'typeAssignments';
    protected static ?string $recordTitleAttribute = 'type.name';

    public function table(Tables\Table $table): Tables\Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type.name')->label('Type Name')->sortable(),
                Tables\Columns\TextColumn::make('my_bonus_field')->label('Bonus')->sortable(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->form([
                        Forms\Components\TextInput::make('name')->required()->label('Type Name'),
                        Forms\Components\TextInput::make('bonus')->label('Bonus'),
                    ])
                    ->action(function (array $data, $livewire) {
                        $type = ProductType::create([
                            'name' => $data['name'],
                        ]);

                        TypeAssignment::create([
                            'type_id' => $type->id,
                            'assignment_id' => $livewire->ownerRecord->id,
                            'my_bonus_field' => $data['bonus'] ?? null,
                        ]);
                    }),
            ])
            ->actions([
                EditAction::make()
                    ->form([
                        Forms\Components\TextInput::make('type.name')->required()->label('Type Name'),
                        Forms\Components\TextInput::make('my_bonus_field')->label('Bonus'),
                    ])
                    ->action(function ($record, array $data) {
                        $record->type->update([
                            'name' => $data['type']['name'],
                        ]);

                        $record->update([
                            'my_bonus_field' => $data['my_bonus_field'] ?? null,
                        ]);
                    }),
                DeleteAction::make()
                    ->before(function ($record) {
                        $record->delete(); // deletes the assignment only
                    }),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }
}
