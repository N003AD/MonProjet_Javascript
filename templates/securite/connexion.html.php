<?php require_once PATH_VIEWS."layouts".DIRECTORY_SEPARATOR."layout1.html.php" ?>  

                <form action="<?= WEB_FRONT ?>" class="formLogin" method="post">
                <input type="hidden" name="action" value="connexion">
                <input type="hidden" name="controller" value="securite">
                    <div class="headForm">
                        <p class="paraLogin">Login Form</p>
                    </div>
                    <div class="bodyForm">

                        <small id="errorLogin" style="color:red;"><?= isset($_SESSION['errors'])?$_SESSION['errors']['connexion']: "" ?></small>
                        <div class="inputConnexion">
                            <input type="text" name="login" id="login" class="inputCss" placeholder="Login">
                            <span class="imgCss"><img src="<?= WEB_FRONT.'img'.DIRECTORY_SEPARATOR.'ic-login.png' ?>" class="icons"alt=""></span>
                        </div>
                        <small id="errorLogin" class="smallError"><?= isset($_SESSION['errors'])?$_SESSION['errors']['login']: "" ?></small>
                        <div class="inputConnexion">
                            <input type="password" class="inputCss" id="password" name="password"  placeholder="Password">
                            <span class="imgCss"><img src="<?= WEB_FRONT.'img'.DIRECTORY_SEPARATOR.'ic-login.png' ?>" class="icons"alt=""></span>
                        
                        </div>
                        <small id="errorPassword" class="smallError"><?= isset($_SESSION['errors'])?$_SESSION['errors']['password']: "" ?></small>
                        <div class="divBtnConnexion">
                            <button type="submit" id="connexion" name="connexion" value="connexion" class="btnConnexion">Connexion</button>

                            <a href="#" id="btnInscription" class="btnInscrire">S'inscrire pour jouer</a>
                            
                        </div>
                    </div>
                </form>
                
                <?php
                    if(isset($_SESSION['errors'])){
                        unset($_SESSION['errors']);
                    }
                ?>
