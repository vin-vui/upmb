<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        DB::table('informations')->insert(['title' => 'adresse',    'label' => 'Parc ALPIA, 8A rue Jacquard, 25000 Besançon']);
        DB::table('informations')->insert(['title' => 'email',      'label' => 'secretariat.resado@ch-novillars.fr']);
        DB::table('informations')->insert(['title' => 'téléphone',  'label' => '03 81 88 33 62']);
        DB::table('informations')->insert(['title' => 'accès bus',  'label' => 'Ligne 10 - arrêt centre de tri']);
        DB::table('informations')->insert(['title' => 'accès bus',  'label' => 'Ligne 7 - arrêt Kennedy']);
        DB::table('informations')->insert(['title' => 'facebook',   'label' => 'https://www.facebook.com/profile.php?id=100054914929152']);
    }
}
