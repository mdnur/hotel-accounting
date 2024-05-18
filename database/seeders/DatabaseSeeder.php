<?php

namespace Database\Seeders;

use App\Models\Room;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\RoomType;
use App\Models\ExpenseType;
use App\Models\PaymentType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Mohammad Nur',
        //     'email' => 'mdnur701@gmail.com',
        //     'password'=> Hash::make('password'),
        // ]);



        User::create([
            'name' => 'Shaidul Islam Ripon',
            'email' => 'shaidul@app.com',
            'password'=> Hash::make('password'),
        ]);

        User::create([
            'name' => 'Nayemon Islam',
            'email' => 'nayemon@app.com',
            'password'=> Hash::make('password'),
        ]);



        User::create([
            'name' => 'Toaha',
            'email' => 'toaha@app.com',
            'password'=> Hash::make('password'),
        ]);


        User::create([
            'name' => 'Osman',
            'email' => 'osman@app.com',
            'password'=> Hash::make('password'),
        ]);

        User::create([
            'name' => 'Ashab',
            'email' => 'ashab@app.com',
            'password'=> Hash::make('password'),
        ]);


        RoomType::create(['name' => 'Super Deluxe couple', 'room_rent' => 2250]);
        RoomType::create(['name' => 'Deluxe couple', 'room_rent' => 2000]);
        RoomType::create(['name' => 'Eco Deluxe couple', 'room_rent' => 1500]);
        RoomType::create(['name' => 'Deluxe Double', 'room_rent' => 3000]);
        RoomType::create(['name' => 'Family Suits', 'room_rent' => 3500]);

        Room::create(['room_no' => '101', 'room_type_id' => 2]);
        Room::create(['room_no' => '102', 'room_type_id' => 2]);
        Room::create(['room_no' => '103', 'room_type_id' => 4]);
        Room::create(['room_no' => '104', 'room_type_id' => 4]);
        Room::create(['room_no' => '105', 'room_type_id' => 2]);
        Room::create(['room_no' => '106', 'room_type_id' => 2]);
        Room::create(['room_no' => '107', 'room_type_id' => 4]);
        Room::create(['room_no' => '108', 'room_type_id' => 2]);
        Room::create(['room_no' => '109', 'room_type_id' => 5]);
        Room::create(['room_no' => '110', 'room_type_id' => 5]);
        Room::create(['room_no' => '111', 'room_type_id' => 2]);


        Room::create(['room_no' => '201', 'room_type_id' => 2]);
        Room::create(['room_no' => '202', 'room_type_id' => 3]);
        Room::create(['room_no' => '203', 'room_type_id' => 4]);
        Room::create(['room_no' => '204', 'room_type_id' => 4]);
        Room::create(['room_no' => '205', 'room_type_id' => 3]);
        Room::create(['room_no' => '206', 'room_type_id' => 2]);
        Room::create(['room_no' => '207', 'room_type_id' => 4]);
        Room::create(['room_no' => '208', 'room_type_id' => 2]);
        Room::create(['room_no' => '209', 'room_type_id' => 3]);
        Room::create(['room_no' => '210', 'room_type_id' => 4]);
        Room::create(['room_no' => '211', 'room_type_id' => 4]);
        Room::create(['room_no' => '212', 'room_type_id' => 5]);
        Room::create(['room_no' => '213', 'room_type_id' => 2]);


        Room::create(['room_no' => '301', 'room_type_id' => 1]);
        Room::create(['room_no' => '302', 'room_type_id' => 1]);
        Room::create(['room_no' => '303', 'room_type_id' => 1]);
        Room::create(['room_no' => '304', 'room_type_id' => 1]);
        Room::create(['room_no' => '305', 'room_type_id' => 1]);
        Room::create(['room_no' => '306', 'room_type_id' => 1]);
        Room::create(['room_no' => '307', 'room_type_id' => 1]);
        Room::create(['room_no' => '308', 'room_type_id' => 1]);
        Room::create(['room_no' => '309', 'room_type_id' => 1]);
        Room::create(['room_no' => '310', 'room_type_id' => 1]);
        Room::create(['room_no' => '311', 'room_type_id' => 1]);
        Room::create(['room_no' => '312', 'room_type_id' => 1]);
        Room::create(['room_no' => '313', 'room_type_id' => 1]);



        ExpenseType::create(['name' => 'Salary Purpose']);
        ExpenseType::create(['name' => 'Staff Bonus']);
        ExpenseType::create(['name' => 'Advance Salary']);
        ExpenseType::create(['name' => 'Electric bill']);
        ExpenseType::create(['name' => 'Staff Related Bill']);
        ExpenseType::create(['name' => 'Snack Bill']);
        ExpenseType::create(['name' => 'Fruits Bill']);
        ExpenseType::create(['name' => 'Drinking Water']);
        ExpenseType::create(['name' => 'Online Marketing']);
        ExpenseType::create(['name' => 'Maintenance']);
        ExpenseType::create(['name' => 'Generator Diesel']);
        ExpenseType::create(['name' => 'Govt Bill']);
        ExpenseType::create(['name' => 'Donation']);
        ExpenseType::create(['name' => 'Staff Food Bill']);
        ExpenseType::create(['name' => 'Mobile Recharge']);
        ExpenseType::create(['name' => 'Lift Service Purpose']);
        ExpenseType::create(['name' => 'Any kind of tech bill']);
        ExpenseType::create(['name' => 'PDB Line Purpose']);
        ExpenseType::create(['name' => 'laborer Purpose']);
        ExpenseType::create(['name' => 'Amenity Purpose']);
        ExpenseType::create(['name' => 'Conveyance']);
        ExpenseType::create(['name' => 'Any Kind of Element Buy']);
        ExpenseType::create(['name' => 'Co-mission']);
        ExpenseType::create(['name' => 'Laundry Bill']);
        ExpenseType::create(['name' => 'Others']);
        ExpenseType::create(['name' => 'Hotel Owner Asso']);



        PaymentType::create(['name' => 'Cash']);
        PaymentType::create(['name' => 'Bkash']);
        PaymentType::create(['name' => 'Nagad']);
        PaymentType::create(['name' => 'Rocket']);
        PaymentType::create(['name' => 'CITY Bank']);
        PaymentType::create(['name' => 'DBBL']);
        PaymentType::create(['name' => 'BRAC Bank']);
        PaymentType::create(['name' => 'EBL Bank']);
        PaymentType::create(['name' => 'UCB Bank']);

    }
}
