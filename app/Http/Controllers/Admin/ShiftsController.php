<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shift;
use App\Shiftsetting;
use Illuminate\Http\Request;

class ShiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Shift = Shift::OrderBy('id','desc')->paginate(10);
        return view('Admin.shifts.index',compact('Shift'));
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
        $data=$this->validate(\request(),
            [
                'name'=>'required|unique:shifts',
                'delayallowed'=>'required',
                'leaveallowed'=>'required',

            ]);




        $shifts =  Shift::create($data);
        $shifts->save();


        //add 7 rows to shiftSettings (sat , sun , mon ,.....)
        $shift_id = $shifts->id;

        $data = array(
            array('shift_id'=>$shift_id, 'day'=>'Saturday'),
            array('shift_id'=>$shift_id, 'day'=>'Sunday'),
            array('shift_id'=>$shift_id, 'day'=>'Monday'),
            array('shift_id'=>$shift_id, 'day'=>'Tuesday'),
            array('shift_id'=>$shift_id, 'day'=>'Wednesday'),
            array('shift_id'=>$shift_id, 'day'=>'Thursday'),
            array('shift_id'=>$shift_id, 'day'=>'Friday'),

        );


        Shiftsetting::insert($data);


//        $this->LogStore('اضافة ورديه واوقات دوام لها جديد');

        return redirect()->back()->with('message', 'Success');

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

        $Shift=Shift::find($request->id);
        return view('Admin.shifts.model',compact('Shift'));
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
        $data=$this->validate(\request(),
            [
                'name'=>'required|unique:shifts,name,'.$request->id,
                'delayallowed'=>'required',
                'leaveallowed'=>'required',


            ]);



        try {
            Shift::find($request->id)->update($data);

        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed');
        }
        return redirect()->back()->with('message', 'Success');
    }

    public function delete(Request $request)
    {

        try{
            Shift::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message'=>'Failed']);
        }
        return response()->json(['message'=>'Success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
