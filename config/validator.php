    <?php
        function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
        if(empty($data)){
        $errors[$key]=$message;
    }
    }

    function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
        if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
        $errors[$key]=$message;
    }
    }

    function valid_password(string $key,string $data,array &$errors,string $message="Password invalid"){
        
        $uppercase = preg_match('@[a-zA-Z]@', $data);
        // $lowercase = preg_match('@[a-z]@', $data);
        $number = preg_match('@[0-9]@', $data);
        // $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$number || strlen($data) < 6) {
            //echo 'Le mot de passe doit comporter au moins 8 caractères et doit inclure au moins une lettre majuscule, un chiffre et un caractère spécial.';
            $errors[$key]=$message;
        }
    }