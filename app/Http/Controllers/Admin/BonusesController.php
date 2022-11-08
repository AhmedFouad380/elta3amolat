<?php

namespace App\Http\Controllers\Admin;

use App\Bonuses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BonusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Bonuses = Bonuses::OrderBy('id','desc')->paginate(10);
        return view('Admin.Bonuses.index',compact('Bonuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {

            $data= $this->validate(request(),[
                'name'=>'required|unique:bonuses',
                'overtime'=>'required',
                'late'=>'required',
                'early'=>'required',
                'notsign'=>'required ',
                'absence'=>'required',
            ]);



            try {
                Bonuses::create($data);
            } catch (\Exception $e) {
                return redirect()->back()->with('message', 'Failed');
            }

//            $this->LogStore('اضافة سياسه حسميات وعلاوات جديد');

            return redirect()->back()->with('message', 'Success');
        }
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
    public function edit(Request $request)
    {

        $Bonuses=Bonuses::find($request->id);
        return view('Admin.Bonuses.model',compact('Bonuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

       $data =  $this->validate(request(),[
            'name'=>'required|unique:bonuses,name,'.$request->id,
            'overtime'=>'required',
            'late'=>'required',
            'early'=>'required',
            'notsign'=>'required ',
            'absence'=>'required',

        ]);



        try {
              Bonuses::find($request->id)->update($data);

        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed');
        }
        return redirect()->back()->with('message', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        try{
            Bonuses::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }
}
