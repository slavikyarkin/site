<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_administrator = Role::where('name', 'administrator')->first();
        $role_member = Role::where('name', 'member')->first();
        $administrator = new User();
        $administrator->name = 'Administrator Name';
        $administrator->email = 'administrator@example.com';
        $administrator->password = bcrypt('test1234');
        $administrator->save();
        $administrator->roles()->attach($role_administrator);
        $administrator->roles()->attach($role_member);
        $member = new User();
        $member->name = 'Member Name';
        $member->email = 'member@example.com';
        $member->password = bcrypt('test1234');
        $member->save();
        $member->roles()->attach($role_member);
    }
}