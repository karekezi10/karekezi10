<?php

namespace App\Http\Controllers;


use App\Models\blood_inventory;
use Illuminate\Http\Request;


class Blood_inventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $blood_inventories = blood_inventory::latest()->paginate(5);

        return view('blood_inventories.createinvato')
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createinvato()
    {
        return view('blood_inventories.createinvato');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'blood_group' => 'required',
            'volume' => 'required',
            'status' => 'required',
            'donor_id' => 'required',
            'request_id' => 'required',
            
        
        ]);
        blood_inventory::create($request->all());

        return redirect()->route('blood_inventories.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function ok()
    {
        return view("ok");
    }
    public function okk(Request $request)
    {
        $request->validate([
            'blood_group' => 'required',
            'volume' => 'required',
            'status' => 'required',
            'donor_id' => 'required',
            'request_id' => 'required',
            ]);
        blood_inventory::create($request->all());

        return view('ok')
            ->with('success', 'User created successfully.');
    }
    public function select()
    {
    
        $blood_inventories  =  blood_inventory::latest()->paginate(5);

        return view('select', compact('blood_inventories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
}
