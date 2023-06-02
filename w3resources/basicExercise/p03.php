
<?php
    # Resources - https://www.w3resource.com/php-exercises/php-basic-exercise-3.php
    
    $var = 'PHP Programming Language';
    $res = 'W3Resources';
    $bo = 'PHP';
    $anch = 'Truffle';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $var; ?> - by <?php echo $res; ?></title>
    </head>
    <body>
        <h3>Hello, <?php echo $bo; ?></h3>
        <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
        <p>
            <a href="https://cryptoskyplatform.org" >Anchor Tag - <?php echo $anch; ?> </a>.
        </p>
    </body>
</html>