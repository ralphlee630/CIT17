<?php

$sentence = "PHP is a powerful scripting language.";
$num_chars = strlen($sentence);
$num_words = str_word_count($sentence);
$uppercase_sentence = strtoupper($sentence);
$lowercase_sentence = strtolower($sentence);

echo "The sentence is: \"$sentence\"<br>";
echo "Number of characters: $num_chars<br>";
echo "Number of words: $num_words<br>";
echo "Uppercase: $uppercase_sentence<br>";
echo "Lowercase: $lowercase_sentence<br>";
?>
