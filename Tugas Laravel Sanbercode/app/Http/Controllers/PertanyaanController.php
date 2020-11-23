<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;

class PertanyaanController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:questions',
            'isi' => 'required'
        ]);

        $question = Question::create([
            "judul" => $request['judul'],
            "isi" => $request['isi']
        ]);

        return redirect('pertanyaan')->with('success', 'Pertanyaan Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        $questions = Question::find($id);

        return view('questions.show', compact('questions'));
    }

    public function edit($id)
    {
        $questions = Question::find($id);

        return view('questions.edit', compact('questions'));
    }

    public function update($id, Request $request)
    {

        $question = Question::where('id', $id)->update([
            "judul" => $request['judul'],
            "isi" => $request['isi']
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Diedit!');
    }

    public function destroy($id)
    {
        Question::destroy($id);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Dihapus!');
    }
}
