<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AttachmentCategory;

class AttachmentCategoryController extends Controller
{
    public function index(){

        $Banks = AttachmentCategory::OrderBy('id','desc')->paginate(10);
        return view('Admin.AttachmentCategory.index',compact('Banks'));

    }

    public function Search(Request $request){

        $Banks = AttachmentCategory::OrderBy('id','desc')->where('name','like','%'.$request->search.'%')->paginate(50);
        return view('Admin.AttachmentCategory.index',compact('Banks'));

    }
    public function store(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',
        ]);

        $data=new AttachmentCategory;
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
            AttachmentCategory::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $AttachmentCategory=AttachmentCategory::find($request->id);
        return view('Admin.AttachmentCategory.model',compact('AttachmentCategory'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',

        ]);
        $data= AttachmentCategory::find($request->id);
        $data->name=$request->name;
        try {
            $data->save();

        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }
}
