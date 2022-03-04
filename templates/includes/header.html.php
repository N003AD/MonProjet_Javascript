<?php
if(!is_connect()){
    header("location:".WEB_FRONT);
}
require_once PATH_VIEWS."layouts".DIRECTORY_SEPARATOR."layout1.html.php";

?>  

                <div class="titleAccueil">
                    <span><p>CREER ET PARAMETRER VOS QUIZZ</p></span>
                    <a href="<?= WEB_FRONT."/?controller=securite&action=deconnexion" ?>" id="btnDeconnexion">Déconnexion</a>
                </div>
                <div class="containerAccueil">
                    <div class="blockMenu">
                        <div class="headMenu">       
                            <!-- <img src="<?= WEB_FRONT.'img'.DIRECTORY_SEPARATOR.'sonatelLogo.jpeg'?>" class="logoSA" alt=""> -->
                        </div>
                        <ul class="ulMenu">
                            <li><a href="#">Liste Questions</a><img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-liste-active.png"?>"></li>
                            <li><a href="#">Créer Admin</a><img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>"></li>
                            <li><a href="#">Liste Joueurs</a><img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-liste.png"?>"></li>
                            <li><a href="#">Créer Questions</a><img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>"></li>
                        </ul>
                    </div>
                    <div class="divBlockContent">

                            <?php $content_for_views ?>
                    
                        