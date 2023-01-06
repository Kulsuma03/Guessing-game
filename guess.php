<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game Result</title>
    <style>
        .gen{
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class='gen'>
    <?php 
    $game = array("cricket","croquet","curling","cycling","colonel");
    $movie = array("baaghi","baahubali","baazigar","baby","bed luck");
    $music = array("acid","accident","across","afro","acadian");

    // $rand = array_rand($game,1);
    $rand = $game[array_rand($game,1)];
    $guess = @$_POST['guess'];
    $gamename = @$_POST['game'];
    $submit = @$_POST['submit'];

    if($gamename == 'music') {
        $rand = $music[array_rand($music,1)];
    }elseif($gamename == 'movie') {
        $rand = $movie[array_rand($movie, 1)];
    }else{
        $rand = $game[array_rand($game,1)];
    };

    if(isset($submit)){
        if($guess == NULL){
            header("location: index.php");
            exit(); 
        } else {
            if($guess != $rand){
                
                    echo "Ops your guess is incorrect! </br> The correct answer is ".$rand." ".$gamename."!</br><a href='index.php'>Try again?</a>";
              
            }else {
                echo "Wow your guess is correct!<br><a href='index.php'>Play again</a> ";
            }
        }

    } else {
        header("location: index.php");
        exit();
    }
    ?>
    </div>
    
</body>
</html>