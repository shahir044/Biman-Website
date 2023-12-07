<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\files;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePasswordSubmit(Request $request)
    {
        # code...
        $newPassword = $request->input('new_password');
        $confirmPassword = $request->input('new_password');

        if ($newPassword == $confirmPassword) {
            $user  = User::find(auth()->user()->id);
            $user->password =  Hash::make($newPassword);

            $user->save();
            return redirect('changePassword')->with('success', 'Password successfully updated');
        } else {
            return redirect('changePassword')->with('errors', 'Password update unsuccessful');
        }
    }

    public function changePassword()
    {
        # code...
        return view('admin.changePassword');
    }

    
    public function index()
    {
        if(Gate::denies('logged-in')){
            return redirect('/');
        }

        if(Gate::allows('is-flightschedule')){
            
            return redirect()->route('flightSchedule');
        }

        if (Gate::allows('is-newsUpload')) {
            return redirect()->route('newsUpload');
        }

        if (Gate::allows('is-travelAdvisory')) {
            return redirect()->route('advisoryUpload');
        }
        

        else {
            return redirect()->route('index');
        }
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
