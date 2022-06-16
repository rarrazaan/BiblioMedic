<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApotekRequest;
use App\Models\Apotek;
use App\Models\ObatApotek;

class ApotekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Apotek';
        $apoteks = Apotek::paginate();

        return view('apotek.index', compact('title', 'apoteks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data apotek';

        return view('apotek.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApotekRequest $request)
    {
        // ddd($request);
        
        $data = $request->validated();
        $data['picture'] = $request->file('picture')->store('apotek-picture');

        Apotek::create($data);
        return redirect('/apotek')->with('success', 'Data apotek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apotek = Apotek::findOrFail($id);
        return response()->json(['apotek' => $apotek]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit apotek';

        $id = Apotek::find($id);

        $coordinate = [(float) $id->longitude, (float) $id->latitude];
        $coordinate_str = $id->latitude.','.$id->longitude;

        return view('apotek.edit', compact(
            'title', 'id',
        ));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function update(ApotektRequest $request, $id)
    {
        $data = $request->validated();

        Apotek::where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Data apotekt berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Apotek::destroy($id);
        return redirect('/apotek')->with('success', 'Data apotek berhasil dihapus');
    }
    
    public function detail($id)
    {
        $data = Apotek::find($id);
        $obats = ObatApotek::where('apotek_id', $id)->get();

        $coordinate = [(float) $data->longitude, (float) $data->latitude];
        $coordinate_str = $data->latitude.','.$data->longitude;
        $title = 'Apotek Detail';

        return view('apotek.detail', compact('title', 'data', 'coordinate', 'coordinate_str', 'obats'));
    }
}