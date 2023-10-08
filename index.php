<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Ecommerce</title>
</head>
<body>
    <?php
        include('../inc/header.php');        
    ?>
    <h1>
        <?php
        include_once('../system/libs/Main.php');
        include_once('../system/libs/DController.php');
        include_once('../system/libs/Load.php');
        
        // $main = new Main();
        

        $url = isset($_GET['url']) ? $_GET['url'] : NULL;
        
        if($url!=NULL){
            $url = rtrim($url,'/');
            $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
        }else{
            unset($url);
        }

        if(isset($url[0])){
            include_once('../app/controllers/'.$url[0].'.php');
            $ctlr = new $url[0]();
            if(isset($url[2])){
                $ctlr->{$url[1]}($url[2]);
            }else{

                if(isset($url[1])){
                    $ctlr->{$url[1]}();

                }else{

                }
            }

        }else{
            include_once('../app/controllers/index.php');
            $index = new index();
            $index->homepage();
        }

        ?>        
    </h1>
    <?php
        include('../inc/footer.php');
    ?>
</body>
</html>