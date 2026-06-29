use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;

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
                        ->placeholder('e.g., NACONEK/SMP/TND/2026/04'),
                        
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
                        ->native(false) // Gives a beautiful custom UI picker
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