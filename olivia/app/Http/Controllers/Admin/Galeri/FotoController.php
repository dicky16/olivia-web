<?php

namespace App\Http\Controllers\Admin\Galeri;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables, Auth, File, Validator;
class FotoController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getFotoDataTable()
    {
        $data = DB::table('foto')
        ->get();
        return Datatables::of($data)
        ->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn-edit-Foto" style="font-size: 18pt; text-decoration: none;" class="mr-3">
            <i class="fas fa-pen-square"></i>
            </a>';
            $btn = $btn. '<a href="javascript:void(0)" data-i d="'.$row->id.'" data-nama="'.$row->nama.'" class="btn-delete-berita" style="font-size: 18pt; text-decoration: none; color:red;">
            <i class="fas fa-trash"></i>
            </a>';
            return $btn;
          })
        ->rawColumns(['aksi'])
        ->make(true);
    }
    public function loadDataTable()
    {
        return view('datatable.FotoDataTable');
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
