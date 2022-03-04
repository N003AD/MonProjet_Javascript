
<?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(isset($_GET['action'])){
            if($_REQUEST['action']=="accueil"){
                require_once PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php";
            }
        }
    }

