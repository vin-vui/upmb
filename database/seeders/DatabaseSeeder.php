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
        // USER
        User::factory()->create(['name' => 'Admin', 'email' => 'admin@admin.com']);

        // NOTICE
        DB::table('notices')->insert(['title' => 'Notification test', 'description' => 'Ceci est une notification de test pour se rendre compte de l’affichage 🤩', 'display' => false]);

        // INFORMATIONS
        DB::table('informations')->insert(['identifier' => 'ADDRESS',   'title' => 'adresse',    'label' => 'Parc ALPIA, 8A rue Jacquard, 25000 Besançon']);
        DB::table('informations')->insert(['identifier' => 'EMAIL',     'title' => 'email',      'label' => 'email@email.fr']);
        DB::table('informations')->insert(['identifier' => 'PHONE',     'title' => 'téléphone',  'label' => '03 81 88 33 62']);
        DB::table('informations')->insert(['identifier' => 'FB',        'title' => 'facebook',   'label' => 'https://www.facebook.com/profile.php?id=100054914929152']);
        DB::table('informations')->insert(['identifier' => 'BUS_1',     'title' => 'accès bus',  'label' => 'Ligne 10 - arrêt centre de tri']);
        DB::table('informations')->insert(['identifier' => 'BUS_2',     'title' => 'accès bus',  'label' => 'Ligne 7 - arrêt Kennedy']);
        DB::table('informations')->insert(['identifier' => 'DOC',       'title' => 'plaquette',  'label' => '']);

        // SECTIONS
        DB::table('sections')->insert([
            'title' => 'Un lieu d’<strong>accueil</strong>, d’<strong>échange</strong> et de <strong>soin</strong> autour de la parentalité.',
            'paragraph' => 'L’Unité d’accueil père mère bébé est une structure dédiée aux parents et futurs parents et leur enfant, afin d’accompagner cette étape de vie fondamentale.',
            'image' => null,
            'identifier' => 'HERO',
        ]);

        DB::table('sections')->insert([
            'title' => 'Nos Missions',
            'paragraph' => 'Accompagner, soutenir, et créer des liens : chaque famille est unique, et notre mission est d’<strong>offrir un cadre bienveillant</strong> pour que chacun trouve sa place.',
            'image' => '/images/illu_3.jpg',
            'identifier' => 'MISSIONS',
            'fixed_item_number' => false,
        ]);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Soutenir l’accès à la fonction de mère ou de père.']);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Prévenir et/ou soigner les troubles psychopathologiques chez les parents.']);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Prévenir et/ou soigner les troubles des interactions précoces mères-enfants ou parents-enfants.']);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Prévenir les risques de maltraitance précoce.']);
        DB::table('items')->insert(['section_identifier' => 'MISSIONS', 'content' => 'Prévenir l’installation et/ou soigner les troubles psychopathologiques ou les troubles du développement chez le nourrisson et le jeune enfant.']);

        DB::table('sections')->insert([
            'title' => 'Pour qui ?',
            'paragraph' => 'L’unité d’accueil Père-Mère-Bébé est ouverte à tous les parents et futurs parents, de la grossesse jusqu’aux 24 mois de l’enfant. Que vous soyez enceinte, jeune parent, ou parent d’un enfant en bas âge, vous êtes les bienvenus !',
            'image' => '/images/illu_who.webp',
            'identifier' => 'WHO',
            'fixed_item_number' => false,
        ]);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Je me sens seul(e)']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Je suis dépassé(e) par la situation']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Je n’arrive plus à dormir']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Je ne comprends pas ce que veut mon enfant']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Mon bébé pleure tout le temps']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Mon bébé ne dort pas']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Mon bébé perd du poids']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Mon bébé a des problèmes de peau']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Mon bébé ne grandit pas normalement']);
        DB::table('items')->insert(['section_identifier' => 'WHO', 'content' => 'Mon bébé n’est pas tonique']);

        DB::table('sections')->insert([
            'title' => 'Notre Historique',
            'paragraph' => 'L’Accueil Parents-Bébé, dès son ouverture, a bénéficié du financement et du soutien du <strong>Conseil Général</strong>, de la <strong>Mutualité de Franche-Comté</strong>, de la <strong>Ville de Besançon</strong>, de l’<strong>État</strong>, du <strong>Centre Hospitalier de Novillars</strong> avant d’être pérennisée en 2013 par l’<strong>Agence Régional de Santé</strong>.',
            'image' => null,
            'identifier' => 'HISTORY',
        ]);
        DB::table('items')->insert(['section_identifier' => 'HISTORY', 'content' => 'L’Unité Père-Mère-Bébé']);
        DB::table('items')->insert(['section_identifier' => 'HISTORY', 'content' => 'fait l’objet d’une convention entre deux établissements : le Centre Hospitalier de Novillars, le Centre Hospitalier Universitaire. Il fait partie du Pôle de Psychiatrie de l’Enfant et l’Adolescent du Centre Hospitalier de Novillars.']);
        DB::table('items')->insert(['section_identifier' => 'HISTORY', 'content' => 'Cette structure est née']);
        DB::table('items')->insert(['section_identifier' => 'HISTORY', 'content' => 'en 2007 à l’initiative de professionnelle du soin de la petite enfance ayant souhaité proposer un lieu d’accueil et d’accompagnement pouvant permettre en cas de besoin un lien entre la sortie de la maternité et l’accès aux soins de l’enfance.']);
        DB::table('items')->insert(['section_identifier' => 'HISTORY', 'content' => 'Il semblait par ailleurs']);
        DB::table('items')->insert(['section_identifier' => 'HISTORY', 'content' => 'primordial de soutenir cette étape de vie qui est celle de devenir parents ainsi que toute la période de périnatalité, moment de grande vulnérabilité tant pour les parents du fait des remaniements physiologiques, psychiques que pour l’enfant en plein développement.']);
        DB::table('items')->insert(['section_identifier' => 'HISTORY', 'content' => 'Il est <strong>ouvert</strong> aux familles de la ville de Besançon mais aussi du Doubs et de la Région']);

        DB::table('sections')->insert([
            'title' => 'Notre Offre de Soin',
            'paragraph' => 'Nous offrons un accompagnement bienveillant pour les parents et leur bébé, avec des <strong>consultations prénatales</strong>, un <strong>suivi postnatal</strong>, et des conseils adaptés. Nos équipes sont là pour vous soutenir à chaque étape.',
            'image' => null,
            'identifier' => 'OFFER',
        ]);

        DB::table('sections')->insert([
            'title' => 'Film de présentation',
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
            'title' => 'Besoin d’un petit coup de fil ?',
            'paragraph' => 'Envie de parler ou de venir nous voir ? Notre équipe est là pour vous écouter et répondre à toutes vos questions. Un simple échange peut faire toute la différence !',
            'image' => '/images/illu_2.jpg',
            'identifier' => 'CTA',
        ]);

        /*
        * ONGLET OFFRE DE SOIN
        */
        DB::table('sections')->insert([
            'title' => 'Notre offre de soin',
            'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.',
            'image' => '/images/illu_offers.webp',
            'identifier' => 'OFFERS',
        ]);
        DB::table('sections')->insert([
            'title' => 'Accueil Parents-Bébé',
            'paragraph' => 'L’Accueil Parents-Bébé répond aux besoins de continuité et d’accompagnements médicaux et psychologiques pendant la grossesse et/ou dès la sortie de maternité. Elle accueille les futurs parents, les mères, les pères et leur bébé jusqu’aux 2 ans de leur enfant :',
            'image' => '/images/illu_offer_pb.webp',
            'identifier' => 'OFFER_PB',
        ]);
        DB::table('items')->insert(['section_identifier' => 'OFFER_PB', 'content' => 'Soit']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_PB', 'content' => 'parce qu’elles se sentent seules, isolées, démunies, vulnérables devant un bébé qu’elles ont du mal à comprendre.']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_PB', 'content' => 'Soit']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_PB', 'content' => 'parce que le bébé, lui-même présente des difficultés, ce qui rend la relation difficile.']);

        DB::table('sections')->insert([
            'title' => 'Les groupes de parole',
            'paragraph' => 'Modifications du corps, questions sur l’accouchement, la douleur, la césarienne, la péridurale, modes d’alimentation, développement du bébé. Difficultés psychiques, décalage entre idéal et vécu de la grossesse, anxiété, dépression. Événements inattendus (deuil, séparation, maladie). Contexte singulier (solitude, problèmes médicaux, PMA, problèmes de couple…).',
            'image' => '/images/illu_offer_gp_2.webp',
            'identifier' => 'OFFER_GP',
        ]);
        DB::table('items')->insert(['section_identifier' => 'OFFER_GP', 'content' => 'Pour les femmes enceintes']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_GP', 'content' => 'Pour parler de la grossesse et de ses préoccupations']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_GP', 'content' => 'Accueil avec ou sans rendez-vous']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_GP', 'content' => 'Lundi de 15h30 à 16h 30 Jeudi de 13 à 14h En petit groupe, accessible directement ou sur les conseils d’un professionnel (sage- femme, gynécologue, généraliste, PMI, pédiatre, psychologie, psychiatre, crèche…)']);

        DB::table('sections')->insert([
            'title' => 'Les groupes de parole',
            'paragraph' => 'Une psychologue et une infirmière de l’équipe accueillent les pères ou futurs pères du début de la grossesse de leur conjointe, jusqu’aux deux ans de l’enfant, pour évoquer les préoccupations qui accompagnent leur rôle et préoccupations de père : • difficultés psychiques (décalage entre le vécu imaginaire et la réalité de l’arrivée de l’enfant) • événements inattendus (deuil, séparation,, maladie…) • contexte singulier de la grossesse (solitude, problèmes médicaux, problèmes de couple, PMA…). C’est un temps collectif où les hommes peuvent partager leurs expériences et leurs inquiétudes à un moment commun de leur vie. Toutes les pères, peuvent participer à cet accueil, à leur initiative ou sur les conseils d’un professionnel (sage-femme, gynécologue, généraliste, PMI, pédiatres, psychologues, psychiatres, crèches…',
            'image' => '/images/illu_offer_gp_3.webp',
            'identifier' => 'OFFER_GPP',
        ]);
        DB::table('items')->insert(['section_identifier' => 'OFFER_GPP', 'content' => 'Pour les pères et futurs pères']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_GPP', 'content' => 'Pour évoquer les préoccupations qui accompagnent leur rôle de père']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_GPP', 'content' => 'Accueil avec ou sans rendez-vous']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_GPP', 'content' => 'Un lundi par mois de 18 à 19H. Dates nous contacter']);

        DB::table('sections')->insert([
            'title' => 'L’hôpital de jour Mère-Bébé',
            'paragraph' => 'Ce temps d’accueil permet de travailler les interactions, le lien et la séparation mère-bébé à travers différents temps : un étayage des soins quotidiens ( bains, change, repas, portage…), des médiations thérapeutiques centrées sur l’instauration des premiers jeux, des médiations suscitant la créativité des mères, des ateliers d’éveils corporels ou sensoriels avec le bébé, des séances de travail corporel avec les mères, des temps individuels avec la mère et /ou le bébé.',
            'image' => '/images/illu_offer_hjmb.webp',
            'identifier' => 'OFFER_HJMB',
        ]);
        DB::table('items')->insert(['section_identifier' => 'OFFER_HJMB', 'content' => 'Accueil sur indication médicale']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_HJMB', 'content' => 'Pour la mère et son enfant jusqu’au trois ans de ce dernier. Hôpital de jour ouvert sur cinq demi-journées par semaine sur quatre heures comprenant un repas thérapeutique.']);

        DB::table('sections')->insert([
            'title' => 'Les consultations périnatales',
            'paragraph' => 'Les consultations périnatales auprès d’un pédopsychiatre ou psychologue offrent un espace d’écoute et d’accompagnement pour les parents ou futurs parents qui traversent des moments difficiles autour de la périnatalité. Ces consultations permettent de parler de diverses problématiques, telles que : Les fausses couches, L’infertilité, La grossesse à risque, La dépression post-partum, Les difficultés dans le lien parent-enfant. Ces consultations permettent d\’offrir un soutien adapté et bienveillant, favorisant un mieux-être pour la famille et aidant à construire un environnement émotionnel sain pour l’enfant dès le début de sa vie.',
            'image' => '/images/illu_offer_cp.webp',
            'identifier' => 'OFFER_CP',
        ]);
        DB::table('items')->insert(['section_identifier' => 'OFFER_CP', 'content' => 'Accueil sur indication médicale']);
        DB::table('items')->insert(['section_identifier' => 'OFFER_CP', 'content' => 'Pour la mère et son enfant jusqu’au trois ans de ce dernier. Hôpital de jour ouvert sur cinq demi-journées par semaine sur quatre heures comprenant un repas thérapeutique.']);

        DB::table('sections')->insert([
            'title' => 'Notre équipe',
            'paragraph' => 'Notre équipe est composée de professionnels de la santé et du social, spécialisés dans l’accompagnement des parents et des enfants. Nous sommes là pour vous écouter, vous conseiller, et vous accompagner à chaque étape de votre vie de parent.',
            'image' => null,
            'identifier' => 'MEMBERS',
        ]);

        // QUESTIONS
        DB::table('questions')->insert(['question' => 'Quels sont les horaires d’ouverture de l’unité ?', 'answer' => 'Nous sommes ouverts du lundi au vendredi, de 9h à 17h.']);
        DB::table('questions')->insert(['question' => 'Comment prendre rendez-vous ?', 'answer' => 'Vous pouvez nous contacter par téléphone au 03 81 88 33 62, ou par email à l’adresse adresse@test.com.']);
        DB::table('questions')->insert(['question' => 'Quels sont les services proposés par l’unité ?', 'answer' => 'Nous proposons des consultations prénatales, un suivi postnatal, et des conseils adaptés pour les parents et leur bébé.', 'link' => 'https://upmb.test/offre-de-soins']);
        DB::table('questions')->insert(['question' => 'Quels sont les partenaires de l’unité ?', 'answer' => 'Nous travaillons avec des acteurs engagés pour offrir un soutien complet aux familles.']);
        DB::table('questions')->insert(['question' => 'Comment puis-je soutenir l’unité ?', 'answer' => 'Vous pouvez nous contacter pour en savoir plus sur les possibilités de soutien et de partenariat.', 'link' => 'mailto:pouet@test.fr']);
        DB::table('questions')->insert(['question' => 'Est ce que je peux venir avec mes autres enfants ?', 'answer' => 'Oui, vous pouvez venir avec vos autres enfants.']);
        DB::table('questions')->insert(['question' => 'Est ce que je peux venir avec mon ou ma conjointe ?', 'answer' => 'Oui, vous pouvez venir avec votre conjoint(e).']);
        DB::table('questions')->insert(['question' => 'Dois-je venir avec mon bébé ?', 'answer' => 'Oui, c’est préférable de venir avec votre bébé.']);
        DB::table('questions')->insert(['question' => 'Quelle pièce fournir lors du premier RDV ?', 'answer' => 'Lors de votre premier rendez-vous, merci de vous munir de votre carte vitale et de votre carte de mutuelle.']);
        DB::table('questions')->insert(['question' => 'Que devrais-je payer ?', 'answer' => 'Les consultations sont prises en charge par la sécurité sociale.', 'link' => 'https://www.ameli.fr/']);

        // PARTNERS
        DB::table('partners')->insert(['label' => 'Centre Hospitalier de Novillars', 'url' => '/images/structures_photo_logo_567-1554213346.gif']);
        DB::table('partners')->insert(['label' => 'CHRU', 'url' => '/images/Logo_CHU_Besancon-1814599075.jpg']);
        DB::table('partners')->insert(['label' => 'ARS', 'url' => '/images/ARS-Logo-920185936.png']);
        DB::table('partners')->insert(['label' => 'Polyclinique de Franche-Comté', 'url' => '/images/Arc_77xchqzNxg.png']);

        // LINKS
        DB::table('links')->insert(['label' => 'ARS', 'url' => 'https://www.ars.sante.fr/']);
        DB::table('links')->insert(['label' => 'CHRU', 'url' => 'https://www.chu-besancon.fr/']);
        DB::table('links')->insert(['label' => 'CH Novillars', 'url' => 'https://www.ch-novillars.fr/']);

        // MEMBERS
        DB::table('members')->insert(['name' => 'Delphine', 'lastname' => 'Geoffrey', 'function' => 'Psychologue', 'image' => '/images/placeholder_f.webp', 'description' => 'Delphine est psychologue à l’unité d’accueil Père-Mère-Bébé. Elle accompagne les parents et les enfants dans leur relation.']);
        DB::table('members')->insert(['name' => 'Anne', 'lastname' => 'Arthur', 'function' => 'Infirmière', 'image' => '/images/placeholder_f.webp', 'description' => null]);
        DB::table('members')->insert(['name' => 'Adeline', 'lastname' => 'Lili', 'function' => 'Sage-femme', 'image' => '/images/placeholder_f.webp', 'description' => 'Adeline est sage-femme à l’unité d’accueil Père-Mère-Bébé. Elle assure le suivi des femmes enceintes et des jeunes mamans.']);
        DB::table('members')->insert(['name' => 'Grégory', 'lastname' => 'Emmanuel', 'function' => 'Pédiatre', 'image' => '/images/placeholder_h.webp', 'description' => 'Grégory est pédiatre à l’unité d’accueil Père-Mère-Bébé. Il est spécialisé dans le suivi des nourrissons']);
        DB::table('members')->insert(['name' => 'Marie', 'lastname' => 'Jean', 'function' => 'Puéricultrice', 'image' => '/images/placeholder_f.webp', 'description' => 'Marie est puéricultrice à l’unité d’accueil Père-Mère-Bébé. Elle assure le suivi des enfants et des parents.']);
        DB::table('members')->insert(['name' => 'Sophie', 'lastname' => 'Pierre', 'function' => 'Psychomotricienne', 'image' => '/images/placeholder_f.webp', 'description' => 'Sophie est psychomotricienne à l’unité d’accueil Père-Mère-Bébé. Elle accompagne les enfants dans leur développement moteur.']);
        DB::table('members')->insert(['name' => 'Julie', 'lastname' => 'Paul', 'function' => 'Orthophoniste', 'image' => '/images/placeholder_f.webp', 'description' => 'Julie est orthophoniste à l’unité d’accueil Père-Mère-Bébé. Elle accompagne les enfants dans leur développement du langage.']);
    }
}
