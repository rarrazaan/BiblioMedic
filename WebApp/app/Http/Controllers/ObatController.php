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

        $id = Obat::find($id);

        $coordinate = [(float) $id->longitude, (float) $id->latitude];
        $coordinate_str = $id->latitude.','.$id->longitude;

        return view('obat.edit', compact(
            'title', 'id',
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
    
    public function detail($id)
    {
        $id = Obat::find($id);
        $title = 'Obat Detail';

        return view('obat.detail', compact('title', 'id'));
    }
}
