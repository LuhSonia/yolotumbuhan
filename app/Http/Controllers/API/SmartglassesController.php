<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\packages;

class SmartglassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=packages::paginate(10);
        return response()->json($datas);
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
        $validasi =$request->validate ([
            'package_code'=>'required',
            'package_name'=>'',
            'permalink'=>'',
            'package_desc'=>'',
            'feature_img'=>'required|file|mimes:png,jpg',
            'location_id' =>'required',
            'comunity_id'=>''
            // 'user_id'=>'required',
            // 'title'=>'required',
            // 'description'=>'required',
            // 'cover'=>'required',
        ]);
        try{
            //code...
            $fileName = time().$request->file('feature_img')->getClientOriginalName();
            $path = $request->file('feature_img')->storeAs('img/berita',$fileName);
            $validasi['feature_img']=$path;
            $response = packages::create($validasi);
            return response()->json([
                'successs'=> true,
                'message'=> 'success',
                'body' => $response
            ]);
        } catch (\Throwable $th){
            return response()->json([
                'success' => false,
                'message' => 'Error',
                'errors' =>$th->getMessage()
            ]);
        }
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
        $validasi =$request->validate ([
            'package_code'=>'required',
            'package_name'=>'',
            'permalink'=>'',
            'package_desc'=>'',
            'feature_img'=>'',
            'location_id' =>'required',
            'comunity_id'=>''
            // 'user_id'=>'required',
            // 'title'=>'required',
            // 'description'=>'required',
            // 'cover'=>'required',
        ]);
        try{
            if($request->file('feature_img')){
            //code...
            $fileName = time().$request->file('feature_img')->getClientOriginalName();
            $path = $request->file('feature_img')->storeAs('img/berita',$fileName);
            $validasi['feature_img']=$path;
            }
            $response = packages::find($id);
            $response->update($validasi);
           
            return response()->json([
                'successs'=> true,
                'message'=> 'success',
                'body' => $response
            ]);
        } catch (\Throwable $th){
            return response()->json([
                'success' => false,
                'message' => 'Error',
                'errors' =>$th->getMessage()
            ]);
        }
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
