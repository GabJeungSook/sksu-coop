<?php

namespace App\Http\Livewire\Admin\Forms;

use App\Models\Masterlist;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use WireUi\Traits\Actions;

class ViewMasterlistData extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use Actions;

    public $record;
    public $file_path =[];
    public $updateImage = false;
    protected $listeners = ['refreshComponent' => '$refresh'];

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\FileUpload::make('file_path')
            ->enableOpen()
            ->disk('public')
            ->preserveFilenames(),
        ];
    }

    public function save()
    {
        $member = Masterlist::find($this->record->id);

        foreach ($this->file_path as $document) {
            $member->image_path = $document->storeAs('public', $document->getClientOriginalName());
            $member->save();
        }
        $this->dialog()->success(
            $title = 'Success',
            $description = 'Saved successfully'
        );
        $this->emit('refreshComponent');
        $this->updateImage = false;
    }

    public function getFileUrl($filename)
    {
        return Storage::url($filename);
    }

    public function render()
    {
        return view('livewire.admin.forms.view-masterlist-data');
    }
}
