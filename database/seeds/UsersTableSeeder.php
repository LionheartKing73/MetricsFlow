<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'admin')->first();
        $role_client = Role::where('name', 'client')->first();
        $role_sadmin = Role::where('name', 'Super Admin')->first();
        //Add the master administrator, user id of 1
        $user = new App\User;
        
        $user->name = 'Admin Istrator';
        $user->email = 'admin@admin.com';
        $user->status = '1';
        $user->role_id = '0';
        $user->client_id = '002';
        $user->password = bcrypt('admin');
        $user->roles()->attach($role_user);

        $user->save();

        $client = new User();
        $client->name = 'Verafin Admin';
        $client->role_id = '3';
        $client->email = 'verafin@example.com';
        $client->client_id = '004';
        $client->password = bcrypt('test');
        $client->save();
        $user->roles()->attach($role_client);

        $client = new User();
        $client->name = 'M5 Admin';
        $client->role_id = '3';
        $client->email = 'm5@admin.com';
        $client->client_id = '005';
        $client->password = bcrypt('admin');
        $client->save();
        $user->roles()->attach($role_client);
    }
}
