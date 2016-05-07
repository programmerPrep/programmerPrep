<?php
class UserSeeder extends Seeder 
{

    public function run()
    {

        $user = new User();
        $user->username = 'Shark';
        $user->first_name = 'Logan';
        $user->last_name = 'Farmer';
        $user->email = 'thevisagiftcard@gmail.com';
        $user->interests = 'PHP, JavaScript, C#, Boo, LAMP+J, MySQL, Python, Ruby on Rails';
        $user->password = 'logan';
        $user->img_url = '/img/logan.jpg';
        $user->is_mentor = 1;
        $user->bio = 'A million dollars isnt cool. You know what is? A billion dollars.';
        $user->github_name = 'yungshark';
        $user->confirmed = 1;
        $user->save();
    
        $user1 = new User();
        $user1->username = 'PlatonicPoohBear';
        $user1->first_name = 'Nick';
        $user1->last_name = 'Vrzalik';
        $user1->email = 'nicholas.vrzalik@hotmail.com';
        $user1->interests = 'PHP, JavaScript, C#, Boo, LAMP+J, MySQL, Python, Ruby on Rails';
        $user1->password = 'nick';
        $user1->img_url = '/img/nick.jpg';
        $user1->github_name = 'PlatonicPoohBear';
        $user1->confirmed = 1;
        $user1->save();
    
        $user2 = new User();
        $user2->username = 'burneyburney';
        $user2->first_name = 'Burney';
        $user2->last_name = 'Burney';
        $user2->email = 'burney318@gmail.com';
        $user2->interests = 'PHP, JavaScript, C#, Boo';
        $user2->password = 'burney';
        $user2->img_url = '/img/burney.jpg';
        $user2->github_name = 'burneyburney';
        $user2->confirmed = 1;
        $user2->save();
    
        $user3 = new User();
        $user3->username = 'Gregory-Bickham';
        $user3->first_name = 'Gregory';
        $user3->last_name = 'Bickham';
        $user3->email = 'gregory.bickham@gmail.com';
        $user3->interests = 'PHP, JavaScript, C#, Boo';
        $user3->password = 'greg';
        $user3->img_url = '/img/greg.jpg';
        $user3->github_name = 'Gregory-Bickham';
        $user3->confirmed = 1;
        $user3->save();
    
        $user4 = new User();
        $user4->username = 'Penthious';
        $user4->first_name = 'Tomas';
        $user4->last_name = 'Leffew';
        $user4->email = 'tleffew1994@gmail.com';
        $user4->password = 'tomas';
        $user4->img_url = '/img/thomas.jpeg';
        $user4->github_name = 'Penthious';
        $user4->confirmed = 1;
        $user4->save();

        $user = new User();
        $user->username = 'Bobby';
        $user->first_name = 'Bob';
        $user->last_name = 'Bobberson';
        $user->email = 'bob@gmail.com';
        $user->interests = 'C#, Boo, Cobol, .NET, Assembly';
        $user->password = 'bobberson';
        $user->img_url = '/img/Bob_profile_img.png';
        $user->is_mentor = 1;
        $user->github_name = 'Bobby';
        $user->confirmed = 1;
        $user->save();
    
    }
}