<?php

use App\Car;
use App\Reservation;
use App\Role;
use App\RoleUser;
use App\Scooter;
use App\User;
use App\Vehicle;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name' => 'admin',
            'display_name' => 'admin',
        ]);

        Role::create([
            'name' => 'client',
            'display_name' => 'client',
        ]);

        factory(User::class, 50)->create();
        factory(RoleUser::class, 50)->create();
        Vehicle::create([
            'type' => 'scooter',
            'status' => 1,
            'location' => 'lorem ipsum',
            'user_id' => 1,
        ]);
        Vehicle::create([
            'type' => 'car',
            'status' => 1,
            'location' => 'lorem ipsum',
            'user_id' => 2,
        ]);
        // factory(Vehicle::class)->create();
        factory(Car::class, 50)->create();
        factory(Scooter::class, 50)->create();
        factory(Reservation::class, 50)->create();
    }
}
