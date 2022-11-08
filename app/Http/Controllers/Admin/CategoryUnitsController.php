<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoryUnits;
class CategoryUnitsController extends Controller
{
    public function index(){

        $CategoryUnits = CategoryUnits::OrderBy('id','desc')->paginate(10);
        return view('Admin.CategoryUnits.index',compact('CategoryUnits'));

    }
    public function Search(Request $request){

        $CategoryUnits = CategoryUnits::where('name','like','%'.$request->search.'%')->paginate(50);
        return view('Admin.CategoryUnits.index',compact('CategoryUnits'));

    }

    public function store(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',
        ]);

        $data=new CategoryUnits;
        $data->name=$request->name;

        try {
            $data->save();
        } catch (Exception $e) {
            return redirect()->back()->with('message', 'Failed');
        }
        return redirect()->back()->with('message', 'Success');
    }

    public function delete(Request $request)
    {
        try{
            CategoryUnits::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $CategoryUnits=CategoryUnits::find($request->id);
        return view('Admin.CategoryUnits.model',compact('CategoryUnits'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',

        ]);
        $data= CategoryUnits::find($request->id);
        $data->name=$request->name;
        try {
            $data->save();

        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }
}
