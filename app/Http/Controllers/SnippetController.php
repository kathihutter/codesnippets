<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function index()
    {
        $snippets = Snippet::all();
       return view('dashboard', [
           'snippets' => $snippets
       ]);
    }

}
