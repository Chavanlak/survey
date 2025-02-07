<?php

namespace App\Http\Controllers;

use App\Repository\ChoiceRepository;
use App\Repository\QuestionRepository;
use App\Repository\SurveyformRepository;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public static function getIdQuesion($IdQuestion){
        $getq = QuestionRepository::getQuestionId($IdQuestion);
        return $getq;
    }
    public static function getIdChoice($Idchoice){
        $getch = ChoiceRepository::getChoiceById($Idchoice);
        return $getch;
    }
    public static function getIdSurvey($IdSurveyform){
        $getsur = SurveyformRepository::getIdSurveyform($IdSurveyform);
        return $getsur;
    }
    
}
