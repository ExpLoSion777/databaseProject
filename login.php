<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <title><?php if (isset($title)) {
                echo $title;
            } ?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="post" action="" autocomplete="off">
                <h2>請登入</h2>
                <p><a href='index.php'>回到首頁</a></p>
                <hr>

                <?php
                //check for any errors
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<p class="bg-danger">' . $error . '</p>';
                    }
                }

                if (isset($_GET['action'])) {

                    //check the action
                    switch ($_GET['action']) {
                        case 'active':
                            echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
                            break;
                        case 'reset':
                            echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
                            break;
                        case 'resetAccount':
                            echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
                            break;
                    }
                }


                ?>

                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if (isset($error)) {
                                                                                                                                        echo htmlspecialchars($_POST['username'], ENT_QUOTES);
                                                                                                                                    } ?>" tabindex="1">
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
                </div>

                <div class="row arrangement">
                    <div class="col-xs-9 col-sm-9 col-md-9">
                        <a href='reset'>忘記密碼?</a>
                    </div>

                    <div class="col-xs-9 col-sm-9 col-md-9">
                        <a href='register.php'>尚未註冊?</a>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="登入" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
                </div>
            </form>
        </div>
    </div>



</div>