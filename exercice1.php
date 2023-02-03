<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP1_GOLD</title>
    </head>
    <body>
        <h1>ExerciceXP1_GOLD</h1>
        <!-- Write a PHP program to find the length of the string.-->
        <?php 
        # Function to give the length
        function Length($str){
            return strlen($str);
        }
        $messageLength = "PHP is a easy program";
        echo " the length of \" ".$messageLength." \" is : ".Length($messageLength);
        ?>

    </body>
</html>