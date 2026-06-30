<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TenderResource\Pages;
use App\Models\Tender;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;

class TenderResource extends Resource
{
    protected static ?string $model = Tender::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Tender Core Information')
                    ->description('Enter the standard legal requirements for the public procurement advertisement.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('tender_number')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->placeholder('e.g., NACONEK/SMP/TND/2026/04')
                            ->regex('/^NACONEK\/[A-Z0-9\/_-]+$/')
                            ->validationMessages([
                                'regex' => 'The tender number must follow corporate formatting regulations (e.g., NACONEK/SMP/TND/2026/04).',
                            ]),
                            
                        TextInput::make('title')
                            ->required()
                            ->placeholder('e.g., Supply of Fortified Cereals to ASAL Regions'),
                            
                        Select::make('category')
                            ->required()
                            ->options([
                                'Food Supply' => 'Food Supply',
                                'Logistics Services' => 'Logistics Services',
                                'Clean Cooking Solutions' => 'Clean Cooking Solutions',
                                'Consultancy' => 'Consultancy',
                                'General Infrastructure' => 'General Infrastructure',
                            ]),
                            
                        TextInput::make('tender_fee')
                            ->numeric()
                            ->prefix('Ksh')
                            ->minValue(0)
                            ->default(0)
                            ->required(),
                    ]),

                Section::make('Compliance Documents & Timeline')
                    ->columns(2)
                    ->schema([
                        FileUpload::make('document_path')
                            ->label('Tender Document (PDF Booklet)')
                            ->required()
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('tenders')
                            ->preserveFilenames(),
                            
                        DateTimePicker::make('closing_at')
                            ->required()
                            ->native(false)
                            ->closeOnDateSelect(),
                            
                        Select::make('status')
                            ->required()
                            ->options([
                                'active' => 'Active / Open',
                                'closed' => 'Closed',
                                'addendum_issued' => 'Addendum Issued',
                                'awarded' => 'Awarded',
                            ])
                            ->default('active'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tender_number')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('status')->badge(),
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
            'index' => Pages\ListTenders::route('/'),
            'create' => Pages\CreateTender::route('/create'),
            'edit' => Pages\EditTender::route('/{record}/edit'),
        ];
    }
}