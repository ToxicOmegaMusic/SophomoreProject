<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\family;
use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            if (DB::table('employees')->where('email', $request->email)->exists())
                $user = employee::all()->where('email', $request->email);
            else if (DB::table('patients')->where('email', $request->email)->exists())
            {
                $flag = 'P';
                $user = patient::all()->where('email', $request->email);
            }
            else if (DB::table('families')->where('email', $request->email)->exists())
            {
                $flag = 'F';
                $user = family::all()->where('email', $request->email);
            }
            else return 'Email not found...';

            if ($request->password == $user[0]->password)
            {
                session_start();
                $_SESSION['logged_in'] = true;
                $_SESSION['type'] = $flag;
                $_SESSION['id'] = $user[0]->id;
                switch ($flag)
                {
                    case 'E':
                        return redirect('welcome');
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
