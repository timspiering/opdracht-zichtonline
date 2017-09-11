<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Hier worden alle comments opgehaald uit de database met de id die wordt meegegeven vanuit de url.
    public function comments($id)
    {
        $data['id'] = $id;
        $data['comments'] = Comment::where('post_id', $id)->get();

        return view('comments', $data);
    }

    // Alle data vanuit de submit wordt hier opgevangen en behalven de _token gebruikt om een nieuwe comment aan te maken.
    public function postComment(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['post_id'] = $id;

        // Hele simpele validatie (zonder error messages) om te kijken of de name en body wel zijn ingevuld.
        if($request->get('name') && $request->get('body'))
            Comment::create($data);

        // Return back zonder response.
        return back();
    }
}
