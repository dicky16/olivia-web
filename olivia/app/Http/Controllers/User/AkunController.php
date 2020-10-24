<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class AkunController
{
    public function __construct()
    {
        setTimeZone();
    }

    public function index()
    {
        // $data = DB::table('users')->where('id', auth()->user()->id)->get();
        return view('user.auth.home');
    }

    public function simpanDataPeserta(Request $request)
    {
        $rules = [
            'namaTim' => 'required',
            'namaDosen' => 'required',
            'nidnDosen' => 'required',
            'nimKetua' => 'required',
            'namaInstitusi' => 'required',
            'ktmKetua' => 'required',
            'email' => 'required',
            'namaAnggota1' => 'required',
            'namaAnggota2' => 'required',
            'nimAnggota1' => 'required',
            'nimAnggota2' => 'required',
            'ktmAnggota1' => 'required',
            'ktmAnggota2' => 'required',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if($validator->passes()) {
            // store ktm ketua
            $ktm = $request->file('ktmKetua');
            $namaOriFile = $ktm->getClientOriginalName();
            $fileName = 'ketua_'.$namaOriFile;
            $filePath = "assets/berkas".'/'.auth()->user()->id;
            $ktm->move($filePath, $fileName, "");
            //store ktm anggota 1
            $ktm1 = $request->file('ktmAnggota1');
            $namaKTM1 = $ktm1->getClientOriginalName();
            $fileNameKTM1 = 'anggota1_'.$namaKTM1;
            $filePathKTM1 = "assets/berkas".'/'.auth()->user()->id;
            $ktm1->move($filePathKTM1, $fileNameKTM1, "");
            //store ktm anggota 2
            $ktm2 = $request->file('ktmAnggota2');
            $namaKTM2 = $ktm2->getClientOriginalName();
            $fileNameKTM2 = 'anggota2_'.$namaKTM2;
            $filePathKTM2 = "assets/berkas".'/'.auth()->user()->id;
            $ktm2->move($filePathKTM2, $fileNameKTM2, "");
            
            $data = [
                'nama_team' => $request->namaTim ?? null,
                'nama_dosen' => $request->namaDosen ?? null,
                'nidn_dosen' => $request->nidnDosen ?? null,
                'nim_ketua' => $request->nimKetua ?? null,
                'institusi' => $request->namaInstitusi ?? null,
                'ktm_ketua' => $filePath.'/'.$fileName,
                'id_user' => auth()->user()->id,
                'created_at' =>  \Carbon\Carbon::now()
            ];
            $dataAnggota1 = [
                'nama' => $request->namaAnggota1 ?? null,
                'nim' => $request->nimAnggota1 ?? null,
                'ktm' => $filePathKTM1.'/'.$fileNameKTM1,
                'created_at' =>  \Carbon\Carbon::now()
            ];
            $dataAnggota2 = [
                'nama' => $request->namaAnggota2 ?? null,
                'nim' => $request->nimAnggota2 ?? null,
                'ktm' => $filePathKTM2.'/'.$fileNameKTM2,
                'created_at' =>  \Carbon\Carbon::now()
            ];
            $tim = DB::table('data_tim')->insert($data);
            $anggota = DB::table('data_peserta')->insert($dataAnggota1, $dataAnggota2);
            if($tim && $anggota) {
                return response()->json([
                    'success' => true,
                    'error' => '',
                    'message' => ''
                ]);
            }
        }
        return response()->json([
            'success' => false,
            'error' => 'validation_error',
            'message' => $validator->errors()->first()
        ]);
    }
}
