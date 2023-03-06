<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();
        return view ('clients.clients-list')->with(['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()// return all clients for users
    {
        $clients = Client::all();
        return view('clients.show-all')->with(['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        # Validation
        $request->validate([
            'image' => 'required',
            'name' => 'required',
        ],
        [
            'name.required' => 'Insert client\'s name',
            'image.required' => 'Upload clent\'s logo',
        ]);
        return $request->input('type');
        $client = new Client;
        $client->name = $request->input('name');
        $client->acronym = $request->input('acronym');
        $client->type = $request->input('type');

        if ($request->has('image'))
            $imageName = $client->acronym.'.'.$request->image->extension();  
            $request->image->move(public_path('assets/img/client/'), $imageName);
            $client->image = $imageName;
        $client->save();

        $clients = Client::orderBy('created_at', 'desc')->get();

        return view ('welcome')->with(['clients'=>$clients]);
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
        //
    }
}
