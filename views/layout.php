<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="<?php echo $base ?>">

    <title><?php echo isset($title) ? $title : '' ?></title>

    <link href="styles/reset.css" rel="stylesheet">
    <link href="styles/root.css" rel="stylesheet">
    <link href="styles/site.css" rel="stylesheet">

    <script type="text/javascript" src="scripts/vendor/jquery.js"></script>
    <script type="text/javascript" src="scripts/modal.js"></script>
    <script type="text/javascript" src="scripts/test.js"></script>

</head>
<body>

    <section class="site container">
        <?php echo $content ?>
    </section>

    <footer class="site container">
        <p>
            Test for: <a href="http://ouvertureconsulting.com/" target="_blank">ouvertureconsulting.com</a><br>
            <br>Candidate: <a href="mailto:leandrocortese@gmail.com">Leandro Cortese</a>
            <br>Site: <a href="http://www.leandrocortese.net" target="_blank">leandrocortese.net</a>
        </p>
    </footer>

</body>
</html>