<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\family;
use App\Models\patient;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($_GET['sub']) == 'Login')
        {
            $flag = 'E';
            if (employee::whereEmail($request->email)->exists())
                $user = employee::whereEmail($request->email)->first();
            else if (patient::whereEmail($request->email)->exists())
            {
                $flag = 'P';
                $user = patient::whereEmail($request->email)->first();
            }
            else if (family::whereEmail($request->email)->exists())
            {
                $flag = 'F';
                $user = family::whereEmail($request->email)->first();
            }
            else return 'Email not found...';
            if ($request->password == $user->password)
            {
                session_start();
                $_SESSION['logged_in'] = true;
                $_SESSION['type'] = $flag;
                $_SESSION['id'] = $user->id;
                switch ($flag)
                {
                    case 'E':
                        switch ($user->role_name) {
                            case 'Caregiver':
                                return redirect('caregiver-home');
                                $_SESSION['job'] = 'caregiver';
                                break;
                            case 'Admin':
                                return redirect('admin-home');
                                $_SESSION['job'] = 'admin';
                                break;
                            case 'Doctor':
                                return redirect('doctor-home');
                                $_SESSION['job'] = 'doctor';
                                break;
                            case 'Supervisor':
                                return redirect('supervisor-home');
                                $_SESSION['job'] = 'supervisor';
                                break;
                        }
                        break;
                    case 'P':
                        return redirect('patient-home');
                        break;
                    case 'F':
                        return redirect('welcome');
                        break;
                }
            }
            else return 'Incorrect password!';
        }
        else return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
