<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // returns name found by id
        function getNameByID($id) {
            $employee = DB::table('employees')
                            ->where('id', $id)
                            ->get()->first();
            $output = $employee->f_name." ".$employee->l_name;
            return $output;
        }
        $_SESSION['AR'] = DB::table('doctor_appointments')
                        ->join('employees', 'doctor_appointments.employee_id', '=', 'employees.id')
                        ->join('caregivers', 'doctor_appointments.date', '=', 'caregivers.date')
                        ->get()->toArray();

        // $_SESSION['AR-doctorApps'] = DB::table('doctor_appointments')
        //             ->get()->toArray();
        // $_SESSION['AR-caregivers'] = DB::table('doctor_appointments')
        //             ->get()->toArray();
        dd($_SESSION['AR'], $_SESSION['AR-doctorApps']);

        return redirect('admin-home');
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
