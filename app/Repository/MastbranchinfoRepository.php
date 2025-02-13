<?php
namespace App\Repository;

use App\Http\Controllers\AnswerController;
use App\Models\Mastbranchinfo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MastbranchinfoRepository{
   public static function getAllBranch(){
    return Mastbranchinfo::all();
}
public static function selectbranch(){
//    $branches = DB::table('fujipos.mastbranchinfo')
$branches = Mastbranchinfo::select(['fujipos.mastbranchinfo'])
//    ->select('mbranchinfo_code','location')
   ->select('location')
   ->where('dbtype', 'fuji')
   ->whereNotIn('mbranchinfo_code',['HO'])
   ->where('branch_active',1)
   ->where(function ($query) {
    $query->whereNull('closed')
          ->orWhere('closed', 0);
})
->get();
return view('surveyform',compact('branches'));
}
public static function getlocation($location){
    $kuay = Mastbranchinfo::where('location','=','$location')->first();
    return $kuay;
}

 
}
?>