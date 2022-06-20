<?php

namespace App\Http\Controllers;

use App\Models\ObatApotek;
use App\Http\Requests\ObatApotekRequest;


class ObatApotekController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $title = 'Tambah Data Obat Apotek';

        return view('obat.apoteker.add', compact('title'));
    }

    public function store(ObatApotekRequest $request)
    {
        
        $data = $request->validated();
        $data['image'] = $request->file('image')->store('obat-images');
        $id = $data['apotek_id'];

        ObatApotek::create($data);
        return redirect('/ns/apoteker/' . $id)->with('success', 'Data obat apotek berhasil ditambahkan');
    }

    public function show(ObatApotek $obatApotek)
    {
        //
    }

    public function edit($id)
    {
        $title = 'Edit Obat';
        $data = ObatApotek::find($id);

        return view('obat.apoteker.edit', compact(
            'title', 'data',
        ));
    }

    public function update(ObatApotekRequest $request, $id)
    {
        $data = $request->validated();

        if(isset($data['picture'])) {
            $data['image'] = $request->file('image')->store('obat-images');
        }
        $aid = $data['apotek_id'];

        ObatApotek::where('id', $id)->update($data);
        return redirect('/ns/apoteker/' . $aid)->with('success', 'Data obat apotek berhasil diubah');
    }

    public function destroy($id)
    {
        $aid = session()->get('user')->apotek_id;

        ObatApotek::destroy($id);
        return redirect('/ns/apoteker/' . $aid)->with('success', 'Data obat apotek berhasil dihapus');
    }
}