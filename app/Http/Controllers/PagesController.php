<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function index()
    {
        $note = 'This is my note';
        return view('pages.index')->with('note', $note);
    }
    public function services()
    {
        $data = array('Note' => 'Note about services.', 'services' => ['Painting', '', 'Roof washing', 'Lawn Cutting']);
        return view('pages.services')->with($data);
    }
    public function about()
    {
        $author = 'Brendon';
        return view('pages.about')->with('author', $author);
    }
}
