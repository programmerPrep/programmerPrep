<?php
class RelationshipSeeder extends Seeder 
{

    public function run()
    {
    	$relationship1 = new Relationship();
    	$relationship1->mentor_id = 1;
    	$relationship1->student_id = 2;
    	$relationship1->is_pending = 0;
    	$relationship1->save();

		$relationship2 = new Relationship();
    	$relationship2->mentor_id = 1;
    	$relationship2->student_id = 4;
    	$relationship2->is_pending = 1;
    	$relationship2->save();

    	$relationship3 = new Relationship();
    	$relationship3->mentor_id = 1;
    	$relationship3->student_id = 5;
    	$relationship3->is_pending = 1;
    	$relationship3->save();    	

    	$relationship4 = new Relationship();
    	$relationship4->mentor_id = 1;
    	$relationship4->student_id = 3;
    	$relationship4->is_pending = 0;
    	$relationship4->save();
    }
}