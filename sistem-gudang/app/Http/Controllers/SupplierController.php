<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view('pages.supplier.index',["supplier"=> $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.supplier.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required|min:2',
            'kontak' => 'required',
            'email' => 'required',
        ]);

        $supplier = new Supplier;

        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->alamat = $request->alamat;                  
        $supplier->kontak = $request->kontak;
        $supplier->email = $request->email;

        $supplier->save();

        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = supplier::find($id);
        return view('pages.supplier.show',['supplier'=> $supplier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = supplier::find($id);
        return view('supplier.edit',['supplier'=> $supplier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required|min:2',
            'kontak' => 'required',
            'email' => 'required',
        ]);
        $supplier = supplier::find($id);

        $supplier->nama_supplier = request('nama_supplier');
        $supplier->alamat = request('alamat');
        $supplier->kontak = request('kontak');
        $supplier->email = request('email');

        $supplier->save();
        return redirect('/supplier');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supplier = supplier::find($id);
        $supplier->delete();
        return redirect('/supplier');
    }

}
