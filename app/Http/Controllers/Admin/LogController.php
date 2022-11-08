<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(){

        $Logs = Log::paginate(10);
        return view('Admin.Log.index',compact('Logs'));

    }


    public function store(Request $request)
    {

        $this->validate(request(),[
            'description' => 'required'
        ]);

        $Log=new Log;
        $Log->user_id = 10;
        $Log->ip_address = request()->ip();
        $Log->description=$request->description;

        try {
            $Log->save();
        } catch (Exception $e) {
            return redirect('/Log')->with('error_message', 'Failed');
        }
        return redirect()->back()->with('message', 'Success');
    }

    public function delete(Request $request)
    {
        try{
            Log::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $Log=Log::find($request->id);
        return view('Admin.Log.model',compact('Log'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[

        ]);


        $Log= Log::find($request->id);

        $Log->ar_name = $request->ar_name;
        $Log->en_name = $request->en_name;
        $Log->page_name=$request->page_name;
        $Log->slug=$request->slug;

        try {
            $Log->save();

        } catch (Exception $e) {
            return redirect('/Logs')->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }

    public function logout(){

        Auth::logout();

        return redirect('/login');
    }
}
