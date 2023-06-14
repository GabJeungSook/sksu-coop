<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use League\Csv\Reader;
use Illuminate\Support\Facades\Storage;
use App\Models\Masterlist;
use WireUi\Traits\Actions;
class Upload extends Component
{
    use WithFileUploads;
    use Actions;

    public $masterlist;

    public function uploadMasterlist(){

        $csvContents = Storage::get($this->masterlist->getClientOriginalName());
        $csvReader = Reader::createFromString($csvContents);
        $csvRecords = $csvReader->getRecords();

        foreach ($csvRecords as $csvRecord) {
            Masterlist::create([
               'member_id' => $csvRecord[0],
               'last_name' => $csvRecord[1],
               'first_name' => $csvRecord[2],
               'middle_name' => $csvRecord[3],
               'tin_number' => $csvRecord[4],
            ]);
        }

        $this->dialog()->success(
            $title = 'Success',
            $description = 'Data uploaded'
        );
    }
    public function render()
    {
        return view('livewire.admin.upload');
    }
}
