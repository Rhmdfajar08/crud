<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::all();

        return view('home', compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud');
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
        'kode_tanaman'=>'required|min:4',
        'nama_plants'=> 'required|min:3',
        'type'=>'required',
        'notes'=>'nullable',
      ]);

        $plants = Plant::create([
            'kode_tanaman'=> $request->kode_tanaman,
            'nama_plants'=> $request->nama_plants,
            'type'=> $request->type,
            'notes'=> $request->notes,
           
        ]);

        return redirect('/')->with('addPlant','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        return view('editTanaman', compact('plant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
            $request ->validate([
                'kode_tanaman'=>'required|min:4',
                'nama_plants'=> 'required|min:3',
                'type'=>'required',
                'growth'=>'required',
                'notes'=>'nullable',
            ]); 

            Plant::where('id', $id)->update([
                'kode_tanaman'=> $request->kode_tanaman,
                'nama_plants'=> $request->nama_plants,
                'type'=> $request->type,
                'growth'=> $request->growth,
                'notes'=> $request->notes ,
            ]);

            return redirect('/')->with('succesUpdate','Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plant::where('id', $id)->delete();
        return redirect('/')->with('succesDelete','Berhasil Menghapus Data!');
    }
}
