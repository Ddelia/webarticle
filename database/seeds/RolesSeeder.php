<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try
        {
            Role::findByName('admin');
        }
        catch (\Exception $e)
        {
            if($e->getMessage() == 'There is no role named `admin`.')
            {
                Role::create(['name' => 'admin']);
            }
        }

        try
        {
            Role::findByName('guest');
        }
        catch (\Exception $e)
        {
            if($e->getMessage() == 'There is no role named `guest`.')
            {
                Role::create(['name' => 'guest']);
            }
        }
    }
}
