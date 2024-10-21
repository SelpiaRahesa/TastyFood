<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::latest()->paginate(0);
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);

        $slider = new Slider();
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/sliders', $image->hashName());
        $slider->image = $image->hashName();
        $slider->save();
        Alert::success('Success', 'Data Added Successfully')->autoClose(1000);
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));

        $slider->save();
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
        $slider = Slider::findOrFail($id);
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/sliders', $image->hashName());
        $slider->image = $image->hashName();
        $slider->save();
        Alert::success('Success', 'Data Updated Successfully')->autoClose(1000);
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        Storage::delete('public/sliders/' . $slider->image);
        $slider->delete ();
        Alert::success('Success', 'Data Succesfully Deleted')->autoClose(2000);
        return redirect()->route('slider.index');
    }
}
