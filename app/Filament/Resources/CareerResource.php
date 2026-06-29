use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;

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
                        ->placeholder('e.g., NACONEK/2026/REC/02'),
                        
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