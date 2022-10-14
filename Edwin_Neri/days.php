<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $day = 7;
        switch ($day) {
            case '1':
                print "Welcome to Monday";
                break;
            case '2':
                print "Welcome to Tuesday";
                break;
            case '3':
                print "Welcome to Wendsday";
                break;
            case '4':
                print "Welcome to Thursday";
                break;
            case '5':
                print "Welcome to Friday";
                break;
            case '6':
                print "Welcome to Saturday";
                break;
            case '7':
                print "Welcome to Sunday";
                break;
            default:
                print "Put a number 1 to 7";
                break;
        }

    ?>

</body>
</html>