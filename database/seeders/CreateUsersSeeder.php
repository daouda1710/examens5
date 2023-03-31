<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vehicule;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@taxi.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Chauffeur',
               'email'=>'chauffeur@taxi.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Client',
               'email'=>'client@taxi.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];

        $cars=[
            [
                'marque'=>'Range-Rover',
                'couleur'=>'Noire',
                'places'=>4
            ],
            [
                'marque'=>'Nissan',
                'couleur'=>'Noire',
                'places'=>6
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
        foreach ($cars as $key => $car) {
            Vehicule::create($car);
        }
    }
}