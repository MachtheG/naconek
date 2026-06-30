<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivityLogResource\Pages;
use App\Models\ActivityLog;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ActivityLogResource extends Resource
{
    protected static ?string $model = ActivityLog::class;

    // A clipboard icon fits perfectly for audit tracking
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        // Audit trails are read-only background files, so we leave the form empty
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Timestamp')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('user.name')
                    ->label('Administrator')
                    ->searchable()
                    ->placeholder('System Automated'),

                TextColumn::make('action')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Created Tender', 'Created Career Vacancy' => 'success',
                        default => 'warning',
                    })
                    ->searchable(),

                TextColumn::make('model_type')
                    ->label('Module Affected')
                    ->formatStateUsing(fn (string $state) => class_basename($state)),

                TextColumn::make('model_id')
                    ->label('Record ID'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([])
            ->actions([
                // Allow them to look at the data structure, but not edit it
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([]); // Disabled batch actions to preserve log security
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivityLogs::route('/'),
            'view' => Pages\ViewActivityLog::route('/{record}'),
        ];
    }
}