<?php

namespace App\Http\Livewire\Admin\Forms;

use Carbon\Carbon;
use Filament\Forms;
use Livewire\Component;
use App\Models\Masterlist;
use WireUi\Traits\Actions;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;

class ViewMasterlistData extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use Actions;

    public $record;
    public $full_name;
    public $address;
    public $birthday;
    public $age;
    public $tin_number;
    public $gender;
    public $civil_status;
    public $religion;
    public $dependent_number;
    public $educational_attainment;
    public $occupation;
    public $income;
    public $date_accepted;
    public $bod_number;
    public $membership_type;
    public $number_of_shares;
    public $amount_subscribed;
    public $initial_paid_up;
    public $bod_resolution;
    public $date_created;


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

    public function mount()
    {
        $this->full_name = strtoupper($this->record->first_name.' '.$this->record->middle_name.' '.$this->record->last_name);
        $this->address = strtoupper($this->record->address);
        $this->birthday =  Carbon::parse($this->record->date_of_birth)->format('F d, Y');
        $this->age = $this->record->age;
        $this->tin_number = $this->record->tin_number;
        if($this->record->gender === "M")
        {
            $this->gender = "Male";
        }elseif($this->record->gender === "F"){
            $this->gender = "Female";
        }
        if($this->record->civil_status === "M")
        {
            $this->civil_status = "Married";
        }elseif($this->record->gender === "S"){
            $this->civil_status = "Single";
        }
        $this->religion = $this->record->religion;
        $this->dependent_number = $this->record->dependent_number;
        $this->educational_attainment = $this->record->educational_attainment;
        $this->occupation = $this->record->occupation;
        $this->income = '₱ '.' '.number_format((int)$this->record->income, 2, '.', ',');
        $this->date_accepted =  Carbon::parse($this->record->date_accepted)->format('F d, Y');
        $this->bod_number =  $this->record->bod_number;
        $this->membership_type = strtoupper($this->record->membership_type);
        $this->number_of_shares =  $this->record->number_of_shares.' Shares';
        $this->amount_subscribed =  '₱ '.' '.number_format((int)$this->record->amount_subscribed, 2, '.', ',');
        $this->initial_paid_up =  '₱ '.' '.number_format((int)$this->record->initial_paid_up, 2, '.', ',');
        $this->bod_resolution =   $this->record->bod_resolution;
        $this->date_created =  Carbon::parse($this->record->date_created)->format('F d, Y');


    }

    public function redirectToMasterlist()
    {
        return redirect()->route('masterlist');
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
