<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    //Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_anagram", function() use($app) {
       $my_AnagramDetector = new AnagramDetector;
       $anagram_word1 = $_GET['word1'];
       $anagram_word2 = $_GET['word2'];
       $anagram_word3 = $_GET['word3'];
       $anagram_word4 = $_GET['word4'];
       $anagram_word5 = $_GET['word5'];
    //    var_dump ($my_AnagramDetector->detectAnagram($anagram_word1, $anagram_word2));
    //    $my_AnagramDetector->makeLeetspeak($_GET['word']);
        $test = $my_AnagramDetector->detectAnagram($anagram_word1, $anagram_word2,$anagram_word3, $anagram_word4, $anagram_word5);
        return $app['twig']->render('anagram_page.html.twig', array('results' => $test));
   });
   return $app
 ?>
