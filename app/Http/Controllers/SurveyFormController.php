<?php

namespace App\Http\Controllers;

use App\Models\Surveyform;
use App\Repository\ChoiceRepository;
use App\Repository\QuestionRepository;
use App\Repository\SurveyformRepository;
use Illuminate\Http\Request;

class SurveyFormController extends Controller
{

public static function saveform(Request $request) {
    $date = $request->date;
    $name = $request->name;
    $phone = $request->phone;
    $email = $request->email;
    $comment = $request->comment;
    
    SurveyformRepository::Info($date,$name,$email,$comment,$phone);

  
}
public static function getQuestion($IdQuestion){
    $question = QuestionRepository::getQuestionId($IdQuestion);
    return view('surveyForm',compact('question'));
}
public static function getChoice($IdChoice){
    $choice = ChoiceRepository::getChoiceById($IdChoice);
    return view('SurveyForm',compact('choice'));
}

public static function getInfo($date,$name,$email,$comment,$phone){
    $data = SurveyformRepository::Info($date,$name,$email,$comment,$phone);
      return $data;
  }
}
