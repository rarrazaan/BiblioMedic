<?php

namespace App\Http\Controllers;

use App\Models\Apotek;
use Illuminate\Http\Request;

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
        $title = 'Tambah Data Apotek';

        return view('apotek.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validated();

        Apotek::create($data);
        return redirect('/apotek')->with('success', 'Data apotek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function show(Apotek $apotek)
    {
        $apotek = Apotek::findOrFail($id);
        return response()->json(['data' => $apotek]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function edit(Apotek $apotek)
    {
        $title = 'Edit Apotek';

        $data = Apotek::find($id);

        $coordinate = [(float) $data->longitude, (float) $data->latitude];
        $coordinate_str = $data->latitude.','.$data->longitude;

        return view('apotek.edit', compact(
            'title', 'data',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apotek $apotek)
    {
        $data = $request->validated();

        Apotek::where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Data apotek berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apotek  $apotek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apotek $apotek)
    {
        Apotek::destroy($id);
        return redirect('/apotek')->with('success', 'Data apotek berhasil dihapus');
    }
}