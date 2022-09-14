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

    function delete($id) {
        Note::destroy($id);
        return redirect() -> route('notes.index') -> with('message', 'Prawidłowe usunięcie notatki.');
    }

    function store(Request $request)
    {
        function key_gen() {
            $calendar = date("Y/m/d");
            $calendar_numbers_as_str = '';
            for ($i = 0; $i<10; $i++) {
                if ($calendar[$i] != "/") {
                    $calendar_numbers_as_str .= $calendar[$i];
                }
            }

            $calendar_data_as_int = (int)$calendar_numbers_as_str * 13;
            return $calendar_data_as_int;
        }
        
        $request -> validate(
            [
                'title' => 'required',
                'author' => 'required',
                'category' => 'required',
                'body' => 'required',
                'secret_key' => 'required|digits:9|in:'. key_gen(),
            ]
        );

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
