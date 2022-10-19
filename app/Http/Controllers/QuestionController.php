<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function show() {
        return view('dashboard', [
            'title' => 'Dashboard',
            'questions' => Question::all()
        ]);
    }

    public function store() {
        DB::table('questions')->insert([
            'code' => request()->code,
            'questions' => request()->question,
            'a' => request()->a,
            'b' => request()->b,
            'c' => request()->c,
            'd' => request()->d,
            'e' => request()->e,
            'f' => request()->f,
            'g' => request()->g
        ]);
    }
}
