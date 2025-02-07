<?php
namespace App\Repository;

use App\Models\Choice;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ChoiceRepository{
   public static function getChoiceById($Idchoice){
    return Choice::where('Idchoice','=',$Idchoice);
   }
  
}
?>