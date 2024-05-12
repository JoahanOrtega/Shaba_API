<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'Karen',
                'last_name' => 'Flores',
                'address' => 'Síndicos 262 Municipio Libre, 20199 Aguascalientes, Ags.',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Karen123#'),
                'phone' => '4493968487',
                'remember_token' => null,
            ],
            [
                'first_name' => 'Abel',
                'last_name' => 'Price',
                'address' => '84276 Connelly Canyon\nPort Mac, MO 01228',
                'email' => 'user1@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'phone' => '7694409676',
                'remember_token' => null,
            ],
            [
                'first_name' => 'Carlo',
                'last_name' => 'Leffler',
                'address' => '4466 Gorczany River\nSouth Annieport, AL 75127',
                'email' => 'user2@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'phone' => '4094772262',
                'remember_token' => null,
            ],
            [
                'first_name' => 'Danial',
                'last_name' => 'Sporer',
                'address' => '54990 Lesch Meadows Apt. 956\nParkerbury, MA 97160-1539',
                'email' => 'user3@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'phone' => '5314914090',
                'remember_token' => null,
            ],
            [
                'first_name' => 'Sarai',
                'last_name' => 'Gutmann',
                'address' => '61391 Sabrina Mountains\nEast Emmaleeshire, RI 47612-0016',
                'email' => 'user4@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'phone' => '2349526697',
                'remember_token' => null,
            ],
            [
                'first_name' => 'Fredy',
                'last_name' => 'Renner',
                'address' => '34495 Nicolas Shore\nSwiftview, ME 11023',
                'email' => 'user5@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'phone' => '9388044003',
                'remember_token' => null,
            ],
        ];
        

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
