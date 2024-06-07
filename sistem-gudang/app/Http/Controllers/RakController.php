<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;

class RakController extends Controller
{
    public function index()
    {
        $rak = Rak::all();
        return view('pages.rak.index', ["rak" => $rak]);
    }

    public function create()
    {
        return view('pages.rak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_rak' => 'required',
        ]);

        $rak = new Rak;

        $rak->no_rak = $request->no_rak;
       

        $rak->save();

        return redirect('/rak');
    }

    public function show(string $id)
    {
        $rak = Rak::find($id);
        return view('pages.rak.show', ['rak' => $rak]);
    }

    public function edit(string $id)
    {
        $rak = rak::find($id);
        return view('pages.rak.edit', ['rak' => $rak]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            
            'no_rak' => 'required',

        ]);

        $rak = Rak::find($id);
        
      
        $rak->no_rak = $request['no_rak'];
       

        $rak->save();

        return redirect('/rak');
    }

    public function destroy(string $id)
    {
        $rak = Rak::find($id);
        $rak->delete();
        return redirect('/rak');
    }
}
