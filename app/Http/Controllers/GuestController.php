<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        // $updates = Update::where('is_private', false)->latest()->get();

        // dd($updates);

        return view('users.guest.index', [
            'updates' =>  Update::where('is_private', false)->latest()->simplePaginate(8)
        ]);
    }

    public function show(Update $update) {
        return view('users.guest.show', [
            'updates' => Update::where('is_private', false)->latest()->paginate(5),
            'update' => $update
        ]) ;
    }
}
