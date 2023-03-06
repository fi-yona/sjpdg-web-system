<!DOCTYPE html>
<html>
    <head>
    <title>Login SJP</title>
		<link rel="stylesheet" href="assets/style/styles.css">
        <link rel="shortcut icon" href="assets/img/logo.svg">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 
			include_once("function.php");
		?>
        <header>
            <?php
                useHeader();
            ?>
        </header>
        <?php
            firebaseSDK();
        ?>
    </body>
</html>