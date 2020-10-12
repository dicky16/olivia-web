<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables, File, Validator;

class SliderController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home.slide');
    }

    public function getSliderDataTable()
    {
        $data = DB::table('slider')
        ->get();
        return Datatables::of($data)
        ->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn-edit-slider" style="font-size: 18pt; text-decoration: none;" class="mr-3">
            <i class="fas fa-pen-square"></i>
            </a>';
            $btn = $btn. '<a href="javascript:void(0)" data-id="'.$row->id.'" data-nama="'.$row->nama.'" class="btn-delete-slider" style="font-size: 18pt; text-decoration: none; color:red;">
            <i class="fas fa-trash"></i>
            </a>';
            return $btn;
            })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function loadDataTable()
    {
        return view('datatable.sliderDataTable');
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
            'nama' => 'required',
            'gambar' => 'required|max:3000|mimes:jpg,jpeg,svg,png,gif'
        );
        
        $validator = Validator::make($request->all(), $rules);
          if($validator->passes()) {
            $nama = $request->nama;
            $gambar = $request->file('gambar');
            $namaOriFileGambar = $gambar->getClientOriginalName();
            $fileNameGambar = time().'_'.$namaOriFileGambar;
            $filePathGambar = "assets/image/slider";
            $gambar->move($filePathGambar, $fileNameGambar, "");

            $slider = DB::table('slider')->insert([
                'nama' => $nama,
                'gambar' => $filePathGambar.'/'.$fileNameGambar,
                'created_at' =>  \Carbon\Carbon::now()
            ]);

            if($slider) {
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
        $data = DB::table('slider')->where('id', $id)->get();
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
            'nama' => 'required',
            'gambar' => 'required|max:3000|mimes:jpg,jpeg,svg,png,gif'
        );
        
        $validator = Validator::make($request->all(), $rules);
          if($validator->passes()) {
            $nama = $request->nama;
            $gambar = $request->file('gambar');
            $namaOriFileGambar = $gambar->getClientOriginalName();
            $fileNameGambar = time().'_'.$namaOriFileGambar;
            $filePathGambar = "assets/image/slider";
            $gambar->move($filePathGambar, $fileNameGambar, "");
            //hapus slider
            $data = DB::table('slider')->where('id', $id)->value('gambar');
            File::delete($data);
            
            $slider = DB::table('slider')->where('id', $id)->update([
                'nama' => $nama,
                'gambar' => $filePathGambar.'/'.$fileNameGambar,
                'updated_at' =>  \Carbon\Carbon::now()
            ]);

            if($slider) {
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
        $data = DB::table('slider')->where('id', $id)->value('gambar');
        File::delete($data);
        DB::table('slider')->where('id', $id)->delete();
        return response()->json([
            'status' => 'deleted',
        ]);
    }
}
