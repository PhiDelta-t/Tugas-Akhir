<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::all();
        return view('pages.admin.index', ["admin" => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $admin = new Admin;

        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->nama = $request->nama;
        $admin->no_hp = $request->no_hp;
        $admin->alamat = $request->alamat;

        $admin->save();

        return redirect('/adm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Admin::find($id);
        return view('pages.admin.show', ["admin" => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::find($id);
        return view('pages.admin.edit', ["admin" => $admin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $admin = admin::find($id);

        $admin->username = request('username');
        $admin->password = request('password');
        $admin->nama = request('nama');
        $admin->no_hp = request('no_hp');
        $admin->alamat = request('alamat');

        $admin->save();
        return redirect('/adm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = admin::find($id);
        $admin->delete();
        return redirect('/adm');
    }
}
