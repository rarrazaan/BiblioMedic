<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apotek;
use App\Models\Obat;
use App\Models\ObatApotek;

class NonSuperController extends Controller
{
    public function obat(){
        $title = 'Data Obat';
        $obats = Obat::paginate();

        return view('obat.nonSuper.index', compact('title', 'obats'));
    }

    public function obat_detail($id){
        $obat = Obat::findOrFail($id);
        return response()->json(['data' => $obat]);
    }

    public function apotek(){
        $title = 'Data Apotek';
        $apoteks = Apotek::paginate();

        return view('apotek.nonSuper.index', compact('title', 'apoteks'));
    }

    public function apotek_detail($id)
    {
        $data = Apotek::find($id);
        $obats = ObatApotek::where('apotek_id', $id)->get();

        $coordinate = [(float) $data->longitude, (float) $data->latitude];
        $coordinate_str = $data->latitude.','.$data->longitude;
        $title = 'Apotek Detail';

        return view('apotek.detail', compact('title', 'data', 'coordinate', 'coordinate_str', 'obats'));
    }

    public function apoteker_detail($id)
    {
        $data = Apotek::find($id);
        $obats = ObatApotek::where('apotek_id', $id)->get();

        $coordinate = [(float) $data->longitude, (float) $data->latitude];
        $coordinate_str = $data->latitude.','.$data->longitude;
        $title = 'Apotek Detail';

        return view('apotek.apoteker.detail', compact('title', 'data', 'coordinate', 'coordinate_str', 'obats'));
    }

    // public function obat_create()
    // {
    //     $title = 'Tambah Data Obat Apotek';

    //     return view('obat.apoteker.add', compact('title'));
    // }

    // public function obat_store(ObatApotekRequest $request)
    // {        
    //     return $request;
    //     $data = $request->validated();
    //     $data['image'] = $request->file('image')->store('obat-images');
    //     $id = session()->get('user')->apotek_id;

    //     ObatApotek::create($data);
    //     return redirect('/ns/apoteker/' . $id)->with('success', 'Data obat apotek berhasil ditambahkan');
    // }
}