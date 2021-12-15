<?php

namespace App\Http\Controllers;
use App\Models\Model_Konten;

use Illuminate\Http\Request;

class KontenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Model_Konten::all();
        return view('konten')->with([
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'link'=>'required'
        ]);
        $data=$request->except(['_token']);
        if($request->file('image')){
            $imgName=time().'.'.$request->file('image')->extension();
            $data['image']=$request->file('image')->move('konten',$imgName);
        }
        Model_konten::insert($data);
        return redirect('/dashboard');
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
        $data=Model_Konten::findOrFail($id);
        return view('edit')->with([
            'results'=>$data
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
        $this->validate($request,[
            'name'=> 'required',
            'image'=> 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'link'=>'required'
        ]);
        $item=Model_Konten::findOrFail($id);
        $data=$request->except(['_token']);
        if($request->file('image')){
            if($item->image !=''){
                unlink($item->image);
            }
            $imgName=time().'.'.$request->file('image')->extension();
            $data['image']=$request->file('image')->move('konten',$imgName);
        }
        $item->update($data);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Model_Konten::findOrFail($id);
        // unlink($item->image);
        $item->delete();
        return redirect('/dashboard');
    }
}