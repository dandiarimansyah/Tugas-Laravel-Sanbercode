<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $questions = DB::table('questions')->get();

        return view('questions.list_questions', compact('questions'));
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

        $query = DB::table('questions')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);

        return redirect('question')->with('success', 'Pertanyaan Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        $questions = DB::table('questions')->where('id', $id)->first();
        return view('questions.show', compact('questions'));
    }

    public function edit($id)
    {
        $questions = DB::table('questions')->where('id', $id)->first();
        return view('questions.edit', compact('questions'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:questions',
            'isi' => 'required'
        ]);

        $questions = DB::table('questions')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);
        return redirect('/question')->with('success', 'Pertanyaan Berhasil Diedit!');
    }

    public function destroy($id)
    {
        $questions = DB::table('questions')->where('id', $id)->delete();
        return redirect('/question')->with('success', 'Pertanyaan Berhasil Dihapus!');
    }
}
