<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\family_member;
use App\Models\patient;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        for ($i = 0; $i < $request->patient_total; $i++) {
            if ($request['patient_approve_' . $i]) {
                
                $user = patient::find($i+1);
                $user->approved = 1;
                $user->save();
            }
        }
        for ($i = 0; $i < $request->family_total; $i++) {
            if ($request['family_approve_' . $i]) {
                
                $user = family_member::find($i+1);
                $user->approved = 1;
                $user->save();
            }
        }
        for ($i = 0; $i < $request->employee_total; $i++) {
            if ($request['employee_approve_' . $i]) {
                
                $user = employee::find($i+1);
                $user->approved = 1;
                $user->save();
            }
        }
        return back();
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
