<?php

use App\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->createAdmin();
    }

    private function createAdmin(): Admin
    {
        $admin = new Admin();
        $admin->name = 'Admin';
        $admin->email = 'sukycms@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->save();

        return $admin;
    }
}
