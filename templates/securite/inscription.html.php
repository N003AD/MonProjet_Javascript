
                <div  class="formLoginIns">
                    <div class="headFormIns">
                        <div class="divheadIns">
                                <span class="titreIns">S'INSCRIRE</span>
                                <span>Pour tester votre niveau de culture générale</span>
                        </div>
                        <form action="<?= WEB_FRONT ?>" method="post" class="formIns"  onsubmit="return validForm()">
                        <input type="hidden" name="action" value="inscription">
                        <input type="hidden" name="controller" value="securite">
                            <?php if(isset($_SESSION["errors"]['userExist'])):?>
                                <span class="spanError"><?= $_SESSION["errors"]['userExist'] ?></span>
                            <?php endif?>
                            <?php if(isset($_SESSION["success"])):?>
                                <span class="success"><?= $_SESSION["success"] ?></span>
                            <?php endif?>
                            <div class="divInputIns">
                                <label for="">Prénom</label>
                                <input type="text" name="prenom" id="prenomIns" placeholder="Aaaaa">
                                <small class="smallError"><?= isset($_SESSION['errors'])?$_SESSION['errors']['nom']: "" ?></small>
                            </div>
                            <div class="divInputIns">
                                <label for="">Nom</label>
                                <input type="text" name="nom" id="nomIns" placeholder="Baaaa">
                                <small class="smallError"><?= isset($_SESSION['errors'])?$_SESSION['errors']['prenom']: "" ?></small>
                            </div>
                            <div class="divInputIns">
                                <label for="">Login</label>
                                <input type="text" name="login" id="loginIns" placeholder="Baaaa">
                                <small class="smallError"><?= isset($_SESSION['errors'])?$_SESSION['errors']['login']: "" ?></small>
                            </div>
                            <div class="divInputIns">
                                <label for="">Password</label>
                                <input type="password" id="passwordIns" name="password" placeholder="password">
                                <small class="smallError"><?= isset($_SESSION['errors'])?$_SESSION['errors']['password']: "" ?></small>
                            </div>
                            <div class="divInputIns">
                                <label for="">Confirmer Password</label>
                                <input type="password" id="passwordConfirme" name="passwordConfirme" placeholder="password">
                                <small class="smallError"><?= isset($_SESSION['errors'])?$_SESSION['errors']['password2']: "" ?></small>
                            </div>
                            <div class="divAvatar">
                                <span>Avatar</span>
                                <input type="file" id="file" />
                                <label for="file">Choisir un fichier</label>
                            </div>
                            <input type="submit" id="inscrire" name="inscrire" class="btnIns" value="Créer un compte">
                            <?php if(!is_connect()):?>
                                <a href="<?= WEB_FRONT ?>" class="log">Se connecter</a>
                            <?php endif?>
                        </form>
                    </div>
                    <div class="bodyFormIns"> 
                        <img src="<?= WEB_FRONT.'img'.DIRECTORY_SEPARATOR.'sonatelLogo.jpeg'?>" class="logoSAIns" alt="">
                    </div>
                </div>
                <?php
                    if(isset($_SESSION["success"])){
                        unset($_SESSION["success"]);
                    }

                    if(isset($_SESSION["errors"])){
                        unset($_SESSION["errors"]);
                    }
                        
                ?>