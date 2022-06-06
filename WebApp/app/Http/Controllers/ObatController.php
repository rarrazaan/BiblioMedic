<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObatRequest;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        $title = 'Data Obat';
        $obats = Obat::paginate();

        return view('obat.index', compact('title', 'obats'));
    }

    public function create()
    {
        $title = 'Tambah Data Obat';

        return view('obat.add', compact('title'));
    }

    public function store(ObatRequest $request)
    {
        $data = $request->validated();

        Obat::create($data);
        return redirect('/obat')->with('success', 'Data obat berhasil ditambahkan');
    }

    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return response()->json(['data' => $obat]);
    }

    public function edit($id)
    {
        $title = 'Edit Obat';

        $data = Obat::find($id);

        $coordinate = [(float) $data->longitude, (float) $data->latitude];
        $coordinate_str = $data->latitude.','.$data->longitude;

        return view('obat.edit', compact(
            'title', 'data',
        ));
    }

    public function update(ObatRequest $request, $id)
    {
        $data = $request->validated();

        Obat::where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Data obat berhasil di update');
    }

    public function destroy($id)
    {
        Obat::destroy($id);
        return redirect('/obat')->with('success', 'Data obat berhasil dihapus');
    }
}