<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\inboxType;
class InboxTypeController extends Controller
{
    public function index(){

        $data = inboxType::OrderBy('id','desc')->paginate(10);

        return view('Admin.inboxType.index',compact('data'));
    }

    public function checkType(Request $request){
        $data = inboxType::find($request->id);
        return response($data->type);
    }
    public function Search(Request $request){

        $data = inboxType::OrderBy('id','desc')->where('ar_name','like','%'.$request->search.'%')->orwhere('en_name','like','%'.$request->search.'%')->paginate(50);
        return view('Admin.inboxType.index',compact('data'));

    }

    public function store(Request $request)
    {

        $this->validate(request(),[
            'ar_name' => 'required|string',
            'en_name' => 'required|string',
        ]);

        $data=new inboxType;
        $data->ar_name=$request->ar_name;
        $data->en_name=$request->en_name;
        $data->role=$request->role;
        $data->type=$request->type;

        try {
            $data->save();
        } catch (Exception $e) {
            return redirect('/users')->with('error_message', 'Failed');
        }

        return redirect()->back()->with('message', 'Success');
    }

    public function delete(Request $request)
    {
        try{
            inboxType::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $data =inboxType::find($request->id);
        return view('Admin.inboxType.model',compact('data'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[
            'ar_name' => 'required|string',
            'en_name' => 'required|string',

        ]);
        $data= inboxType::find($request->id);
        $data->ar_name=$request->ar_name;
        $data->en_name=$request->en_name;
        $data->role=$request->role;
        $data->type=$request->type;

        try {
            $data->save();

        } catch (Exception $e) {
            return back()->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }
}
