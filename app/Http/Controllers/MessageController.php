<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = Message::all();
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.message.index', compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
    {
        // ADD Message
        $this->validate( $request, [
            'subject'=>'required',
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);

        $message = new Message();
        $message->subject =$request->subject;
        $message->name =$request->name;
        $message->email =$request->email;
        $message->message =$request->message;
        $message->save();
        Alert::success('Success', 'Message  Successfully')->autoClose(2000);
        return redirect()->route('kontak');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        Alert::success('Success', 'Data Succesfully Deleted')->autoClose(2000);
        return redirect()->route('message.index');
    }
}
