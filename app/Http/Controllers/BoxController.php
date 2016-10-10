<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Box;

class BoxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('box.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'box-name' => 'required|max:255|unique:boxes,name,NULL,id,user_id,'.Auth::id(),
        ]);

        $box = new Box;
        $box->name = $request->input('box-name');
        $box->user_id = Auth::id();
        $box->save();

        return redirect('/home');
    }
}
