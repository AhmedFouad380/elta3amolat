<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){

        $Languages = Language::paginate(10);
        return view('Admin.Language.index',compact('Languages'));

    }
    public function Search(Request $request){

        $Languages = Language::where('ar_name','like','%'.$request->search.'%')->orwhere('en_name','like','%'.$request->search.'%')->paginate(50);
        return view('Admin.Language.index',compact('Languages'));

    }


    public function store(Request $request)
    {

        $this->validate(request(),[
            'ar_name' => 'required|string',
            'en_name' => 'required|string',
            'page_name' => 'required|string',
            'slug' => 'required|string',
        ]);

        $Language=new Language;
        $Language->ar_name = $request->ar_name;
        $Language->en_name = $request->en_name;
        $Language->page_name=$request->page_name;
        $Language->slug=$request->slug;

        try {
            $Language->save();
        } catch (Exception $e) {
            return redirect('/Language')->with('error_message', 'Failed');
        }
        return redirect()->back()->with('message', 'Success');
    }

    public function delete(Request $request)
    {
        try{
            Language::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }


    public function edit(Request $request)
    {
        $Language=Language::find($request->id);
        return view('Admin.Language.model',compact('Language'));
    }


    public function update(Request $request)
    {

        $this->validate(request(),[

        ]);


        $Language= Language::find($request->id);

        $Language->ar_name = $request->ar_name;
        $Language->en_name = $request->en_name;
        $Language->page_name=$request->page_name;
        $Language->slug=$request->slug;

        try {
            $Language->save();

        } catch (Exception $e) {
            return redirect('/Languages')->with('error_message', 'هناك خطأ ما فى عملية الاضافة');
        }
        return redirect()->back()->with('message', 'Success');
    }

    public function logout(){

        Auth::logout();

        return redirect('/login');
    }
}
