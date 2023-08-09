<?php



namespace Database\Seeders;

use App\Models\Game;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        Game::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /*
        Game::create([
            'title' => 'Mario',
            'desc' => 'A great platformer',
            'publisher' => 'Nintendo'
        ]);
        Game::create([
            'title' => 'Nier',
            'desc' => 'Best RPG',
            'publisher' => 'Square'
        ]);
        */
    }
}
