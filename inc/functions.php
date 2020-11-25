<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = [['quote' => 'Greater love has no one than this: to lay down one\’s life for one\’s friends.', 'source' => 'John:15:13', 'citation' => 'Bible', 'year' => '90'],
           ['quote' => 'If God is for us, who can be against us?', 'source' => 'Paul', 'citation' => 'Romans:8:31b', 'year' => '56'],
           ['quote' => 'The LORD is my shepherd, I lack nothing.', 'source' => 'king David', 'citation' => 'Psalm:23:1', 'year' => '1000BC'],
           ['quote' => 'We are all faced with a series of great opportunities brilliantly disguised as impossible situations.', 'source' => 'Chuck Swindoll'],
           ['quote' => ' All the darkness in the world cannot extinguish the light of a single candle.', 'source' => 'Francis of Assisi']
];


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($arr){
    $i = rand(0, (sizeof($arr) - 1));
    return $arr[$i];
}

// Create the printQuote funtion and name it printQuote
function printQuote($arr){
    $getRand = getRandomQuote($arr);
    $processVal = '';
    if(isset($getRand["citation"]) && isset($getRand["year"])) {
        $processVal = '<p class="quote">' . $getRand['quote'] . '</p>';
        $processVal .= '<p class="source">' . $getRand['source'];
        $processVal .= '<span class="citation">' . $getRand['citation'] . '</span>';
        $processVal .= '<span class="year">' . $getRand['year'] . '</span></p>';
    } else {
        $processVal = '<p class="quote">' . $getRand['quote'] . '</p>';
        $processVal .= '<p class="source">' . $getRand['source'] . '</p>';
    }
}