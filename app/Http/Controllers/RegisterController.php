<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\patient;
use Illuminate\Http\Request;

class RegisterController extends Controller
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
        $request->validate([
            'userType' => 'required',
            'fName' => 'required',
            'lName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'DOB' => 'required',
            'FamilyPassword' => 'required',
            'FamilyContactName' => 'required',
            'FamilyContactNumber' => 'required',
            'FamilyRelation' => 'required'
        ]);

        switch ($request->userType) {
            case "Patient":
                $patient = new patient;
                $patient->f_name = $request->fName;
                $patient->l_name = $request->lName;
                $patient->email = $request->email;
                $patient->phone = $request->phone;
                $patient->password = $request->password;
                $patient->age = Carbon::parse($request->DOB)->age;
                $patient->dob = $request->DOB;
                $patient->family_password = $request->FamilyPassword;
                $patient->ec_phone = $request->FamilyContactNumber;
                $patient->ec_name = $request->FamilyContactName;
                $patient->ec_relation = $request->FamilyRelation;
                $patient->save();
                break;
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
