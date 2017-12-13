<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use View;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::Table('users')->paginate(10);
        $users = User::paginate(10);
        // return View('users.display',['users' => $users]);
        return View('users.display',compact('users'));
    }

    public function register(Request $request)
    {
        // return $request->all();
        return View('users.register');
    }

    public function registerstore(Request $request)
    {
        // return $request->username;
        DB::insert('insert into users (usr_username, usr_password, usr_name, usr_phone, usr_email) values (?, ?, ?, ?, ?)', [$request->username, $request->password, $request->namalengkap, $request->telepon, $request->email]);
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */

    public function cobalogin(Request $request)
    {
        // $matchthese = ['usr_username'=>$request->username,'usr_password'=>$request->password];
        $user = DB::table('users')->where([
        ['usr_username', '=', $request->username],
        ['usr_password', '=', $request->password]
        ])->get();
        if (count($user)=='0') {
            return 'Anda tidak terdaftar!';
        } else {
            return redirect('user');
        }
        
        // return $request->all();
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::whereUsr_username($username)->first();
        return View('users.displayuser',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function edit($usr_username)
    {
        $user = User::whereUsr_username($usr_username)->first();
        return View('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$usr_username)
    {
        // return $request->all();
        // $user = User::whereUsr_username($usr_username)->first();
        User::where('usr_username',$usr_username)->update(['usr_username' => $request->username,'usr_password' => $request->password,'usr_name' => $request->namalengkap,'usr_email' => $request->email,'usr_phone' => $request->telepon]);
        // $user->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */

    public function deleteconfirm($usr_username)
    {
        $user = User::whereUsr_username($usr_username)->first();
        return View('users.delete',compact('user'));
    }

    public function destroy(Request $request)
    {
        User::where('usr_username',$request->username)->delete();
        return redirect('/user');
        // return $request->all();
    }

    public function alljson()
    {
        $users = User::all();
        return $users;
    }

    public function userjson($username)
    {
        $user = User::whereUsr_username($username)->first();
        return $user;
    }
}
