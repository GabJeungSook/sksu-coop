<?php

namespace App\Http\Controllers;

use App\Models\Masterlist;
use Illuminate\Http\Request;

class ApiApiMemberController extends Controller
{

    public function getTotalMembers (){

        return response()->json(['data' => Masterlist::count()] ,200);

    }

    public function getMemberDetails(Request $request){

        $member = Masterlist::where('id', $request->id)->first();
        return response()->json(['data' => $member] ,200);
    }

    public function getAllMembers (){
        $members = Masterlist::query()->get();
        return response()->json(['data' => $members] ,200);
    }
    public function getMembers (Request $request){
        $offset = (int)$request->offset;
        $limit= (int) $request->limit;
        $members = Masterlist::query()->skip($offset)->take($limit)->get();
        return response()->json(['data' => $members] ,200);
    }
}
