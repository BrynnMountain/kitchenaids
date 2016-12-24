<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Recipe;

use Auth;

class RecipeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
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

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipe/show', [
            'recipe' => $recipe,
        ]);
    }

    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);

        if (Auth::id() == $recipe->box->user_id)
        {
            $recipe->delete();
        }
        return redirect('/home');
    }
}
