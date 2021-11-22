<?php

namespace App\Http\Controllers;

use App\Models\caregiver;
use App\Models\employee;
use App\Models\family;
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
        // $request->validate([
        //     'userType' => 'required',
        //     'fName' => 'required',
        //     'lName' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'password' => 'required',
        //     'DOB' => 'required',
        //     'FamilyPassword' => 'required',
        //     'FamilyContactName' => 'required',
        //     'FamilyContactNumber' => 'required',
        //     'FamilyRelation' => 'required'
        // ]);

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
            case "Doctor":
                $doctor = new employee();
                $doctor->f_name = $request->fName;
                $doctor->l_name = $request->lName;
                $doctor->role_id = 3;
                $doctor->email = $request->email;
                $doctor->password = $request->password;
                $doctor->save();
                break;
            case "Caregiver":
                $Caregiver = new caregiver();
                $Caregiver->f_name = $request->fName;
                $Caregiver->l_name = $request->lName;
                $Caregiver->role_id = 4;
                break;
            case "Admin":
                $Admin = new employee();
                $Admin->f_name = $request->fName;
                $Admin->l_name = $request->lName;
                $Admin->email = $request->email;
                $Admin->password = $request->password;
                $Admin->role_id = 1;
                $Admin->save();
                break;
            case "Supervisor":
                $Supervisor = new employee();
                $Supervisor->f_name = $request->fName;
                $Supervisor->l_name = $request->lName;
                $Supervisor->email = $request->email;
                $Supervisor->password = $request->password;
                $Supervisor->role_id = 2;
                $Supervisor->save();
                break;
            case "Family":
                $family = new family();
                $family->family_password = $request->FamilyPassword;
                $family->f_name = $request->fName;
                $family->l_name = $request->lName;
                $family->email = $request->email;
                $family->phone = $request->phone;
                $family->password = $request->password;
                $family->dob = $request->DOB;
                $family->save();
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
