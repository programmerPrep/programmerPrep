<?php

class DashboardController extends \BaseController {

    public function show($id){
    $user = User::find($id);
    $is_mentor = User::checkIfMentor($user);

    if ($is_mentor){
     
        $relationship = DB::table('relationships')->where('mentor_id', $id)->get();

        



     // var_dump($user->students());
     // var_dump($relationship = Relationship::where('mentor_id', '=', $id)->get());

    } else {

        $relationship = DB::table('relationships')->where('student_id', $id)->get();

        


        // var_dump($user->mentors());
        // var_dump($relationship = Relationship::where('student_id', '=', $id)->get());
    }
    return View::make('test')->with('relationship', $relationship);

    }
}

