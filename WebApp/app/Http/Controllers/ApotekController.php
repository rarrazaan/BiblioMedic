<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApotekRequest;
use App\Models\Apotek;
use App\Models\ObatApotek;

class ApotekController extends Controller
{
    public function index()
    {
        $title = 'Data Apotek';
        $apoteks = Apotek::paginate();

        return view('apotek.index', compact('title', 'apoteks'));
    }

    public function create()
    {
        $title = 'Tambah Data apotek';

        return view('apotek.add', compact('title'));
    }

    public function store(ApotekRequest $request)
    {
        // ddd($request);
        
        $data = $request->validated();
        $coordinate = explode(",", $data['coordinate']);

        $data['latitude'] = $coordinate[0];
        $data['longitude'] = $coordinate[1];
        unset($data['coordinate']);

        $data['picture'] = $request->file('picture')->store('apotek-picture');

        Apotek::create($data);
        return redirect('/apotek')->with('success', 'Data apotek berhasil ditambahkan');
    }

    public function show($id)
    {
        $apotek = Apotek::findOrFail($id);
        return response()->json(['apotek' => $apotek]);
    }

    public function edit($id)
    {
        $title = 'Edit apotek';

        $apotek = Apotek::find($id);

        $coordinate = [(float) $apotek->longitude, (float) $apotek->latitude];
        $coordinate_str = $apotek->latitude.','.$apotek->longitude;

        return view('apotek.edit', compact(
            'title', 'apotek', 'coordinate', 'coordinate_str'
        ));
    }

    public function update(ApotekRequest $request, $id)
    {
        $data = $request->validated();
        $coordinate = explode(",", $data['coordinate']);

        $data['latitude'] = $coordinate[0];
        $data['longitude'] = $coordinate[1];
        unset($data['coordinate']);
        
        if(isset($data['picture'])) {
            $data['picture'] = $request->file('picture')->store('apotek-images');
        }

        Apotek::where('id', $id)->update($data);
        return redirect('/apotek')->with('success', 'Data apotek berhasil diubah');
    }

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