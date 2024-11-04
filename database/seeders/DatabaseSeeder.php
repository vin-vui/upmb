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
        DB::table('informations')->insert(['title' => 'facebook',   'label' => 'https://www.facebook.com/profile.php?id=100054914929152']);
        DB::table('informations')->insert(['title' => 'accès bus',  'label' => 'Ligne 10 - arrêt centre de tri']);
        DB::table('informations')->insert(['title' => 'accès bus',  'label' => 'Ligne 7 - arrêt Kennedy']);
        DB::table('informations')->insert(['title' => 'plaquette',  'label' => '']);

        DB::table('sections')->insert([
            'title' => 'Unité d’Accueil Père-Mère-Bébé',
            'paragraph' => 'Un lieu d\'échange et de parole <strong>avec ou sans rendez-vous</strong>, pour les futurs parents et les parents, de la grossesse <strong>jusqu’aux 24 mois de l’enfant</strong>.',
            'image' => 'images/illu_1.webp',
            'identifier' => 'HERO',
        ]);
        DB::table('sections')->insert([
            'title' => 'Nos Missions',
            'paragraph' => 'Accompagner, soutenir, et créer des liens : chaque famille est unique, et notre mission est d’<strong>offrir un cadre bienveillant</strong> pour que chacun trouve sa place.',
            'image' => 'images/illu_3.jpg',
            'identifier' => 'MISSIONS',
        ]);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Soutenir l’accès à la fonction de mère ou de père.']);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Prévenir et/ou soigner les troubles psychopathologiques chez les parents.']);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Prévenir et/ou soigner les troubles des interactions précoces mères-enfants ou parents-enfants.']);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Prévenir les risques de maltraitance précoce.']);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Prévenir l\'installation et/ou soigner les troubles psychopathologiques ou les troubles du développement chez le nourrisson et le jeune enfant.']);
        DB::table('sections')->insert([
            'title' => 'Notre Historique',
            'paragraph' => 'L’Accueil Parents-Bébé, dès son ouverture, a bénéficié du financement et du soutien du <strong>Conseil Général</strong>, de la <strong>Mutualité de Franche-Comté</strong>, de la <strong>Ville de Besançon</strong>, de l’<strong>État</strong>, du <strong>Centre Hospitalier de Novillars</strong> avant d’être pérennisée en 2013 par l’<strong>Agence Régional de Santé</strong>.',
            'image' => null,
            'identifier' => 'HISTORY',
        ]);
        DB::table('sections')->insert([
            'title' => 'Notre Offre de Soin',
            'paragraph' => 'Nous offrons un accompagnement bienveillant pour les parents et leur bébé, avec des <strong>consultations prénatales</strong>, un <strong>suivi postnatal</strong>, et des conseils adaptés. Nos équipes sont là pour vous soutenir à chaque étape.',
            'image' => null,
            'identifier' => 'OFFER',
        ]);
        DB::table('sections')->insert([
            'title' => 'Témoignage',
            'paragraph' => 'Plongez au cœur de notre unité et découvrez comment nous <strong>accompagnons les familles au quotidien</strong>. À travers cette vidéo, explorez notre approche bienveillante et notre engagement auprès des parents et de leurs tout-petits.',
            'image' => null,
            'identifier' => 'TESTIMONY',
        ]);
        DB::table('sections')->insert([
            'title' => 'Nos Partenaires',
            'paragraph' => 'Grâce à des partenariats solides, nous travaillons main dans la main avec des acteurs engagés pour offrir un soutien complet aux familles. Ensemble, nous créons un réseau de confiance.',
            'image' => null,
            'identifier' => 'PARTNERS',
        ]);
        DB::table('sections')->insert([
            'title' => 'Besoin d\'un petit coup de fil ?',
            'paragraph' => 'Envie de parler ou de venir nous voir ? Notre équipe est là pour vous écouter et répondre à toutes vos questions. Un simple appel peut faire toute la différence !',
            'image' => 'images/illu_2.webp',
            'identifier' => 'CTA',
        ]);
    }
}
