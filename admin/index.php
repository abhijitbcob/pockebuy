<?php
include "config.php";
session_start();

if (isset($_SESSION["username"])) {
    header("Location: {$hostname}/admin/products_list.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | Login</title>
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body class="flex items-center justify-center bg-[#f1f1f1]">
    <div id="login-dialog" class="avoid-click-bubble bg-white max-w-[450px] rounded-lg w-full mt-24 p-6">
        <h6 class="text-black text-lg uppercase font-bold">Login</h6>

        <form class="modal-form mt-2.5" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-group">
                <label class="text-[12px] text-black font-bold">Username</label>
                <div class="mt-1">
                    <input
                        class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                        type="text" placeholder="Please enter username" name="username">
                    <p style="display: none;" class="invalid-message text-xs font-normal text-orange mt-1 ">
                        Por favor ingresa un nombre válido
                    </p>
                </div>
            </div>

            <div class="input-group mt-3">
                <label class="text-[12px] text-black font-bold">Password</label>
                <div class="mt-1">
                    <input
                        class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                        type="password" placeholder="Full name" name="password">
                    <p style="display: none;" class="invalid-message text-xs font-normal text-orange mt-1 ">
                        Por favor ingresa un nombre válido
                    </p>
                </div>
            </div>

            <button type="submit" value="login" name="login"
                class="btn-type-1 btn-type-1--brand w-full text-center mt-8">Submit</button>
        </form>

        <?php
        if (isset($_POST['login'])) {
            include 'config.php';

            if (empty($_POST['username']) || empty($_POST['password'])) {
                echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                die();
            } else {
                $username =  $_POST['username'];
                $password = md5($_POST['password']);

                $collection = $dbConnection->pockebuy->admin;
                $result = $collection->find(['username' => $username, 'password' => $password])->toArray();

                if (count($result) == 1) {
                    $_SESSION["username"] = $result[0]->username;
                    $_SESSION["user_id"] = $result[0]->user_id;
                    $_SESSION["user_role"] = $result[0]->user_role;

                    header("Location: {$hostname}/admin/products_list.php");
                } else {
                    echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                }
            }
        }
        ?>

    </div>
</body>

</html>