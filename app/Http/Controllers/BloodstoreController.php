<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bloodstore;
class BloodstoreController extends Controller
{
    public function bloodstore()
    {

        return view('bloodstore');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'name1' => 'required',
            'blood_group1' => 'required',
            'volume1' => 'required',
             ]);
        bloodstore::create($request->all());

        return view('bloodstore')
            ->with('success', 'User created successfully.');
    }
    public function handover()
    {
    
        $bloodstores  =  bloodstore::latest()->paginate(5);

        return view('handover', compact('bloodstores'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
