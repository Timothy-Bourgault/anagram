<?php
    class AnagramDetector
    {
        function detectAnagram($word1, $word2, $word3, $word4, $word5)
        {
            $test_array = array($word1, $word2, $word3, $word4, $word5);
            $test_array2 = array();
            $win_words = array();
            foreach ($test_array as $word) {
                $working_word = str_split($word);
                sort($working_word);
                $working_word2 = implode(",", $working_word);
                array_push($test_array2, $working_word2);
            }
            $keyword = array_shift($test_array2);
            for ($i=0; $i <count($test_array2); $i++) {
                if ($test_array2[$i]==$keyword){
                    array_push($win_words,$test_array[$i+1]);
                }
            }
            // foreach ($test_array2 as $anagram) {
            //     $counter = 0;
            //     $counter++;
            //     if ($anagram==$keyword){
            //         array_push($win_words,$test_array[$counter]);
            //     }
            //
            // }
            // $word_array = array($word1, $word2, $word3, $word4, $word5);
            // $array1 = array();
            // $array2 = array();
            // $array3 = array();
            // $array4 = array();
            // $array5 = array();
            // $array_array = array($array1, $array2, $array3, $array4, $array5);
            // foreach ($word_array as $word) {
            //     $counter = 0;
            //     $test = str_split($word);
            //     array_push($array_array[$counter], $test);
            //     $counter++;
            //     // $counter = 1;
            //     // for ($i=0; $i <strlen($word); $i++) {
            //     //     array_push(($array_array[1]),$word[$i]);
            //     // }
            //     // $counter++;
            // }
             return $win_words;

        }
    }
 ?>
