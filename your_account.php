<?php
session_start();

include 'config-db.php';
$collection = $dbConnection->pockebuy->users;
$user = $collection->findOne(['email' => $_SESSION['email']]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products list</title>
    <link rel="stylesheet" href="./dist/app.css">
    <link rel="shortcut icon" href="#" type="image/x-icon">
</head>

<body>
    <?php include 'header.php' ?>

    <div class="container py-7">
        <h6 class="text-black text-lg uppercase font-bold">Your Account</h6>
        <div class="grid gap-2">
            <div class="flex items-center gap-3">
                <span>Name:</span>
                <span><?php echo $user->name; ?></span>
            </div>
            <div class="flex items-center gap-3">
                <span>Email:</span>
                <span><?php echo $user->email; ?></span>
            </div>

            <div class="flex items-center gap-3">
                <span>Total orders:</span>
                <span><?php echo count($user->orders); ?></span>
            </div>
        </div>
    </div>

    <script src="./dist//main.js"></script>

</body>