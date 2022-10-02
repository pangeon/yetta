<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
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

    function find_for_update($id) 
    {
        $note = Note::find($id);
        return view('notes.edit', ['note' => $note]);
    }

    function delete($id) 
    {
        Note::destroy($id);
        if(app()->getLocale() == 'en') {
            return redirect() -> route('notes.index') -> with('message', 'Correct deletion of the note.');
        } else {
            return redirect() -> route('notes.index') -> with('message', 'Prawidłowe usunięcie notatki.');
        }
    }

    function store(Request $request)
    {
        $request -> validate(
            [
                'title' => 'required',
                'author' => 'required',
                'category' => 'required',
                'body' => 'required'
            ]
        );

        $note = new Note();
        $note -> title = $request -> title;
        $note -> author = $request -> author;
        $note -> category = $request -> category;
        $note -> body = $request -> body;
        $note -> color = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        $note -> secret_key = bin2hex(random_bytes(18));

        $note -> save();

        if(app()->getLocale() == 'en') {
            return redirect() -> route('notes.index') -> with('message', 'Operation succeed.');
        } else {
            return redirect() -> route('notes.index') -> with('message', 'Operacja zakończona powodzeniem.');
        } 
    }

    function update($id, Request $request)
    {
        $note = Note::find($id);
        $note -> title = $request -> title;
        $note -> author = $request -> author;
        $note -> category = $request -> category;
        $note -> body = $request -> body;

        $note -> save();

        if(app()->getLocale() == 'en') {
            return redirect() -> route('notes.index') -> with('message', 'Data update completed successfully.');
        } else {
            return redirect() -> route('notes.index') -> with('message', 'Aktualizacja danych zakończona powodzeniem.');
        }        
    }
}
