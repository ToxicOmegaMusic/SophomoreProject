<?php

namespace App\Http\Controllers;

use App\Models\roster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewRosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors = DB::table('employees')
            ->where('role_id', '=', '2')
            ->get()->toArray();
        $doctors = DB::table('employees')
            ->where('role_id', '=', '3')
            ->get()->toArray();
        $caregivers = DB::table('employees')
            ->where('role_id', '=', '4')
            ->get()->toArray();
        return view('new-roster', compact('supervisors', 'doctors', 'caregivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $roster = new roster;
        $roster->date = $request->date;
        $roster->supervisor = $request->supervisor;
        $roster->doctor = $request->doctor;
        $roster->caregiver1 = $request->caregiver1;
        $roster->caregiver2 = $request->caregiver2;
        $roster->caregiver3 = $request->caregiver3;
        $roster->caregiver4 = $request->caregiver4;
        $roster->save();
        
        return redirect('roster');

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
