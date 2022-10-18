<?php

namespace Database\Seeders;

use App\Models\Question;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'code' => 'RE01',
            'questions' => 'Memperkenalkan diri ke orang lain bukan merupakan hal yang mudah bagi Anda',
            'a' => '0',
            'b' => '1',
            'c' => '2',
            'd' => '3',
            'e' => '4',
            'f' => '5',
            'g' => '6'
        ]);
        DB::table('questions')->insert([
            'code' => 'RE02',
            'questions' => 'Anda sering tenggelam dalam pikiran Anda hingga melupakan sekeliling',
            'a' => '0',
            'b' => '1',
            'c' => '2',
            'd' => '3',
            'e' => '4',
            'f' => '5',
            'g' => '6'
        ]);
        DB::table('questions')->insert([
            'code' => 'RE03',
            'questions' => 'Anda dapat tetap fokus meski sedang di bawah tekanan',
            'a' => '6',
            'b' => '5',
            'c' => '4',
            'd' => '3',
            'e' => '2',
            'f' => '1',
            'g' => '0'
        ]);
        DB::table('questions')->insert([
            'code' => 'RE04',
            'questions' => 'Anda bukan orang yang sering memulai percakapan',
            'a' => '0',
            'b' => '1',
            'c' => '2',
            'd' => '3',
            'e' => '4',
            'f' => '5',
            'g' => '6'
        ]);
        DB::table('questions')->insert([
            'code' => 'RE05',
            'questions' => 'Anda merasa lebih unggul dari orang lain',
            'a' => '0',
            'b' => '1',
            'c' => '2',
            'd' => '3',
            'e' => '4',
            'f' => '5',
            'g' => '6'
        ]);

        $questions = DB::table('questions')->get();

        foreach ($questions as $question) {
            DB::table('tests')->insert([
                'code' => $question->code,
                'questions' => $question->questions
            ]);
        }
    }
}
