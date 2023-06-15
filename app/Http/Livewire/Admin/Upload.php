<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use League\Csv\Reader;
use Illuminate\Support\Facades\Storage;
use App\Models\Masterlist;
use WireUi\Traits\Actions;
use Carbon\Carbon;
use DB;

use function Ramsey\Uuid\v1;

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
               'address' => $csvRecord[5],
               'date_of_birth' => Carbon::parse($csvRecord[6])->format('Y-m-d'),
               'age' => (int)$csvRecord[7],
               'gender' => $csvRecord[8],
               'civil_status' => $csvRecord[9],
               'educational_attainment' => $csvRecord[10],
               'occupation' => $csvRecord[11],
               'dependent_number' => $csvRecord[12],
               'religion' => $csvRecord[13],
               'income' => $csvRecord[14],
               'date_accepted' => Carbon::parse($csvRecord[15])->format('Y-m-d'),
               'bod_number' => (int)$csvRecord[16],
               'membership_type' => $csvRecord[17],
               'number_of_shares' => (int)$csvRecord[18],
               'amount_subscribed' => $csvRecord[19],
               'initial_paid_up' => $csvRecord[20],
               'bod_resolution' => $csvRecord[21],
               'date_created' => Carbon::parse($csvRecord[22])->format('Y-m-d'),
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
