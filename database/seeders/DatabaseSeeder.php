<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    protected static $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            RoleSeeder::class,
        );

        User::factory(5)->create()->each(function ($user) {
            $user->assignRole('member');
        });

        User::factory()->create([
            'name' => 'Admin ' . fake()->name(),
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('admin');

        User::factory()->create([
            'name' => 'Manager ' . fake()->name(),
            'email' => 'manager@email.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('manager');

        User::factory()->create([
            'name' => 'Member ' . fake()->name(),
            'email' => 'member@email.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('member');

        Project::factory(5)->create();
        Task::factory(10)->create();
    }
}
