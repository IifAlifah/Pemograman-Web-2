<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Laptop;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function showDataPengguna()
    {
        $data['users'] = User::all();

        return view('data_pengguna',$data);
    }

    public function showUserLaptop()
    {
        $data['laptop'] = Laptop::all();

        return view('userLaptop',$data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $namaInput = $request->input('namaInput');
        $emailInput = $request->input('emailInput');
        $passwordInput = Hash::make($request->input('passwordInput')) ;
        $is_admin = $request->input('is_adminInput');

        // dd($request->input(''));

        $query = DB::table('users')->insert([
            'name' => $namaInput,
            'email' => $emailInput,
            'password' => $passwordInput,
            'is_admin' => $is_adminInput
        ]);

        if ($query) {
            return redirect()->route('dashboard.showDataPengguna');
        } else {
            return redirect()->route('dashboard.showDataPengguna');
        }

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
        $data['users'] = DB::table('users')->where('id', $id)->first();
        return view('editUser', $data);

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
        $namaInput = $request->input('namaInput');
        $emailInput = $request->input('emailInput');
        $passwordInput = Hash::make($request->input('passwordInput'));
        $is_admin = $request->input('is_adminInput');

        $query = DB::table('users')->where('id', $id)->update([
            'name' => $namaInput,
            'email' => $emailInput,
            'password' => $passwordInput,
            'is_admin' => $is_adminInput
        ]);

        if ($query) {
            return redirect()->route('dashboard.showDataPengguna');
        } else {
            return redirect()->route('dashboard.showDataPengguna');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('users')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('dashboard.showDataPengguna');
        } else {
            return redirect()->route('dashboard.showDataPengguna');
        }

    }



}
