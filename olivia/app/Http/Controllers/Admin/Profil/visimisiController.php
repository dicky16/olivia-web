<?php

namespace App\Http\Controllers\Admin\Profil;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables, Validator;

class visimisiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        setTimeZone();
    }

    public function index()
    {
        //
    }

    public function getVisimisiDataTable()
    {
        $data = DB::table('visimisi')->orderby('id', 'desc')->get();
        return Datatables::of($data)
        ->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn-edit-visimisi" style="font-size: 18pt; text-decoration: none;" class="mr-3">
            <i class="fas fa-pen-square"></i>
            </a>';
            $btn = $btn. '<a href="javascript:void(0)" data-id="'.$row->id.'" data-nama="'.$row->judul.'" class="btn-delete-visimisi" style="font-size: 18pt; text-decoration: none; color:red;">
            <i class="fas fa-trash"></i>
            </a>';
            return $btn;
            })
        ->addColumn('state', function($row){
                $btn = null;
                    $status = $row->status;
                    if($status == "nonaktif") {
                        $btn = '<button class="btn btn-success" type="button" data-id="'.$row->id.'" id="btn-aktif">Aktifkan</button> &nbsp;';
                        $btn = $btn. '<button class="btn btn-success" type="button" disabled>Nonaktifkan</button>';
                    } else {
                        $btn = '<button class="btn btn-success" type="button" disabled>Aktifkan</button> &nbsp;';
                        $btn = $btn. '<button class="btn btn-success" type="button" data-id="'.$row->id.'" id="btn-nonaktif">Nonaktifkan</button>';
                    }
                    return $btn;
            })
        ->rawColumns(['aksi', 'state'])
        ->make(true);
    }

    public function loadDataTable()
    {
        return view('datatable.visimisiDataTable');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array (
            'judul' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        );
        
        $validator = Validator::make($request->all(), $rules);
          if($validator->passes()) {
            $judul = $request->judul;
            $visiPost = $request->visi;
            $misi = $request->misi;

            $visi = DB::table('visimisi')->insert([
                'judul' => $judul,
                'visi' => $visiPost,
                'misi' => $misi,
                'status' => 'nonaktif',
                'created_at' =>  \Carbon\Carbon::now()
            ]);
            if($visi) {
                return response()->json([
                    'status' => 'ok'
                  ]);
            }
          }

          return response()->json([
            'status' => 'validation_error',
            'message' => $validator->errors()->first()
          ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('visimisi')->where('id', $id)->get();
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array (
            'judul' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        );
        
        $validator = Validator::make($request->all(), $rules);
          if($validator->passes()) {
            $judul = $request->judul;
            $visiPost = $request->visi;
            $misi = $request->misi;

            $visi = DB::table('visimisi')->where('id', $id)->update([
                'judul' => $judul,
                'visi' => $visiPost,
                'misi' => $misi,
                'updated_at' =>  \Carbon\Carbon::now()
            ]);
            if($visi) {
                return response()->json([
                    'status' => 'ok'
                  ]);
            }
          }

          return response()->json([
            'status' => 'validation_error',
            'message' => $validator->errors()->first()
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('visimisi')->where('id', $id)->delete();
        return response()->json([
            'status' => 'deleted',
        ]);
    }

    public function aktifkan($id)
    {
        $aktif = DB::table('visimisi')->where('id', $id)->update([
            'status' => 'aktif'
        ]);
        if($aktif) {
            return response()->json([
                'status' => 'ok',
            ]);
        }
    }

    public function nonAktifkan($id)
    {
        $aktif = DB::table('visimisi')->where('id', $id)->update([
            'status' => 'nonaktif'
        ]);
        if($aktif) {
            return response()->json([
                'status' => 'ok',
            ]);
        }
    }
}
