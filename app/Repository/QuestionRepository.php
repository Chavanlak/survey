<?php
namespace App\Repository;

use App\Http\Controllers\AnswerController;
use App\Models\Question;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class QuestionRepository{
    public static function getAll(){
        return Question::all();
    }
}
?>