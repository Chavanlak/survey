<?php
namespace App\Repository;

use App\Http\Controllers\AnswerController;
use App\Models\Answer;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnswerRepository{
    public static function getAll(){
        return Answer::all();
    }

    public static function getAnswerById($IdAnswer){
        return Answer::where('IdAnswer','=',$IdAnswer)->first();
    }
    public static function Answer($name,$phone,$email,$comment){
        $ans = new Answer();
        $ans->name = $name;
        $ans->phone = $phone;
        $ans->email = $email;
        $ans->comment = $comment;
        
    }
}
?>