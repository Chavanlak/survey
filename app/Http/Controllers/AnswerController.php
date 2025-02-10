<?php

namespace App\Http\Controllers;

use App\Repository\AnswerRepository;
use App\Repository\ChoiceRepository;
use App\Repository\QuestionRepository;
use App\Repository\SurveyformRepository;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    // public static function getIdQuesion($IdQuestion){
    //     $getq = QuestionRepository::getQuestionId($IdQuestion);
    //     return $getq;
    // }
    // public static function getIdChoice($Idchoice){
    //     $getch = ChoiceRepository::getChoiceById($Idchoice);
    //     return $getch;
    // }
    // public static function getIdSurvey($IdSurveyform){
    //     $getsur = SurveyformRepository::getIdSurveyform($IdSurveyform);
    //     return $getsur;
    // }
    public static function getQuestionId(Request $request){
        $question = QuestionRepository::getQuestionId($request->IdQuestion);
        return view('survey',compact('question'));
    }
    // public static function getChoiceInAnswer(){
    //     $answerList = 
    // }
    public static function getAnswer($IdQuestion,$Idchoice,$IdSurveyForm){
        $question = QuestionRepository::getQuestionId($IdQuestion);
        $choice = ChoiceRepository::getChoiceById($Idchoice);
        // $surveyform = SurveyformRepository::getAllSurveyForm($IdSurveyForm);
        $surveyform = SurveyformRepository::getIdSurveyform($IdSurveyForm);
        return view('survey',compact('question','choice','surveyform'));

    }
    public static function addInfo(Request $request){
        $date = $request->date;
        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;
        $phone = $request->phone;
        SurveyformRepository::Info($date,$name,$email,$comment,$phone);
        $IdQuestion = $request->IdQuestion;

        return view('survey');

    }
}
