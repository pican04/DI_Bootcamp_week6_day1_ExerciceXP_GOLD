<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP2_GOLD</title>
    </head>
    <body>
        <h1>ExerciceXP2_GOLD</h1>

        <!-- Write a PHP program to count the words in the string.-->
        <?php 
        function countWord($word){
            print_r(str_word_count($word,1));
        }
        echo countWord($messageLength);
        ?>
    </body>
</html>