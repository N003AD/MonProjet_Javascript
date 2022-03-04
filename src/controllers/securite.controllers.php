<?php
  require_once(PATH_SRC."model".DIRECTORY_SEPARATOR."user.model.php");
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['action'])){
            if($_POST['action']=="connexion"){
                $login=$_POST['login'];
                $password=$_POST['password'];
               /*  echo $login. "<br>". $password; */
                connexion($login,$password);
            }

        }else{
            
        }
       
    }
/* 
 function connexion($login,$password){
     if(empty($login) || empty($password)){
         echo "champ obligatoire";
         $_SESSION['errors']= "champ obligatoire";
         header("location:".WEB_FRONT);
         
     } else{
        echo "connexion réussie";
    }
 }  <span><?= isset( $_SESSION['errors'])? $_SESSION['errors']: "" ?></span>*/

        /**
        * Traitement des Requetes GET
        */
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(isset($_GET['action'])){
                if($_GET['action']=="deconnexion"){
                    /* echo "Vous avez déconnectez"; */
                    session_unset();
                    header("location:".WEB_FRONT);
                }

            }else{
                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            }
        }

 
        // Validation Back
    function connexion(string $login,string $password):void {
            $errors=[];
            champ_obligatoire("login",$login,$errors);

            if(!isset($errors['login'])){
                valid_email("login",$login,$errors);
            }
                champ_obligatoire("password",$password,$errors);
            if(!isset($errors['password'])){
                valid_password("password",$password,$errors);
            }
            if(count($errors)==0){
                $userConnect=find_user_login_password($login,$password);
                if(count($userConnect)!=0){
                    $_SESSION[USER_KEY]=$userConnect;
                    header("location:".WEB_FRONT."?controller=user&action=accueil");
                    exit();
                }
                else{
                    $errors['connexion']="Login ou Mot de passe incorrect";
                    $_SESSION['errors']=$errors;
                    header("location:".WEB_FRONT);
                    exit();
                }
            }else{
                $_SESSION['errors']=$errors;
                header("location:".WEB_FRONT);
                exit();
            }
        }
        
        function logout():void{
            $_SESSION['user_connect']=array();
            unset($_SESSION['user_connect']);
            session_destroy();
            header("location:".WEB_FROOT);
            exit();
        }  