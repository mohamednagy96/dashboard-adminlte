<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::firstOrcreate([
            'name' => 'super admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('12345678')

            ]);
    }
}
