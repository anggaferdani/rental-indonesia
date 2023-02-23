<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function create(){
        return view('registrasi');
    }

    public function store(Request $request){
        $request->validate([
            'asal_daerah' => 'required',
            'nama_panjang' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'nama_perusahaan' => 'required',
            'logo_perusahaan' => 'required',
            'produk' => 'required',
            'apakah_anda_akan_menghadiri' => 'required',
            'berapa_orang' => 'required',
        ]);

        $user = array(
            'asal_daerah' => $request['asal_daerah'],
            'nama_panjang' => $request['nama_panjang'],
            'email' => $request['email'],
            'nomor_telepon' => $request['nomor_telepon'],
            'nama_perusahaan' => $request['nama_perusahaan'],
            'produk' => $request['produk'],
            'apakah_anda_akan_menghadiri' => $request['apakah_anda_akan_menghadiri'],
            'berapa_orang' => $request['berapa_orang'],
        );

        if($logo_perusahaan = $request->file('logo_perusahaan')){
            $destination_path = 'logo_perusahaan/';
            $foto_logo_perusahaan = date('YmdHis') . "." . $logo_perusahaan->getClientOriginalExtension();
            $logo_perusahaan->move($destination_path, $foto_logo_perusahaan);
            $user['logo_perusahaan'] = $foto_logo_perusahaan;
        }

        User::create($user);

        return redirect()->route('registrasi.create')->with('success', 'Jawaban anda berhasil dikirim');
    }
}
