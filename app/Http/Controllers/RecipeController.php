<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Recipe;

class RecipeController extends Controller
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

    public function create($id)
    {
        return view('recipe.create', [
            'box_id' => $id,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'recipe-name' => 'required|max:255',
            'recipe-content' => 'required|max:64000',
        ]);

        $recipe = new Recipe;
        $recipe->box_id = $request->input('box-id');
        $recipe->name = $request->input('recipe-name');
        $recipe->content = $request->input('recipe-content');
        $recipe->save();

        return redirect('/home');
    }
}
