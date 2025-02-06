<?php
namespace App\Repository;

use App\Http\Controllers\AnswerController;
use App\Models\Answer;
use App\Models\Question;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class QuestionRepository{
    public static function getAll(){
        return Question::all();
    }

    public static function getQuestionId($IdQuestion){
        return Question::where('IdQuestion ','=',$IdQuestion);
    }
    //ดึง forien key
    public static function getIdQuesionbyAnswer($IdQuestion){
       
    }
}
?>