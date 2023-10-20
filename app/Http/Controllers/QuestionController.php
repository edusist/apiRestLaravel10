<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{

    public function fetchInsert()
    {

        $response = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => 'JqbLEVbCpIhm9daNWzaCxyC00Z3sWH5EwgXz0IED',
            'limit' => 10,
        ]);

        $questions = json_decode($response->body());
        // echo "<pre>";
        // dd($questions);
        // echo "</pre>";


        foreach ($questions as $q) {

            $question = new Question();

            $question->question = $q->question;
            $question->answer_a = $q->answers->answer_a;
            $question->answer_b = $q->answers->answer_b;
            $question->answer_c = $q->answers->answer_c;


            $question->save();

            
        }
        return "Dados salvo no BD com sucesso";
    }

    public function show()
    {

        $data['respostas'] = Question::all();

        return view('welcome', $data);
    }
}
