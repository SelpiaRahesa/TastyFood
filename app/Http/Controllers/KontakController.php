<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::first();
        // confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'no_telepon' => 'required',
        //     'email' => 'required',
        //     'alamat' => 'required',

        // ]);

        // $kontak = new Kontak();
        // $kontak->no_telepon = $request->no_telepon;
        // $kontak->email = $request->email;
        // $kontak->alamat = $request->alamat;
        // $kontak->save();
        // Alert::success('Success', 'Data Added Successfully')->autoClose(1000);
        // return redirect()->route('kontak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('admin.kontak.edit', compact('kontak'));

        $kontak->save();
        return redirect()->route('kontak.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'no_telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->no_telepon = $request->no_telepon;
        $kontak->email = $request->email;
        $kontak->alamat = $request->alamat;
        $kontak->save();
        Alert::success('Success', 'Data Updated Successfully')->autoClose(1000);
        return redirect()->route('kontak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $kontak = Kontak::findOrFail($id);
        // $kontak->delete();
        // Alert::toast('Success', 'Data Succesfully Deleted')->success('Success', 'Data Succesfully Deleted');
        // return redirect()->route('kontak.index');
    }
}
