<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>String Manipulation</title>
</head>
<body>
    <h2>String Manipulation</h2>
    <form method="post" action="">
        Enter a sentence:<br>
        <textarea name="sentence" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Analyze">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sentence = htmlspecialchars($_POST['sentence']);
        $num_chars = strlen($sentence);
        $num_words = str_word_count($sentence);
        $uppercase_sentence = strtoupper($sentence);
        $lowercase_sentence = strtolower($sentence);

        echo "The sentence is: \"$sentence\"<br>";
        echo "Number of characters: $num_chars<br>";
        echo "Number of words: $num_words<br>";
        echo "Uppercase: $uppercase_sentence<br>";
        echo "Lowercase: $lowercase_sentence<br>";
    }
    ?>
</body>
</html>
