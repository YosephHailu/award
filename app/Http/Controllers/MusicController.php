<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $musics = Music::all();
        return view('music.music')->with('musics', $musics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('music.registration');
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
            'title' => 'required',
            'singer_name' => 'required',
            'producer' => 'required',
            'genre' => 'required',
            'songwriter' => 'required',
            'released_year' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);


        if ($request->hasFile('photo')) {
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/uploads/music/', $fileNameToStore);
        } else {
            $fileNameToStore = "placeholder.php";
        }

        Music::firstOrCreate([
            'title' => $request->title,
            'singer_name' => $request->singer_name,
            'producer' => $request->producer,
            'genre' => $request->genre,
            'songwriter' => $request->songwriter,
            'released_year' => $request->released_year,
            'description' => $request->description,
            'image' => $fileNameToStore,
        ]);

        return redirect('music')->with('success', 'Successfully Registered !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        //
        return view('music.registration')->with(['music' => $music]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        //
        $request->validate([
            'title' => 'required',
            'singer_name' => 'required',
            'producer' => 'required',
            'genre' => 'required',
            'songwriter' => 'required',
            'released_year' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);


        if ($request->hasFile('photo')) {
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/uploads/music/', $fileNameToStore);
        } else {
            $fileNameToStore = $music->image;
        }

        $music->update([
            'title' => $request->title,
            'singer_name' => $request->singer_name,
            'producer' => $request->producer,
            'genre' => $request->genre,
            'songwriter' => $request->songwriter,
            'released_year' => $request->released_year,
            'description' => $request->description,
            'image' => $fileNameToStore,
        ]);
        return redirect('music')->with('success', 'Successfully Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        //
    }
}
