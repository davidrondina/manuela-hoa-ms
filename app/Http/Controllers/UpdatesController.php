<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('updates.updates', [
            'updates' => Update::latest()->simplePaginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('updates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->body);
        // dd($request->has('setToPublic') ? true : false);

        $formFields = $request->validate([
            'title' => 'required',
            'body'=> 'required',
            'tags' => 'required',
        ]);

        $formFields['is_private'] = !$request->has('setToPublic') ? true : false;

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('thumbnails', 'public');
        }

        $formFields['user_id'] = 1;

        Update::create($formFields);

        return redirect('/updates');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Update $update) // $id
    {

        // $update = Update::find($id);

        // return view('updates.show', compact(['update']));

        return view('updates.show', [
            'update' => $update
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Update $update)
    {
        return view('updates.edit', [
            'update' => $update
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Update $update)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'body'=> 'required',
            'tags' => 'required',
        ]);

        $formFields['is_private'] = !$request->has('setToPublic') ? true : false;

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('thumbnails', 'public');
        }

        $formFields['user_id'] = 1;

        $update->update($formFields);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Update $update)
    {
        $update->delete();

        return redirect('/updates');
    }
}
