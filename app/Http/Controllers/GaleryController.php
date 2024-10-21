<?php

namespace App\Http\Controllers;
Use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galery = Galery::latest()->paginate(0);
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.galery.index', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);

        $galery = new Galery();
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/galeries', $image->hashName());
        $galery->image = $image->hashName();
        $galery->save();
        Alert::success('Success', 'Data Added Successfully')->autoClose(1000);
        return redirect()->route('galery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galery = Galery::findOrFail($id);
        return view('admin.galery.edit', compact('galery'));

        $dataGuru->save();
        return redirect()->route('dataGuru.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);
        $galery = Galery::findOrFail($id);
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/galeries', $image->hashName());
        $galery->image = $image->hashName();
        $galery->save();
        Alert::success('Success', 'Data Updated Successfully')->autoClose(1000);
        return redirect()->route('galery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galery = Galery::findOrFail($id);
        Storage::delete('public/galeries/' . $galery->image);
        $galery->delete();
        Alert::success('Success', 'Data Succesfully Deleted')->autoClose(2000);
        return redirect()->route('galery.index');
    }
}
