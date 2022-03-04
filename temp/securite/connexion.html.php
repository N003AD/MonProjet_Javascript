   

       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Document</title>
        <link rel="stylesheet"  href="<?=WEB_ROOT."css".DIRECTORY_SEPARATOR."style.css"?>">
            <!-- <link rel="stylesheet" href="../../public/css/style.css"> -->
       </head>
       <body>
       <div id="container">
            <form action="<?=WEB_FRONT?>" method="POST">
                <input type="hidden" name="controller" value="securite">
               <input type="hidden" name="action" value="connexion"> 
               <h1>Connexion</h1>
                <label><b>login</b></label>
                <input type="text" placeholder="" name="login">
                <span style="color:red"><?= isset( $_SESSION['errors'])? $_SESSION['errors']['login']: "" ?></span>
               

                <label><b>password</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password">
                <span style="color:red"><?= isset( $_SESSION['errors'])? $_SESSION['errors']['password']: "" ?></span>

                <p style="color:red"></p> 

                <input type="submit" id='submit' value='Connetez' >
 
            </form>
        </div>
       
       </body>
       </html>