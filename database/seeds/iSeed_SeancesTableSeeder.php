<?php

use Illuminate\Database\Seeder;

class iSeed_SeancesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seances')->delete();
        
        \DB::table('seances')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sequence_id' => 1,
                'libelle' => 'PHP Hypertext Processor',
                'date' => '2019-01-11 08:00:00',
                'salle' => '13',
                'duree' => '04:00:00',
                'contenu' => '<h4>Cours</h4>
<ul>
<li>Rappels du web</li>
<li>Pourquoi PHP ?</li>
<li>Mise en place d’un environnement</li>
<li>Bases de la programmation PHP</li>
</ul>

<h4>TP</h4>
<ul>
<li><a href="https://docs.google.com/document/d/1n3jh0P4_NRJBVlzDHUtX_gRjNAGkedaweVqJK_RKOsQ/edit?usp=sharing" target="_blank">TP 0</a> : Introduction au PHP</li>
<li><a href="http://iutdoua-web.univ-lyon1.fr/~isabelle.goncalves/programmation-web/annexe.html" target="_blank">Accès FTP au serveur de l\'IUT</a></li>
</ul>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            1 => 
            array (
                'id' => 2,
                'sequence_id' => 1,
                'libelle' => 'Sessions et cookies',
                'date' => '2019-01-18 08:00:00',
                'salle' => '13 24',
                'duree' => '04:00:00',
                'contenu' => '<h4>Cours</h4>
<ul>
<li>Le système de sessions</li>
<li>Les cookies</li>
</ul>

<h4>TP</h4>
<ul>
<li><a href="https://docs.google.com/document/d/1-9EjVkjsq5ajcLUAHq67wMa6IDbTtBPogZ7GyojYi2g/edit?usp=sharing" target="_blank">TP Roulette 1</a> : Architecture HTML</li>
<li><a href="https://docs.google.com/document/d/1GbXbqSiTzwt6F3cxMlyI139cKpre1DJ2tAuJPAvWDlE/edit?usp=sharing" target="_blank">TP Roulette 2</a> : Transmission de données</li>
</ul>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            2 => 
            array (
                'id' => 3,
                'sequence_id' => 1,
                'libelle' => 'Base de données',
                'date' => '2019-01-25 08:00:00',
                'salle' => '13 16',
                'duree' => '04:00:00',
                'contenu' => '<h4>Cours</h4>
<ul>
<li>Les bases de données</li>
<li>phpmyadmin</li>
<li>POO PHP</li>
<li><a target="_blank" href="https://docs.google.com/presentation/d/1x-L-oNnZ61LINvtrsszJ5qrWJl8sxeQOLgL4Eo3nY2M/edit?usp=sharing">Rappels POO</a></li>
</ul>



<h4>TP</h4>
<ul>
<li><a href="https://docs.google.com/document/d/1bGw8fm9ulMXCpO5ZLyWXBJMeFgfcON9H-pwaRVBwYBY/edit?usp=sharing" target="_blank">TP Roulette 3</a> : Base de données</li>
<li><a href="https://docs.google.com/document/d/1xO2PYZ36RvNpjM6an0tklfiusWK1EJq3nElPbeC90VY/edit?usp=sharing" target="_blank">TP Roulette 4</a> : PHP Objet</li>

</ul>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            3 => 
            array (
                'id' => 4,
                'sequence_id' => 1,
                'libelle' => 'Design Pattern MVC',
                'date' => '2019-02-01 08:00:00',
                'salle' => '17 03',
                'duree' => '04:00:00',
                'contenu' => '<h4>Cours</h4>
<ul>
<li>Design pattern</li>
<li>MVC: Model-View-Controller</li>
</ul>



<h4>TP</h4>
<ul>
<li><a target="_blank" href="https://docs.google.com/document/d/1VFuwiipSPwfumUlwx2XlMWpIsz-HNhyI3_RD9OS76Zo/edit?usp=sharing">TP Roulette 5</a> : Architecture MVC</li>
</ul>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            4 => 
            array (
                'id' => 5,
                'sequence_id' => 1,
                'libelle' => 'XML et Framework',
                'date' => '2019-02-08 08:00:00',
                'salle' => '03 17',
                'duree' => '04:00:00',
                'contenu' => '<h4>Cours</h4>
<ul>
<li>Introduction XML</li>
</ul>

<h4>TP</h4>
<ul>
<li>Fin du passage en MVC</li>
<li><a target="_blank" href="https://docs.google.com/document/d/1Rc6IUmkxy6Hi5LGLn9w32-XEcy12nLaM8lSv5rw2338/edit?usp=sharing">TP Roulette 6</a> : XML, ajout de module (Bonus)</li>
</ul>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            5 => 
            array (
                'id' => 6,
                'sequence_id' => 1,
                'libelle' => 'Devoir sur table',
                'date' => '2019-02-15 10:00:00',
                'salle' => '26',
                'duree' => '02:00:00',
                'contenu' => 'Devoir sur table',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            6 => 
            array (
                'id' => 7,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-09-12 14:00:00',
                'salle' => '13',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body">
<h5>Cours</h5>
<ul>
<li>Le web, histoire et composants</li>
<li>Besoins matériels et logiciels</li>
<li>HTML/CSS</li>
<li>Première page et premières balises</li>
</ul>
<h5>Ressources</h5>
<ul>
<li><a href="http://iutdoua-web.univ-lyon1.fr/~bastien.thouverez/HTML/e01/" target="_blank">Résumé de l\'épisode 1</a></li>
</ul>
<h5>TP</h5>
<ul>
<li><a href="https://docs.google.com/document/d/160YBqPaAKFM2h58TjPLaAAXT4p2dBLFcnRk-uSVM5iU/edit?usp=sharing" target="_blank">Livre dont vous êtes le héros</a></li>
</ul>
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            7 => 
            array (
                'id' => 8,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-09-19 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"> 
<h5>Reporté</h5>  
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            8 => 
            array (
                'id' => 9,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-09-26 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body">  
<h5>Reporté</h5>         
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            9 => 
            array (
                'id' => 10,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-10-03 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body">
<h5>Cours</h5>
<ul>
<li>Balises HTML (suite)</li>
<li>Balise inline, balise block</li>
<li>Méta-données</li>
<li>Développement et mise en ligne</li>
</ul>
<h5>Ressources</h5>
<ul>
<li><a href="http://iutdoua-web.univ-lyon1.fr/~bastien.thouverez/HTML/e02/" target="_blank">Résumé de l\'épisode 2</a></li>
<li><a href="http://iutdoua-web.univ-lyon1.fr/~isabelle.goncalves/programmation-web/annexe.html" target="_blank">Accès FTP au serveur de l\'IUT</a></li>
</ul> 
<h5>TP</h5>
<ul>
<li><a href="https://docs.google.com/document/d/15CifZ5Q8MGH1E-K7ZGjyS_VdWdb7bLCIeVnsvNMv_I8/edit?usp=sharing" target="_blank">Les Colons de Catane HTML</a></li>
</ul>     
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            10 => 
            array (
                'id' => 11,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-10-10 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body">  
<h5>Cours</h5>
<ul>
<li>CSS</li>
<li>Propriétés du texte</li>
<li>Couleurs</li>
<li>Sélecteurs complexes</li>
</ul>
<h5>TP</h5>
<ul>
<li> <a href="http://flukeout.github.io/" target="_blank">CSS Diner</a>, jusqu\'au niveau 14</li>
<li><a href="https://docs.google.com/document/d/192l5fE2D9rhcI8n0uEfYVyixgZvLaZTp2Kzzcxt0rnA/edit?usp=sharing" target="_blank">Les Colons de Catane CSS</a></li>
</ul>  
<h5>Ressources</h5>
<ul>
<li><a href="e03/regles.png" target="_blank">L\'image, résultat attendu du TP3</a></li>
<li><a href="e03/regles.html" target="_blank">Le fichier HTML de base</a></li>
</ul> 
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            11 => 
            array (
                'id' => 12,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-10-17 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body">
<h5>Cours</h5>
<ul>
<li>Identifiants et classes</li>
<li>Héritage et priorités</li>
<li>Arrière plan</li>
<li>Taille des éléments et débordement</li>
<li>Positionnement flottant</li>
<li>Développer en CSS, liens utiles</li>
</ul>
<h5>Ressources</h5>
<ul>
<li> <a href="http://flukeout.github.io/" target="_blank">CSS Diner</a></li>
<li><a href="http://www.colorzilla.com/" target="_blank">ColorZilla</a>, module de navigateur pour les couleurs</li>
<li><a href="https://www.w3schools.com/css/" target="_blank">W3C CSS</a>, documentation complète du langage</li>
<li><a href="https://devdocs.io/" target="_blank">DevDocs.io</a>, plateforme d\'apprentissage</li>
<li><a href="https://caniuse.com/" target="_blank">CanIUse.com</a>, support du langage sur les navigateurs</li>
<li><a href="http://www.csszengarden.com" target="_blank">CSSZenGarden</a>, Plusieurs version CSS du même code HTML</li>
</ul>  
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            12 => 
            array (
                'id' => 13,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-11-14 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"> 
<h5>Cours</h5>
<ul>
<li>Boîtes et marges</li>
<li>Caractères spéciaux</li>
<li>Tableaux</li>
</ul>
<h5>TP</h5>
<ul>
<li><a href="https://docs.google.com/document/d/1Cx0bcIrCJRo3zV7DCwPfHSTbmRqkUzkpBhMms5Hr_Xg/edit?usp=sharing" target="_blank">Calculatrice</a></li>
</ul>  
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            13 => 
            array (
                'id' => 14,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-11-21 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"> 
<h5>Cours</h5>
<ul>
<li>Organisation des fichiers</li>
<li>Personnalisation des boîtes</li>
<li>Positionnement fin</li>
</ul>
<h5>TP</h5>
<ul>
<li>Mettre en HTML  <a href="https://perso.liris.cnrs.fr/pierre-antoine.champin/enseignement/intro-web/_static/exo_css_boxes/sujet.png" target="_blank">l\'image suivante</a></li>
<li>En utilisant <a href="https://perso.liris.cnrs.fr/pierre-antoine.champin/enseignement/intro-web/_static/exo_css_boxes/sujet.zip">l\'archive des fichiers suivante</a></li>
</ul>  
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            14 => 
            array (
                'id' => 15,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-11-28 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"><h5>Reporté</h5></div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            15 => 
            array (
                'id' => 16,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-11-30 08:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"> 
<h5>Cours</h5>
<ul>
<li>Flexbox</li>
<li>Adaptation au média</li>
<li>Pseudo-classes</li>
</ul>
<h5>TP</h5>
<ul>
<li><a href="http://flexboxfroggy.com/" target="_blank">Flexbox Froggy</a></li>
<li><a href="http://www.flexboxdefense.com/" target="_blank">Flexbox Defense</a></li>
</ul>
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            16 => 
            array (
                'id' => 17,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-12-05 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"> 
<h5>Cours</h5>
<ul>
<li>Formulaires</li>
</ul>
<h5>TP</h5>
<ul>
<li><a href="https://docs.google.com/document/d/1lkMHmeHe2hDD6VYHd2zPQrDi1B8NYbBXJC8l7KbH0Jw/edit?usp=sharing" target="_blank">Calculatrice formulaire</a></li>
</ul>
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            17 => 
            array (
                'id' => 18,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-12-07 08:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"> 
<h5>Cours</h5>
<ul>
<li>Plus loin en HTML : XML &amp; SVG</li>
<li>Plus loin en CSS : Reset &amp; Bootstrap</li>
</ul>
</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            18 => 
            array (
                'id' => 19,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-12-12 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body">Examen Machine</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            19 => 
            array (
                'id' => 20,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-12-14 08:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"><a href="https://docs.google.com/document/d/1heSyiY79-X53mM-kD593ff4FOXBUOEjS1embQl-jMS4/edit?usp=sharing">Projet</a> 1</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            20 => 
            array (
                'id' => 21,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2018-12-19 14:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body"><a href="https://docs.google.com/document/d/1heSyiY79-X53mM-kD593ff4FOXBUOEjS1embQl-jMS4/edit?usp=sharing">Projet</a> 2</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            21 => 
            array (
                'id' => 22,
                'sequence_id' => 2,
                'libelle' => '',
                'date' => '2019-01-10 08:00:00',
                'salle' => '',
                'duree' => '02:00:00',
                'contenu' => '
<div class="panel-body">Devoir sur table</div>',
                'note' => NULL,
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            22 => 
            array (
                'id' => 23,
                'sequence_id' => 3,
                'libelle' => 'Seance 1',
                'date' => '2019-01-07 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            23 => 
            array (
                'id' => 24,
                'sequence_id' => 3,
                'libelle' => 'Seance 2',
                'date' => '2019-01-14 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            24 => 
            array (
                'id' => 25,
                'sequence_id' => 3,
                'libelle' => 'Seance 3',
                'date' => '2019-01-21 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            25 => 
            array (
                'id' => 26,
                'sequence_id' => 3,
                'libelle' => 'Seance 4',
                'date' => '2019-01-28 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            26 => 
            array (
                'id' => 27,
                'sequence_id' => 3,
                'libelle' => 'Seance 5',
                'date' => '2019-02-04 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            27 => 
            array (
                'id' => 28,
                'sequence_id' => 3,
                'libelle' => 'Seance 6',
                'date' => '2019-02-11 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            28 => 
            array (
                'id' => 29,
                'sequence_id' => 3,
                'libelle' => 'Seance 7',
                'date' => '2019-02-18 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            29 => 
            array (
                'id' => 30,
                'sequence_id' => 3,
                'libelle' => 'Seance 8',
                'date' => '2019-02-25 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            30 => 
            array (
                'id' => 31,
                'sequence_id' => 3,
                'libelle' => 'Seance 9',
                'date' => '2019-03-04 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            31 => 
            array (
                'id' => 32,
                'sequence_id' => 3,
                'libelle' => 'Seance 10',
                'date' => '2019-03-11 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            32 => 
            array (
                'id' => 33,
                'sequence_id' => 3,
                'libelle' => 'Seance 11',
                'date' => '2019-03-18 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            33 => 
            array (
                'id' => 34,
                'sequence_id' => 3,
                'libelle' => 'Seance 12',
                'date' => '2019-03-25 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            34 => 
            array (
                'id' => 35,
                'sequence_id' => 3,
                'libelle' => 'Seance 13',
                'date' => '2019-04-01 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            35 => 
            array (
                'id' => 36,
                'sequence_id' => 3,
                'libelle' => 'Seance 14',
                'date' => '2019-04-08 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            36 => 
            array (
                'id' => 37,
                'sequence_id' => 3,
                'libelle' => 'Seance 15',
                'date' => '2019-04-15 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            37 => 
            array (
                'id' => 38,
                'sequence_id' => 3,
                'libelle' => 'Seance 16',
                'date' => '2019-04-22 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            38 => 
            array (
                'id' => 39,
                'sequence_id' => 3,
                'libelle' => 'Seance 17',
                'date' => '2019-04-29 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            39 => 
            array (
                'id' => 40,
                'sequence_id' => 3,
                'libelle' => 'Seance 18',
                'date' => '2019-05-06 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            40 => 
            array (
                'id' => 41,
                'sequence_id' => 3,
                'libelle' => 'Seance 19',
                'date' => '2019-05-13 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            41 => 
            array (
                'id' => 42,
                'sequence_id' => 3,
                'libelle' => 'Seance 20',
                'date' => '2019-05-20 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            42 => 
            array (
                'id' => 43,
                'sequence_id' => 3,
                'libelle' => 'Seance 21',
                'date' => '2019-05-27 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            43 => 
            array (
                'id' => 44,
                'sequence_id' => 3,
                'libelle' => 'Seance 22',
                'date' => '2019-06-03 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            44 => 
            array (
                'id' => 45,
                'sequence_id' => 3,
                'libelle' => 'Seance 23',
                'date' => '2019-06-10 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            45 => 
            array (
                'id' => 46,
                'sequence_id' => 3,
                'libelle' => 'Seance 24',
                'date' => '2019-06-17 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            46 => 
            array (
                'id' => 47,
                'sequence_id' => 3,
                'libelle' => 'Seance 25',
                'date' => '2019-06-24 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
            47 => 
            array (
                'id' => 48,
                'sequence_id' => 3,
                'libelle' => 'Seance 26',
                'date' => '2019-07-01 13:25:00',
                'salle' => '87',
                'duree' => '04:00:00',
                'contenu' => '',
                'note' => NULL,
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
        ));
        
        
    }
}