<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrancheController extends Controller
{
    public function index(){

        $Banks = Branch::OrderBy('id','desc')->paginate(10);
        return view('Admin.Branch.index',compact('Banks'));

    }

    public function Search(Request $request){

        $Banks = Branch::OrderBy('id','desc')->where('name','like','%'.$request->search.'%')->paginate(50);
        return view('Admin.Branch.index',compact('Banks'));

    }
    public function store(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',
        ]);

        $data=new Branch;
        $data->name=$request->name;

        try {
            $data->save();
        } catch (Exception $e) {
            return redirect('/users')->with('error_message', 'Failed');
        }

        $this->LogStore('اضافة فرع جديد');

        return redirect()->back()->with('message', 'Success');
    }

    public function delete(Request $request)
    {
        try{
            Branch::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $Bank= Branch::find($request->id);
        return view('Admin.Branch.model',compact('Bank'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',

        ]);
        $data= Branch::find($request->id);
        $data->name=$request->name;

        try {
            $data->save();

        } catch (Exception $e) {
            return redirect('/users')->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }
}
