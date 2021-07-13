<?php

namespace App\Http\Controllers;

use App\Models\AwardType;
use Illuminate\Http\Request;

class AwardTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $awardTypes = AwardType::all();
        return view('awardType.awardTypes')->with('awardTypes', $awardTypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('awardType.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'type' => 'required',
            'type_description' => 'required',
        ]);

        AwardType::firstOrCreate([
            'type' => $request->type,
            'type_description' => $request->type_description,
        ]);
        
        return redirect('awardType')->with('success', 'Successfully Registered !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AwardType  $awardType
     * @return \Illuminate\Http\Response
     */
    public function show(AwardType $awardType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AwardType  $awardType
     * @return \Illuminate\Http\Response
     */
    public function edit(AwardType $awardType)
    {
        //
        return view('awardType.registration')->with('awardType', $awardType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AwardType  $awardType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AwardType $awardType)
    {
        //
        $request->validate([
            'type' => 'required',
            'type_description' => 'required',
        ]);

        $awardType->update([
            'type' => $request->type,
            'type_description' => $request->type_description,
        ]);
        
        return redirect('awardType')->with('success', 'Successfully Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AwardType  $awardType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AwardType $awardType)
    {
        //
    }
}
