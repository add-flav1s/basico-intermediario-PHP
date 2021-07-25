<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadLibs</title>
</head>
<style>
.container {
    width: 100vw;
    height: 100vh;
    background: #6C7A89;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center
}

.box {
    width: 800px;
    height: 550px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
}

body {
    margin: 0px;
}
</style>

<body>
    <div class="container">
        <div class="box">

            <h3>MadLibs</h3>
            <form action="site.php" method="get">
                Adjactive = <input type="text" name="adjactive"><br><br>
                Color = <input type="text" name="color"><br><br>
                Thing = <input type="text" name="thing"><br><br>
                Place = <input type="text" name="place"><br><br>
                Person = <input type="text" name="person"><br><br>
                Adjactive1 = <input type="text" name="adjactive1"><br><br>
                Insect = <input type="text" name="insect"><br><br>
                Food = <input type="text" name="food"><br><br>
                Verb = <input type="text" name="verb"><br><br>
                <input type="submit">
            </form>
            <br>
            <hr>
            <br>
            <?php 
           $adjactive = strtoupper($_GET["adjactive"]);
           $color = strtoupper($_GET["color"]);
           $thing = strtoupper($_GET["thing"]);
           $place = strtoupper($_GET["place"]);
           $person = strtoupper($_GET["person"]);
           $adjactive1 = strtoupper($_GET["adjactive1"]);
           $insect = strtoupper($_GET["insect"]);
           $food = strtoupper($_GET["food"]);
           $verb = strtoupper($_GET["verb"]);
            
            echo "Last night I dreamed I was a $adjactive butterfly with $color splocthes that looked like $thing. I flew to $place  with my bestfriend and $person who was a $adjactive1 $insect. We ate some $food when we got there and then decided to $verb and the dream ended when I said-- lets $verb."; ?>
        </div>
    </div>

</body>

</html>