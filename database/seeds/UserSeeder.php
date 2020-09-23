<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $default_password = Hash::make('parola10');

        $admins = [
            'name' => 'Delia', 'email' => 'xd.delia@yahoo.com', 'role' => 'admin',
            'name' => 'Daneil', 'email' => 'daniel@yahoo.com', 'role' => 'admin',
        ];

        foreach($admins as $admin)
        {
            $check = User::where('email', $admin['email'])->first();

            if($check === null)
            {
                $new_admin = User::create([
                    'name' => $admin['name'],
                    'email' => $admin['email'],
                    'password' => $default_password,
                ]);

                $new_admin->assignRole($admin['role']);
            }
            else
            {
                $check->assignRole($admin['role']);
            }
        }
    }
}
