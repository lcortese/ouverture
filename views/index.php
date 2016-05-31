<!DOCTYPE html>
<html lang="en" data-environment="<?php echo htmlspecialchars(include 'environment.php') ?>" ng-class="{ 'busy' : loading}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="/">

    <title>CSTREAK - Home</title>

    <link href="styles/root.css" rel="stylesheet">
    <script src="scripts/vendors/requirejs.js" data-main="scripts/configuration"></script>

</head>
<body>

    <ng-include src="'templates/layout/header.html'"></ng-include>

    <section class="site container">
        <div ui-view></div>
    </section>
    
   <div class="busy-blocker modal-backdrop fade in"></div>
    
</div>

</body>
</html>