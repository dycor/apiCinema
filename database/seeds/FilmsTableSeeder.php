<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film')->insert([
            [
                'id' => 1,
                'title' => 'Avengers',
                'releaseDate' => '2018-05-24',
                'duration' =>   '2:22:00',
                'synopsis' => 'Les Avengers et leurs alliés devront être prêts à tout sacrifier pour neutraliser le redoutable Thanos avant que son attaque éclair ne conduise à la destruction complète de l’univers.',
                'director' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'title' => 'DEADPOOL 2',
                'releaseDate' => '2018-05-24',
                'duration' =>   '1:59:00',
                'synopsis' => 'L’insolent mercenaire de Marvel remet le masque !Plus grand, plus-mieux, et occasionnellement les fesses à l’air, il devra affronter un Super-Soldat dressé pour tuer, repenser l’amitié, la famille, et ce que signifie l’héroïsme – tout en bottant cinquante nuances de culs, car comme chacun sait, pour faire le Bien, il faut parfois se salir les doigts.',
                'director' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'title' => 'Justice League',
                'releaseDate' => '2017-11-15',
                'duration' =>   '2:00:00',
                'synopsis' => 'Après avoir retrouvé foi en l\'humanité, Bruce Wayne, inspiré par l\'altruisme de Superman, sollicite l\'aide de sa nouvelle alliée, Diana Prince, pour affronter un ennemi plus redoutable que jamais. Ensemble, Batman et Wonder Woman ne tardent pas à recruter une équipe de méta-humains pour faire face à cette menace inédite. Pourtant, malgré la force que représente cette ligue de héros sans précédent – Batman, Wonder Woman, Aquaman, Cyborg et Flash –, il est peut-être déjà trop tard pour sauver la planète d\'une attaque apocalyptique…',
                'director' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'title' => 'Much Ado About Nothing',
                'releaseDate' => '2014-01-29',
                'duration' =>   '1:49:00',
                'synopsis' => 'De retour de la guerre, Don Pédro et ses fidèles compagnons d\'armes, Bénédict et Claudio, rendent visite au seigneur Léonato, gouverneur de Messine. Dans sa demeure, les hommes vont se livrer à une autre guerre. Celle de l\'amour, et notamment celle qui fait rage entre Béatrice et Bénédict, que leur entourage tente de réconcilier tout en essayant de déjouer les agissements malfaisants de Don Juan.',
                'director' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'title' => 'John Wick',
                'releaseDate' => '2014-10-29',
                'duration' =>   '1:41:00',
                'synopsis' => 'Depuis la mort de sa femme bien-aimée, John Wick passe ses journées à retaper sa Ford Mustang de 1969, avec pour seule compagnie sa chienne Daisy. Il mène une vie sans histoire, jusqu\'à ce qu\'un malfrat sadique nommé Iosef Tarasof remarque sa voiture. John refuse de la lui vendre. Iosef n\'acceptant pas qu\'on lui résiste, s\'introduit chez John avec deux complices pour voler la Mustang, et tuer sauvagement Daisy.',
                'director' => 2,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'title' => 'Atomic Blonde',
                'releaseDate' => '2017-08-17',
                'duration' =>   '1:55:00',
                'synopsis' => 'L\'agent Lorraine Broughton est une des meilleures espionne du Service de renseignement de Sa Majesté ; à la fois sensuelle et sauvage et prête à déployer toutes ses compétences pour rester en vie durant sa mission impossible. Envoyée seule à Berlin dans le but de livrer un dossier de la plus haute importance dans cette ville au climat instable, elle s\'associe avec David Percival, le chef de station local, et commence alors un jeu d\'espions des plus meurtriers',
                'director' => 2,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
