<?php 

use SimilarText\Finder;

require('./vendor/autoload.php');

// User input with a typo (you could get it from $_GET)
$needle = 'tmatoes';

// Your list (from your database or an API)
$haystack = ['salad', 'tomatoes', 'onions', 'mates'];

// Init Text Finder
$finder = new Finder($needle, $haystack);

// Display all results ordered by the most approching
$results = $finder->all();
echo implode(', ', $results);

// You should see something like "tomatoes, mates, onions, salad", yohoo.

?>