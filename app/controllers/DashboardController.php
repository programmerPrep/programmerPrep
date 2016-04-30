<?php

class DashboardController extends \BaseController {

    public function show($id){
    $user = User::find($id);
    $is_mentor = User::checkIfMentor($user);

    if ($is_mentor){
     
        $relationship = DB::table('relationships')->where('mentor_id', $id)->get();
        $pending = [];
        $active = [];

        
        foreach($relationship as $value) {

            if ($value->is_pending == 1) {
                $temp = $value->student_id;
                $temp = DB::table('users')->where('id', $temp)->first();
                $pending[]= $temp;
            } elseif ($value->is_pending == 0) {
                $temp = $value->student_id;
                $temp = DB::table('users')->where('id', $temp)->first();
                $active[]= $temp;
            }
        }
        
     // var_dump($user->students());
     // var_dump($relationship = Relationship::where('mentor_id', '=', $id)->get());

    } else {

        $relationship = DB::table('relationships')->where('student_id', $id)->get();
        $pending = [];
        $active = [];
        
        foreach($relationship as $value) {

            if ($value->is_pending == 1) {
                $temp = $value->mentor_id;
                $temp = DB::table('users')->where('id', $temp)->first();
                $pending[]= $temp;
            } elseif ($value->is_pending == 0) {
                $temp = $value->mentor_id;
                $temp = DB::table('users')->where('id', $temp)->first();
                $active[]= $temp;
            }
        }

    
        // var_dump($user->mentors());
        // var_dump($relationship = Relationship::where('student_id', '=', $id)->get());
    }
    return View::make('test')->with(array('pending' => $pending, 'active' => $active));

    }
}

