<?php
   /*
   Plugin Name: WordCamp Verona 2023
   description: Esempio per il Talk: Hook e child: sviluppare plugin facilmente estendibili!
   Version: 1
   Author: Matteo Enna
   Author URI: https://matteoenna.it
   Text Domain: wordcamp-verona-2023
   License: GPL2
   */

   if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function get_DB() {
    $il_mio_database = array(
        'speaker' => array(
            '0' => 'Aleksandar Savkovic',
            '1' => 'Andrea Cardinali',
            '2' => 'Andrea Guarneri',
            '3' => 'Andrea Marchetti',
            '4' => 'Anna Girardi',
            '5' => 'Dennis Ploetner',
            '6' => 'Elena Brescacin',
            '7' => 'Enrico Battocchi',
            '8' => 'Erika Gili',
            '9' => 'Francesco Grasso',
            '10' => 'Gloria Liuni',
            '11' => 'Hilda Ramirez',
            '12' => 'Ivan Messina',
            '13' => 'Ivana Cirkovic',
            '14' => 'Luca Baroncini',
            '15' => 'Marco Salvo',
            '16' => 'Margherita Pelonara',
            '17' => 'Matteo Enna',
            '18' => 'Nicola Lapenta',
            '19' => 'Nicolò Damoli',
            '20' => 'Patricia BT',
            '21' => 'Sebastian Hornoi',
            '22' => 'Serena Piccioni',
            '23' => 'Silvia Gazzotti',
            '24' => 'Simona Simionato',
            '25' => 'Simone Baldassin',
            '26' => 'Tomasz Zieliński',
            '27' => 'Vincenzo Di Franco',
            '28' => 'Vineet Talwar'
        ),
        'talk' => array(
            '0' => array(
                'speaker' => '0',
                'titolo' => 'Community marketing vs management',
                'orario' => '12:00',
                'data' => '18 Novembre 2023'
            ),
            '1' => array(
                'speaker' => '1',
                'titolo' => 'Interaction to Next Paint: come rendere il tuo sito a prova del nuovo Core Web Vital di Google',
                'orario' => '12:50',
                'data' => '18 Novembre 2023'
            ),
            '2' => array(
                'speaker' => '2',
                'titolo' => 'Banner e pubblicità performanti',
                'orario' => '15:50',
                'data' => '18 Novembre 2023'
            ),
            '3' => array(
                'speaker' => '3',
                'titolo' => 'Temi ibridi: un nuovo modo di fare siti in modo efficiente',
                'orario' => '14:30',
                'data' => '18 Novembre 2023'
            ),
            '4' => array(
                'speaker' => '4',
                'titolo' => 'Social Media Trend 2024: opportunità integrate per imprese e professionisti nel futuro dei social',
                'orario' => '17:20',
                'data' => '18 Novembre 2023'
            ),
            '5' => array(
                'speaker' => '5',
                'titolo' => 'The day I became an Open Source software developer',
                'orario' => '12:40',
                'data' => '18 Novembre 2023'
            ),
            '6' => array(
                'speaker' => '6',
                'titolo' => 'BlIND – Blogging e indipendenza: WordPress senza vedere',
                'orario' => '10:30',
                'data' => '18 Novembre 2023'
            ),
            '7' => array(
                'speaker' => '7',
                'titolo' => 'Prepararsi all’AI-pocalisse: SEO per un mondo (non così) nuovo',
                'orario' => '11:10',
                'data' => '18 Novembre 2023'
            ),
            '8' => array(
                'speaker' => '8',
                'titolo' => 'Esplorando il potere dei Feed RSS: utilizzi alternativi oltre il semplice blog',
                'orario' => '15:10',
                'data' => '18 Novembre 2023'
            ),
            '9' => array(
                'speaker' => '9',
                'titolo' => 'theme.JSON file dinamici',
                'orario' => '09:50',
                'data' => '18 Novembre 2023'
            ),
            '10' => array(
                'speaker' => '10',
                'titolo' => 'FSE: da dove comincio?',
                'orario' => '10:30',
                'data' => '18 Novembre 2023'
            ),
            '11' => array(
                'speaker' => '11',
                'titolo' => 'WordPress come strumento di empowerment per giovani attivisti',
                'orario' => '16:10',
                'data' => '18 Novembre 2023'
            ),
            '12' => array(
                'speaker' => '12',
                'titolo' => 'Trasferire un sito WordPress senza errori e senza andare offline',
                'orario' => '17:20',
                'data' => '18 Novembre 2023'
            ),
            '13' => array(
                'speaker' => '13',
                'titolo' => 'What is your story?',
                'orario' => '09:50',
                'data' => '18 Novembre 2023'
            ),
            '14' => array(
                'speaker' => '14',
                'titolo' => 'Da Designers Italia a WordPress: creare siti comunali in linea con il PNRR',
                'orario' => '15:50',
                'data' => '18 Novembre 2023'
            ),
            '15' => array(
                'speaker' => '15',
                'titolo' => 'Odissea Public Speaking – Supera le tue paure e riscopri il potere della tua voce',
                'orario' => '13:00',
                'data' => '18 Novembre 2023'
            ),
            '16' => array(
                'speaker' => '16',
                'titolo' => 'Siamo una community sicura e accogliente?',
                'orario' => '16:40',
                'data' => '18 Novembre 2023'
            ),
            '17' => array(
                'speaker' => '17',
                'titolo' => 'Hook e child: sviluppare plugin facilmente estendibili!',
                'orario' => '12:00',
                'data' => '18 Novembre 2023'
            ),
            '18' => array(
                'speaker' => '18',
                'titolo' => 'Ottimizza il tuo sito web con la Web Analytics WordPress: gli strumenti gratuiti indispensabili',
                'orario' => '18:00',
                'data' => '18 Novembre 2023'
            ),
            '19' => array(
                'speaker' => '19',
                'titolo' => 'Quali sono le potenzialità di una Local Page collegata al Google Business Profile? Miniguida al Local marketing',
                'orario' => '14:30',
                'data' => '18 Novembre 2023'
            ),
            '20' => array(
                'speaker' => '20',
                'titolo' => 'Having a blast with my crash test multisite with 468 plugins',
                'orario' => '16:00',
                'data' => '18 Novembre 2023'
            ),
            '21' => array(
                'speaker' => '21',
                'titolo' => 'Come scalare un sito WordPress grazie all’action scheduler',
                'orario' => '13:00',
                'data' => '18 Novembre 2023'
            ),
            '22' => array(
                'speaker' => '22',
                'titolo' => 'Block Editor tricks for lazy people',
                'orario' => '15:10',
                'data' => '18 Novembre 2023'
            ),
            '23' => array(
                'speaker' => '23',
                'titolo' => 'La gestione del cliente (quanta pazienza!)',
                'orario' => '12:50',
                'data' => '18 Novembre 2023'
            ),
            '24' => array(
                'speaker' => '24',
                'titolo' => 'Siamo una community sicura e accogliente?',
                'orario' => '16:40',
                'data' => '18 Novembre 2023'
            ),
            '25' => array(
                'speaker' => '25',
                'titolo' => 'Campi personalizzati del tema con ACF',
                'orario' => '12:40',
                'data' => '18 Novembre 2023'
            ),
            '26' => array(
                'speaker' => '26',
                'titolo' => 'Leveraging well-structured themes for project success',
                'orario' => '11:10',
                'data' => '18 Novembre 2023'
            ),
            '27' => array(
                'speaker' => '27',
                'titolo' => 'Sincronizzazione dei plugin WordPress tra produzione e sviluppo: automazione con Script CLI',
                'orario' => '16:40',
                'data' => '18 Novembre 2023'
            ),
            '28' => array(
                'speaker' => '28',
                'titolo' => 'Making Websites User-Friendly Not Machine friendly: A Guide to Better UX',
                'orario' => '18:00',
                'data' => '18 Novembre 2023'
            )
        )
    );

    return $il_mio_database;
}

function get_talk() {
    $db = get_DB();
    return $db['talk'];
}

function get_speaker() {
    $db = get_DB();
    return $db['speaker'];
}

function prepair_talk($talk){
    $speaker = get_speaker();
    return $talk['titolo'].' di '.$speaker[$talk['speaker']].' alle '.$talk['orario'].' il '.$talk['data'].'!';
}

// Funzione principale del plugin
function wordcamp_verona_2023_main_function() {
    // Contenuto iniziale
    $content = 'Non perderti: ';

    $talk = get_talk();
    $indiceCasuale = array_rand($talk);
    $talkCasuale = prepair_talk($talk[$indiceCasuale]);

    // Utilizza apply_filters per consentire la personalizzazione
    $content .= apply_filters('wcverona_2023_content', $talkCasuale);

    do_action('wcverona_2023_before_echo', $talk[$indiceCasuale]);
    // Output del contenuto
    echo '<div class="wordcamp-verona-content">' . $content . '</div>';

    do_action('wcverona_2023_after_echo', $talk[$indiceCasuale]);
}

// Aggiunge un'azione personalizzata per la funzione principale
add_action('wp_head', 'wordcamp_verona_2023_main_function');


/* Come usarlo */
function afterparty_wcverona_content($content) {
    $content .= ' Senza dimenticare l\'after party!';
    return $content;
}
add_filter('wcverona_2023_content', 'afterparty_wcverona_content');

// Esempio di action
function controller_after($talk) {
    $orario = $talk['orario'];

    // Confronta l'orario con il valore di riferimento per il pomeriggio
    if (strtotime($orario) >= strtotime('12:00')) {
        echo '<div class="event-notification">Aspetta! Questo talk è di pomeriggio, hai ancora qualche ora, cerca un altro talk o visita i nostri sponsor!</div>';
    } else {
        echo '<div class="event-notification">Questo talk è di mattina, teniamo sotto controllo l\'orologgio</div>';
    }
}
add_action('wcverona_2023_after_echo', 'controller_after');

// Esempio di action
function controller_before($talk) {
    echo "Benvenuti a questo WordCamp!";
}
add_action('wcverona_2023_before_echo', 'controller_before');

remove_action('wcverona_2023_after_echo', 'controller_after');
