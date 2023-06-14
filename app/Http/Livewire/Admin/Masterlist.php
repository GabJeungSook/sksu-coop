<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Filament\Tables;
use Filament\Forms;
use Filament\Forms\Components\Select;
use App\Models\Masterlist as MasterlistModel;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Card;
use WireUi\Traits\Actions;
use Carbon\Carbon;
use DB;
class Masterlist extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;
    use Actions;

    protected function getTableQuery(): Builder
    {
        return MasterlistModel::query();
    }

    protected function getTableHeaderActions(): array
    {
        return [
            Action::make('create')
            ->label('Add User')
            ->button()
            ->color('primary')
            ->icon('heroicon-o-plus')
            ->action(function (array $data): void {
                MasterlistModel::create([
                    'member_id' => $data['member_id'],
                    'first_name' => $data['first_name'],
                    'middle_name' => $data['middle_name'],
                    'last_name' => $data['last_name'],
                    'tin_number' => $data['tin_number'],
                    'address' => $data['address'],
                    'date_of_birth' => $data['date_of_birth'],
                    'age' => $data['age'],
                    'gender' => $data['gender'],
                    'civil_status' => $data['civil_status'],
                    'educational_attainment' => $data['educational_attainment'],
                    'occupation' => $data['occupation'],
                    'dependent_number' => $data['dependent_number'],
                    'religion' => $data['religion'],
                    'income' => $data['income'],
                    'date_accepted' => $data['date_accepted'],
                    'bod_number' => $data['bod_number'],
                    'membership_type' => $data['membership_type'],
                    'number_of_shares' => $data['number_of_shares'],
                    'amount_subscribed' => $data['amount_subscribed'],
                    'initial_paid_up' => $data['initial_paid_up'],
                    'bod_resolution' => $data['bod_resolution'],
                    'date_created' => $data['date_created'],
                ]);
                $this->dialog()->success(
                    $title = 'Success',
                    $description = 'Saved successfully'
                );
            })
            ->form([
                Wizard::make([
                    Wizard\Step::make('Step 1')
                        ->schema([
                            Forms\Components\TextInput::make('member_id')->label("Membership ID")->numeric()->required(),

                            Card::make()
                            ->schema([
                                Grid::make(3)
                                ->schema([
                                    Forms\Components\TextInput::make('last_name')->required(),
                                    Forms\Components\TextInput::make('middle_name'),
                                    Forms\Components\TextInput::make('first_name')->required(),
                                    ])
                            ]),
                            Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('tin_number')->label("TIN"),
                                Forms\Components\TextInput::make('address'),
                                Forms\Components\DatePicker::make('date_of_birth')->reactive()
                                ->afterStateUpdated(function ($get, $set, $state){
                                    $date_of_birth = $state;
                                    $age = date_diff(date_create($date_of_birth), date_create('today'))->y;
                                    $set('age', $age);
                                }),
                                Forms\Components\TextInput::make('age')->disabled()->reactive(),
                                Select::make('gender')->options([
                                    'male' => 'Male',
                                    'female' => 'Female'
                                ]),
                                Forms\Components\TextInput::make('civil_status'),
                                Forms\Components\TextInput::make('educational_attainment')->label('Highest Educational Attainment'),
                                Forms\Components\TextInput::make('occupation')->label('Occupation / Source of Income'),
                                Forms\Components\TextInput::make('dependent_number')->label("No. of Dependent")->numeric(),
                                Forms\Components\TextInput::make('religion')->label("Religion / Social Affiliation"),
                            ]),
                            Forms\Components\TextInput::make('income')->label("Annual Income")->numeric(),

                        ]),
                    Wizard\Step::make('Step 2')
                        ->schema([
                            Grid::make(3)
                            ->schema([
                                Forms\Components\DatePicker::make('date_accepted'),
                                Forms\Components\TextInput::make('bod_number')->label("BOD RES Number")->numeric(),
                                Forms\Components\TextInput::make('membership_type')->label('Type / Kind of Membership'),
                                Forms\Components\TextInput::make('number_of_shares')->label("Number of Shares Subscribed")->numeric(),
                                Forms\Components\TextInput::make('amount_subscribed')->label("Amount Subscribed")->numeric(),
                                Forms\Components\TextInput::make('initial_paid_up')->label("Initial Paid Up")->numeric(),
                            ])
                        ]),
                    Wizard\Step::make('Step 3')
                        ->schema([
                            Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('bod_resolution')->label("BOD Resolution"),
                                Forms\Components\DatePicker::make('date_created'),
                            ])
                        ]),
                ])




            ])
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('view')
            ->icon('heroicon-o-eye')
            ->color('warning')
            ->button()
            ->url(fn (MasterlistModel $record): string => route('view-masterlist-data', $record))
            ->openUrlInNewTab(),
            Action::make('edit')
            ->label('Update')
            ->button()
            ->color('success')
            ->icon('heroicon-o-pencil')
            ->mountUsing(fn (Forms\ComponentContainer $form, MasterlistModel $record) => $form->fill([
                'member_id' => $record->member_id,
                'first_name' => $record->first_name,
                'middle_name' => $record->middle_name,
                'last_name' => $record->last_name,
                'tin_number' => $record->tin_number,
                'address' => $record->address,
                'date_of_birth' => $record->date_of_birth,
                'age' => $record->age,
                'gender' => $record->gender,
                'civil_status' => $record->civil_status,
                'educational_attainment' => $record->educational_attainment,
                'occupation' => $record->occupation,
                'dependent_number' => $record->dependent_number,
                'religion' => $record->religion,
                'income' => $record->income,
                'date_accepted' => $record->date_accepted,
                'bod_number' => $record->bod_number,
                'membership_type' => $record->membership_type,
                'number_of_shares' => $record->number_of_shares,
                'amount_subscribed' => $record->amount_subscribed,
                'initial_paid_up' => $record->initial_paid_up,
                'bod_resolution' => $record->bod_resolution,
                'date_created' => $record->date_created,
            ]))
            ->action(function (MasterlistModel $record, array $data): void {
                $record->first_name = $data['first_name'];
                $record->middle_name = $data['middle_name'];
                $record->last_name = $data['last_name'];
                $record->tin_number = $data['tin_number'];
                $record->address = $data['address'];
                $record->date_of_birth = $data['date_of_birth'];
                $record->age = $data['age'];
                $record->gender = $data['gender'];
                $record->civil_status = $data['civil_status'];
                $record->educational_attainment = $data['educational_attainment'];
                $record->occupation = $data['occupation'];
                $record->dependent_number = $data['dependent_number'];
                $record->religion = $data['religion'];
                $record->income = $data['income'];
                $record->date_accepted = $data['date_accepted'];
                $record->bod_number = $data['bod_number'];
                $record->membership_type = $data['membership_type'];
                $record->number_of_shares = $data['number_of_shares'];
                $record->amount_subscribed = $data['amount_subscribed'];
                $record->initial_paid_up = $data['initial_paid_up'];
                $record->bod_resolution = $data['bod_resolution'];
                $record->date_created = $data['date_created'];
                $record->save();

                $this->dialog()->success(
                    $title = 'Success',
                    $description = 'Updated successfully'
                );
            })
            ->form([
                Wizard::make([
                    Wizard\Step::make('Step 1')
                        ->schema([
                            Forms\Components\TextInput::make('member_id')->label("Membership ID")->numeric()->required(),

                            Card::make()
                            ->schema([
                                Grid::make(3)
                                ->schema([
                                    Forms\Components\TextInput::make('last_name')->required(),
                                    Forms\Components\TextInput::make('middle_name'),
                                    Forms\Components\TextInput::make('first_name')->required(),
                                    ])
                            ]),
                            Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('tin_number')->label("TIN"),
                                Forms\Components\TextInput::make('address'),
                                Forms\Components\DatePicker::make('date_of_birth')->reactive()
                                ->afterStateUpdated(function ($get, $set, $state){
                                    $date_of_birth = $state;
                                    $age = date_diff(date_create($date_of_birth), date_create('today'))->y;
                                    $set('age', $age);
                                }),
                                Forms\Components\TextInput::make('age')->disabled()->reactive(),
                                Select::make('gender')->options([
                                    'male' => 'Male',
                                    'female' => 'Female'
                                ]),
                                Forms\Components\TextInput::make('civil_status'),
                                Forms\Components\TextInput::make('educational_attainment')->label('Highest Educational Attainment'),
                                Forms\Components\TextInput::make('occupation')->label('Occupation / Source of Income'),
                                Forms\Components\TextInput::make('dependent_number')->label("No. of Dependent")->numeric(),
                                Forms\Components\TextInput::make('religion')->label("Religion / Social Affiliation"),
                            ]),
                            Forms\Components\TextInput::make('income')->label("Annual Income")->numeric(),

                        ]),
                    Wizard\Step::make('Step 2')
                        ->schema([
                            Grid::make(3)
                            ->schema([
                                Forms\Components\DatePicker::make('date_accepted'),
                                Forms\Components\TextInput::make('bod_number')->label("BOD RES Number")->numeric(),
                                Forms\Components\TextInput::make('membership_type')->label('Type / Kind of Membership'),
                                Forms\Components\TextInput::make('number_of_shares')->label("Number of Shares Subscribed")->numeric(),
                                Forms\Components\TextInput::make('amount_subscribed')->label("Amount Subscribed")->numeric(),
                                Forms\Components\TextInput::make('initial_paid_up')->label("Initial Paid Up")->numeric(),
                            ])
                        ]),
                    Wizard\Step::make('Step 3')
                        ->schema([
                            Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('bod_resolution')->label("BOD Resolution"),
                                Forms\Components\DatePicker::make('date_created'),
                            ])
                        ]),
                ])
            ]),

        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id')
            ->label('MEMBER ID')
            ->searchable()
            ->sortable(),
            TextColumn::make('first_name')
            ->label('FIRST NAME')
            ->formatStateUsing(fn ($record) => strtoupper($record->first_name))
            ->searchable()
            ->sortable(),
            TextColumn::make('middle_name')
            ->label('MIDDLE NAME')
            ->searchable()
            ->formatStateUsing(fn ($record) => strtoupper($record->middle_name))
            ->sortable(),
            TextColumn::make('last_name')
            ->label('LAST NAME')
            ->searchable()
            ->formatStateUsing(fn ($record) => strtoupper($record->last_name))
            ->sortable(),
            TextColumn::make('tin_number')
            ->label('TIN NUMBER')
            ->searchable()
            ->sortable(),
        ];
    }

    public function render()
    {
        return view('livewire.admin.masterlist');
    }
}
