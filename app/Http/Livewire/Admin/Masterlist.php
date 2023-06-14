<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Filament\Tables;
use Filament\Forms;
use App\Models\Masterlist as MasterlistModel;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
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
            ->label('Add Member')
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
                ]);
                $this->dialog()->success(
                    $title = 'Success',
                    $description = 'Saved successfully'
                );
            })
            ->form([
                Forms\Components\TextInput::make('member_id')->label('Member ID')->numeric()->required(),
                Forms\Components\TextInput::make('first_name')->required(),
                Forms\Components\TextInput::make('middle_name'),
                Forms\Components\TextInput::make('last_name')->required(),
                Forms\Components\TextInput::make('tin_number')->required(),
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
            ]))
            ->action(function (MasterlistModel $record, array $data): void {
                $record->member_id = $data['member_id'];
                $record->first_name = $data['first_name'];
                $record->middle_name = $data['middle_name'];
                $record->last_name = $data['last_name'];
                $record->tin_number = $data['tin_number'];
                $record->save();

                $this->dialog()->success(
                    $title = 'Success',
                    $description = 'Updated successfully'
                );
            })
            ->form([
                Forms\Components\TextInput::make('member_id')->label('Member ID')->numeric()->required(),
                Forms\Components\TextInput::make('first_name')->required(),
                Forms\Components\TextInput::make('middle_name'),
                Forms\Components\TextInput::make('last_name')->required(),
                Forms\Components\TextInput::make('tin_number')->required(),
            ]),

        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('member_id')
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
