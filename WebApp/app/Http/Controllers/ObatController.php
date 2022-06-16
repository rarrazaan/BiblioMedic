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
        // ddd($request);
        
        $data = $request->validated();
        $data['image'] = $request->file('image')->store('obat-images');

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

        return view('obat.edit', compact(
            'title', 'data',
        ));
    }

    public function update(ObatRequest $request, $id)
    {
        $data = $request->validated();
        $data['image'] = $request->file('image')->store('obat-images');

        Obat::where('id', $id)->update($data);
        return redirect('/obat')->with('success', 'Data obat berhasil diubah');
    }

    public function destroy($id)
    {
        Obat::destroy($id);
        return redirect('/obat')->with('success', 'Data obat berhasil dihapus');
    }
}