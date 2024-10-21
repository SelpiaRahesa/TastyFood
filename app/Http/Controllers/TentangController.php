<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentang = Tentang::latest()->paginate(5);
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.tentang.index', compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tentang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'subjudul' => 'required',
            'deskripsi' => 'required',
            'image1' => 'required|image|mimes:jpeg,jpg,png|max:5000',
            'image2' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);

        $tentang = new Tentang();
        $tentang->judul = $request->judul;
        $tentang->subjudul = $request->subjudul;
        $tentang->deskripsi = $request->deskripsi;
        // upload image
        $image1 = $request->file('image1');
        $image1->storeAs('public/tentangs', $image1->hashName());
        $tentang->image1 = $image1->hashName();
        $image2 = $request->file('image2');
        $image2->storeAs('public/tentangs', $image2->hashName());
        $tentang->image2 = $image2->hashName();
        $tentang->save();
        Alert::success('Success', 'Data Added Successfully')->autoClose(1000);
        return redirect()->route('tentang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tentang = Tentang::findOrFail($id);
        return view('admin.tentang.edit', compact('tentang'));

        $tentang->save();
        return redirect()->route('tentang.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'subjudul' => 'required',
            'deskripsi' => 'required|min:5',
            'image1' => 'required|image|mimes:jpeg,jpg,png|max:5000',
            'image2' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);

        $tentang = Tentang::findOrFail($id);
        $tentang->judul = $request->judul;
        $tentang->subjudul = $request->subjudul;
        $tentang->deskripsi = $request->deskripsi;
        // upload image
        $image1 = $request->file('image1');
        $image1->storeAs('public/tentangs', $image1->hashName());
        $tentang->image1 = $image1->hashName();
        $image2 = $request->file('image2');
        $image2->storeAs('public/tentangs', $image2->hashName());
        $tentang->image2 = $image2->hashName();
        $tentang->save();
        Alert::success('Success', 'Data Updated Successfully')->autoClose(1000);
        return redirect()->route('tentang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tentang = Tentang::findOrFail($id);
        Storage::delete('public/tentangs/' . $tentang->image);
        $tentang->delete();
        Alert::success('Success', 'Data Succesfully Deleted')->autoClose(2000);
        return redirect()->route('tentang.index');
    }
}
