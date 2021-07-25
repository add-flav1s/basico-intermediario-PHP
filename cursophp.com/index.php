<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
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
    width: 300px;
    height: 300px;
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

            <h3>Multiplication Calculator</h3>
            <form action="index.php" method="get">
                Number 1: <input type="number" name="numberOne">
                <br><br>
                Number 2: <input type="number" name="numberTwo">
                <br><br>
                <input type="submit">
            </form>
            <br>
            <hr>
            <br>
            <?php echo 'Answer: ' . $_GET["numberOne"] . ' x ' .  $_GET["numberTwo"] . ' = ' . $_GET["numberOne"] *  $_GET["numberTwo"]; ?>
        </div>
    </div>

</body>

</html>