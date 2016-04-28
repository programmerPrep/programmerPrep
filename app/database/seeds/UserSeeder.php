<?php
class UserTableSeeder extends Seeder 
{
    }
    public function run()
    {
        $user = new User();
        $user->username = 'Shark';
        $user->first_name = 'Logan';
        $user->last_name = 'Farmer';
        $user->email = 'thevisagiftcard@gmail.com';
        $user->password = $_ENV['USER_PASS'];
        $user->img_url = '/img/Shark_profile_img.png'
        $user->confirmed = 1;
    
        $user->save();
        $user1 = new User();
        $user1->username = 'PlatonicPoohBear';
        $user1->first_name = 'Nick';
        $user1->last_name = 'Vrzalik';
        $user1->email = 'nicholas.vrzalik@hotmail.com';
        $user1->password = $_ENV['USER_PASS'];
        $user1->img_url = '/img/PlatonicPoohBear_profile_img.png'
        $user1->confirmed = 1;
    
        $user1->save();
        $user2 = new User();
        $user2->username = 'burneyburney';
        $user2->first_name = 'Burney';
        $user2->last_name = 'Burney';
        $user2->email = 'burney318@gmail.com';
        $user2->password = $_ENV['USER_PASS'];
        $user2->img_url = '/img/burneyburney_profile_img.png'
        $user2->confirmed = 1;
    
        $user2->save();
        $user3 = new User();
        $user3->username = 'username';
        $user3->first_name = 'Peaceful';
        $user3->last_name = 'Peace';
        $user3->email = 'peace.peaceful@gmail.com';
        $user3->password = $_ENV['USER_PASS'];
        $user3->img_url = '/img/username_profile_img.png'
        $user3->confirmed = 1;
    
        $user3->save();
        $user4 = new User();
        $user4->username = 'Penthious';
        $user4->first_name = 'Tomas';
        $user4->last_name = 'Leffew';
        $user4->email = 'tleffew1994@gmail.com';
        $user4->password = $_ENV['USER_PASS'];
        $user4->img_url = '/img/Penthious_profile_img.png'
        $user4->confirmed = 1;
    
        $user4->save();
    }
}