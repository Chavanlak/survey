<?php

namespace App\Http\Controllers;
use App\Repository\QuestionRepository;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public static function getIdQuesion($IdQuestion){
        $getId = QuestionRepository::getQuestionId($IdQuestion);
        return $getId;
    }
}
