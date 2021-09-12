<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RankingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

	public function home(){
		return view('home', ['name' => 'Tecnofit']);
	}
    /**
     * Return a ranking movement from determinate movement id
     *
     * @param  Request  $request
     * @return Response
     */
    public function rankingmovement(Request $request)
    {

		$movementid = (int) $request->movement_id;

		if(!$movementid){
 			return response()->json([ 'error' =>  'Movement not found.']);
		}

		$movementname = 'movement';
		$mov = DB::table('movement')->where('id', $movementid)->first();
		if($mov){
			$movementname = $mov->name;	
		}

		$difusers = $this->getUsers($movementid);
		$limit = count($difusers);

		try{
			$records = $this->getRecords($movementid, $limit);
			if($records == null){
				 return response()->json([ $movementname =>  'Not records for this movement... Look at an opportunity!']);
			}
			$record = 0;
			$position = 0;
			foreach ($records as $ranking) {
				if($record != $ranking->value)
					$position++;

			    $movement[] = (object)[
	                                   'user' => $ranking->name,
	                                   'record' => $ranking->value,
	                                   'position' => $position,
	                                   'date' => $ranking->date
	                               ];    

	            $record = $ranking->value;      
	            $movementname = $ranking->movement;
			}


		}catch(\Exception $e){
			return response()->json([ 'error' =>  'Malformed query!']);
		}
		

         return response()->json([ $movementname =>  $movement]);

    }


    public function getUsers($movementid){

		$users	= DB::select("SELECT distinct user_id  
									FROM personal_record
									INNER JOIN user ON user.id = user_id
									WHERE movement_id = {$movementid}");
		if($users){
			return $users;
		}else{
			return array();
		}
    }
    public function getRecords($movementid, $limit){

		$records	= DB::select("SELECT user_id,movement_id, date, u.name,

					  (SELECT max(value)
					   FROM personal_record
					   WHERE id= pr.id) AS value,
					                          m.name AS movement
					FROM personal_record pr
					INNER JOIN USER u ON u.id = user_id
					INNER JOIN movement m ON m.id = pr.movement_id
					WHERE movement_id = {$movementid}
					ORDER BY value DESC
					LIMIT {$limit}");

		return $records;
		
    }

}

