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
}
