<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index(){

        $Banks = Insurance::OrderBy('id','desc')->paginate(10);
        return view('Admin.Insurance.index',compact('Banks'));

    }

    public function Search(Request $request){

        $Banks = Insurance::OrderBy('id','desc')->where('name','like','%'.$request->search.'%')->paginate(50);
        return view('Admin.Insurance.index',compact('Banks'));

    }
    public function store(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',
        ]);

        $data=new Insurance;
        $data->name=$request->name;

        try {
            $data->save();
        } catch (Exception $e) {
            return redirect('/users')->with('error_message', 'Failed');
        }

        $this->LogStore('اضافة تامين جديد');

        return redirect()->back()->with('message', 'Success');
    }

    public function delete(Request $request)
    {
        try{
            Insurance::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $Bank=Insurance::find($request->id);
        return view('Admin.Insurance.model',compact('Bank'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',

        ]);
        $data= Insurance::find($request->id);
        $data->name=$request->name;

        try {
            $data->save();

        } catch (Exception $e) {
            return redirect('/users')->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }
}
