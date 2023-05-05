<?php
session_start();
$_SESSION['isauth'] = true;
include './partial/function/function.php';

?>

<?php include './partial/template/header.php' ?>

<h1 class="text-upperrcase  ">Generatore di password</h1>
<form class="row" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    <div class="col">
        <label for="inputEmail4" class="form-label">Quanto vuoi lunga la tua nuova password?</label>
        <input type="number" name="number" class="form-control ms-2" placeholder="Inserisci numero" aria-label="number">
        <button type="submit" class="btn btn-success m-2 ">Invia</button>
    </div>
</form>

<?php include './partial/template/footer.php' ?>