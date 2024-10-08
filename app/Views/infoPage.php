<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Emirate Air</title>
        <link rel="icon" type="image/ico" href="">
        <!-- Bootstrap/CSS -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- JavaScript For Buttons -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        
        <?= $this ->include('Components/landingPage_Comps/landingPage_Comps.php') ?>
    </head>

    <body>
        <!-- Header -->
        
            <?= $this ->include('Components/header_nav') ?>

        <!-- Body -->

        <?= $this ->include('Components/landingPage_Comps/landingPage_Body') ?>

        <!-- Footer -->
        
            <?= $this ->include('Components/footer_main') ?> 
            
    </body>
</html>