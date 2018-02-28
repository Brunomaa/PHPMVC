<html>
    <head>
        <title>Alteração Git</title>
    </head>
    <body>
       <?php         
         require_once "../vendor/autoload.php"; 
          
         $route = new \App\Route;
         echo $route->getUrl();
          
        ?>
        <p></p>
    </body>
</html>
