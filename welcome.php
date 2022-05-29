<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Benvenuto</title>
    <script src="index.js"></script>
    <link rel="stylesheet" href="style_welcome.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Benvenuto, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Resetta la tua password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Logout dal tuo account</a>
    </p>
    

</body>
</html>