<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InboxGroupMembers;
class InboxGroupMembersController extends Controller
{
    public function index($id){

        $data = InboxGroupMembers::where('group_id',$id)->OrderBy('id','desc')->paginate(10);

        return view('Admin.InboxGroupMembers.index',compact('data','id'));

    }


    public function store(Request $request)
    {

        $this->validate(request(),[
            'group_id' => 'required',
            'user_id' => 'required',
        ]);

        $data=new InboxGroupMembers;
        $data->user_id=$request->user_id;
        $data->group_id=$request->group_id;

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
            InboxGroupMembers::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $data =InboxGroupMembers::find($request->id);
        return view('Admin.InboxGroupMembers.model',compact('data'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[
            'group_id' => 'required|string',

        ]);
        $data= InboxGroupMembers::find($request->id);
        $data->user_id=$request->user_id;
        $data->group_id=$request->group_id;

        try {
            $data->save();

        } catch (Exception $e) {
            return back()->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }
}
