<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder {
 public function run(): void { User::create(['username'=>'paulterence','full_name'=>'Paul Terence Guadalupe','email'=>'paul@example.com']); }
}
