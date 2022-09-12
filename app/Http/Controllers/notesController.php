<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class notesController extends Controller
{
    public function index() 
    {
        $data = 'Lista wpisów';
        $notes = Note::all();
        return view('notes.index', ['h2_title' => $data, 'notes' => $notes]);
    }
    public function create() 
    {
        return view('notes.create');
    }

    function find_for_update($id) {
        $note = Note::find($id);
        return view('notes.edit', ['note' => $note]);
    }

    function store(Request $request)
    {
        $note = new Note();
        $note -> title = $request -> title;
        $note -> author = $request -> author;
        $note -> category = $request -> category;
        $note -> date = date("Y/m/d");
        $note -> body = $request -> body;
        $note -> secret_key = $request -> secret_key;

        $note -> save();

        return redirect() -> route('notes.index') -> with('message', 'Operacja zakończona powodzeniem.');
        
    }
    function update($id, Request $request)
    {
        $note = Note::find($id);
        $note -> title = $request -> title;
        $note -> author = $request -> author;
        $note -> category = $request -> category;
        $note -> date = date("Y/m/d");
        $note -> body = $request -> body;

        $note -> save();

        return redirect() -> route('notes.index') -> with('message', 'Aktualizacja danych zakończona powodzeniem.');
        
    }
}
