<?php
namespace App\Repository;

use App\Models\Surveyform;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SurveyformRepository{
   public static function getIdSurveyform($IdSurvey){
    return Surveyform::where('IdSurvey','=',$IdSurvey);
   }
   public static function getAllSurveyForm(){
    return Surveyform::all();
   }
<<<<<<< HEAD
   public static function Info($name,$email,$comment,$phone,$branch){
=======
   public static function Info($name,$email,$comment,$phone){
>>>>>>> 77237b9f0565d18aed870e7ba782f5e7f04d6e38
        $data = new Surveyform();
        // $data->date = $date;
        $data->name = $name;
        $data->phone = $phone;
        $data->email = $email;
        $data->comment = $comment;
<<<<<<< HEAD
        $data->branch = $branch;
=======
>>>>>>> 77237b9f0565d18aed870e7ba782f5e7f04d6e38
        $data->save();
        return $data->IdSurvey;
   }
   public static function addInfo($date,$name,$email,$comment,$phone,$IdQuestion,$IdAnswer){

   }

}
?>
