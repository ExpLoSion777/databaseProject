<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <title><?php if (isset($title)) {
                echo $title;
            } ?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">
</head>
<?php include 'header.php'; ?>

<body>
    <div class="wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" method="post" action="newMember.php" autocomplete="off">
                    <h2>請註冊</h2>
                    <p>已有帳號? <a href='login.php'>登入</a></p>
                    <hr>
                    <?php
                    //check for any errors
                    if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<p class="bg-danger">' . $error . '</p>';
                        }
                    }

                    //if action is joined show sucess
                    if (isset($_GET['action']) && $_GET['action'] == 'joined') {
                        echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
                    }
                    ?>

                    <div class="form-group">
                        <label>使用者名稱</label>
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if (isset($error)) {
                                                                                                                                            echo htmlspecialchars($_POST['username'], ENT_QUOTES);
                                                                                                                                        } ?>" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>電子信箱</label>
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="<?php if (isset($error)) {
                                                                                                                                            echo htmlspecialchars($_POST['email'], ENT_QUOTES);
                                                                                                                                        } ?>" tabindex="2">
                    </div>
                    <div class="form-group">
                        <label>帳號</label>
                        <input type="text" name="account" id="account" class="form-control input-lg" placeholder="Account" value="<?php if (isset($error)) {
                                                                                                                                        echo htmlspecialchars($_POST['account'], ENT_QUOTES);
                                                                                                                                    } ?>" tabindex="3">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>密碼</label>
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>確認密碼</label>
                                <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="5">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>地址</label>
                        <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" value="<?php if (isset($error)) {
                                                                                                                                        echo htmlspecialchars($_POST['address'], ENT_QUOTES);
                                                                                                                                    } ?>" tabindex="6">
                    </div>
                    <div class="form-group">
                        <label>手機號碼</label>
                        <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control input-lg" placeholder="Phone Number" value="<?php if (isset($error)) {
                                                                                                                                                    echo htmlspecialchars($_POST['phoneNumber'], ENT_QUOTES);
                                                                                                                                                } ?>" tabindex="7">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>生日</label>
                                <input type="date" name="birthday" id="birthday" class="form-control input-lg" tabindex="8">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 sex">
                            <label>性別</label>
                            <input type="radio" name="sex" id="man" value="man" tabindex="9">
                            <lable for="sex">男</lable>
                            <input type="radio" name="sex" id="woman" value="woman" tabindex="10">
                            <lable for="sex">女</lable>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="submit" name="submit" value="註冊" class="btn btn-primary btn-block btn-lg" tabindex="11">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>