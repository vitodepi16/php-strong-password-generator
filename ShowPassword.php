<?php
session_start();
include './partial/template/header.php';
include './partial/function/function.php'
?>


<?php if (!empty($_SESSION['isauth'])) { ?>
    <div class="h3">La tua nuova password è: <?php echo $password ?></div>
<?php } else {
    header('Location: ./index.php');
} ?>

<?php include './partial/template/footer.php'; ?>