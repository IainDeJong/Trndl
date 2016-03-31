<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Trndl: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Trndl</title>
        <?php endif ?>

         <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div id="logo">
                    <a href="/"><img alt="Trndl." src="/img/trndl_logo.png"/></a>
                </div>
                        <ul class="nav nav-pills">
                        <li id="foo"><a href="cover_letter.php"><img alt="Cover Letter" src="/img/cover_letter_btn.png"/></a></li>
                        <li id="pil"><a href="letter_resignation.php"><img alt="Letter of Resignation" src="/img/Letter_Resignation_btn.png"/></a></li>
                        <li id="pil"><a href="pers_info.php"><img alt="Edit My Info" src="/img/edit_info_btn.png"/></a></li>
                        <?php if (!empty($_SESSION["id"])): ?>
                            <li id="bar"><a href="logout.php"><img alt="Log Out" src="/img/logout_btn.png"/></a></li>
                        <?php else: ?>
                            <li id="bar"><a href="login.php"><img alt="Login" src="/img/login_btn.png"/></a></li>
                        <?php endif ?>
                    </ul>
                    
            </div>

            <div id="middle">
