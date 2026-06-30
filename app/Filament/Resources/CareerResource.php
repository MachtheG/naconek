<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerResource\Pages;
use App\Models\Career;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Vacancy Overview')
                    ->columns(2)
                    ->schema([
                        TextInput::make('reference_number')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->placeholder('e.g., NACONEK/2026/REC/02')
                            ->regex('/^NACONEK\/[A-Z0-9\/_-]+$/')
                            ->validationMessages([
                                'regex' => 'The reference number must match institutional naming architecture (e.g., NACONEK/2026/REC/02).',
                            ]),
                            
                        TextInput::make('title')
                            ->required()
                            ->placeholder('e.g., Nutrition Compliance Officer'),
                            
                        Select::make('department')
                            ->required()
                            ->options([
                                'Operations' => 'Operations & Logistics',
                                'Nutrition & Health' => 'Nutrition & Health',
                                'Finance & Procurement' => 'Finance & Procurement',
                                'Human Resources' => 'Human Resources',
                            ]),
                            
                        Select::make('contract_type')
                            ->required()
                            ->options([
                                'full-time' => 'Full-time Permanent',
                                'contract' => 'Fixed-term Contract',
                                'internship' => 'Internship Program',
                            ])
                            ->default('full-time'),
                            
                        TextInput::make('location')
                            ->default('Nairobi')
                            ->required(),
                            
                        DateTimePicker::make('closing_at')
                            ->required()
                            ->native(false),
                            
                        Toggle::make('is_active')
                            ->label('Publish immediately to public portal')
                            ->default(true)
                            ->inline(false),
                    ]),

                Section::make('Detailed Description and Requirements')
                    ->schema([
                        RichEditor::make('description')
                            ->required()
                            ->toolbarButtons([
                                'bold', 'italic', 'bulletList', 'orderedList', 'redo', 'undo'
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reference_number')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('department'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\TextColumn::make('closing_at')->dateTime(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }
}