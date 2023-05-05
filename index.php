<?php

if (!empty($_GET['number'])) {
    $length = $_GET['number'];
} else {
    $length = 0;
}
function generatePassword($length)
{

    if ($length == 0) {
        $password = null;
    } else {
        $character = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = substr(str_shuffle($character), 0, $length);
    }
    return $password;
}
$password = generatePassword($length)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <h1 class="text-upperrcase  ">Generatore di password</h1>
    <form class="row" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <div class="col">
            <label for="inputEmail4" class="form-label">Quanto vuoi lunga la tua nuova password?</label>
            <input type="number" name="number" class="form-control ms-2" placeholder="Inserisci numero" aria-label="number">
            <button type="submit" class="btn btn-success m-2 ">Invia</button>
        </div>
    </form>
    <div class="h3">La tua nuova password è: <?php echo $password ?></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>