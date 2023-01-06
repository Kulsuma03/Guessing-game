<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Gage</title>
    <style type="text/css">
        .header{
           position: absolute;
           left: 50%;
           top: 44%;
           transform: translate(-55%, -44%);
           -webkit-transform: translate(-55%, -44%)
        }
        .guess{
           position: absolute;
           left: 55%;
           top: 60%;
           transform: translate(-55%, -60%);
           -webkit-transform: translate(-55%, -60%)
        }
        .select{
            margin: 10px auto;
        }
        span{
            color: green;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Guessing Game</h1>
        <p>hint ----> For music first letter is <span>a</span></p>
        <p>hint ----> For movie first letter is <span>b</span></p>
        <p>hint ----> For game first letter is <span>c</span></p>
    </div>
    <div class="guess">
        <form action="guess.php" method="POST">
        <select class="select" name="game" id="cars">
           <option value="game">game</option>
           <option value="music">music</option>
           <option value="movie">movies</option>
        </select>
            <input type="text" name="guess" id="">
            <input type="submit" name="submit" value="Guess">
        </form>
    </div>
</body>
</html>