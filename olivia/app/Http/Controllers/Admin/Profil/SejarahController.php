<?php

namespace App\Http\Controllers\Admin\Profil;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables, Validator;

class SejarahController 
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

    public function getSejarahDataTable()
    {
        $data = DB::table('sejarah')
        ->get();
        return Datatables::of($data)
        ->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn-edit-sejarah" style="font-size: 18pt; text-decoration: none;" class="mr-3">
            <i class="fas fa-pen-square"></i>
            </a>';
            $btn = $btn. '<a href="javascript:void(0)" data-id="'.$row->id.'" data-nama="'.$row->judul.'" class="btn-delete-sejarah" style="font-size: 18pt; text-decoration: none; color:red;">
            <i class="fas fa-trash"></i>
            </a>';
            return $btn;
          })
        ->rawColumns(['aksi'])
        ->make(true);
    }
    public function loadDataTable()
    {
        return view('datatable.SejarahDataTable');
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
            'deskripsi' => 'required',
        );
        
        $validator = Validator::make($request->all(), $rules);
          if($validator->passes()) {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $sejarah = DB::table('sejarah')->insert([
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'status' => 'nonaktif',
                'created_at' =>  \Carbon\Carbon::now()
            ]);
            if($sejarah) {
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
        $data = DB::table('sejarah')->where('id', $id)->get();
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
            'deskripsi' => 'required',
        );
        
        $validator = Validator::make($request->all(), $rules);
          if($validator->passes()) {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $sejarah = DB::table('sejarah')->where('id', $id)->update([
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'updated_at' =>  \Carbon\Carbon::now()
            ]);
            if($sejarah) {
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
        DB::table('sejarah')->where('id', $id)->delete();
        return response()->json([
            'status' => 'deleted',
        ]);
    }
}
