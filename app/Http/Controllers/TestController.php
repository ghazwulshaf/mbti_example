<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function show() {
        return view('test', [
            'title' => 'Test',
            'questions' => Question::all()
        ]);
    }

    public function store() {
        $request = request()->except('_token');

        foreach ($request as $key => $value) {
            DB::table('tests')->where('code', $key)->update([
                'point' => $value
            ]);
        }
        // return request()->except('_token');
        return redirect('/report');
    }
}
