<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\inboxThirdParty;
class InboxThirdPartyController extends Controller
{
    public function index(){

            $data = inboxThirdParty::OrderBy('id','desc')->paginate(10);

        return view('Admin.inboxThirdParty.index',compact('data'));
    }

    public function Search(Request $request){

        $data = inboxThirdParty::where('name','like','%'.$request->search.'%')->paginate(50);
        return view('Admin.inboxThirdParty.index',compact('data'));

    }
    public function store(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',
        ]);

        $data=new inboxThirdParty;
        $data->name=$request->name;

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
            inboxThirdParty::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $data =inboxThirdParty::find($request->id);
        return view('Admin.inboxThirdParty.model',compact('data'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|string',

        ]);
        $data= inboxThirdParty::find($request->id);
        $data->name=$request->name;

        try {
            $data->save();

        } catch (Exception $e) {
            return back()->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }
}
