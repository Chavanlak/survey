<?php

namespace App\Http\Controllers;
use App\Repository\QuestionRepository;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public static function getAll(){
        $data = QuestionRepository::getAll();
        return view('show',['data'=>$data]);
      
    }
    public static function showQuestion(){
        return view('Showsurvey');
    }
    public static function getQuestion(Request $request){
        $question = $request->question;

    }
    public static function getAnswer(Request $request){
        $answer = $request->answer;
        $question = $request->question;

        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $comment = $request->comment;




    }
    
}
