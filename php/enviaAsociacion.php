<?php
if ( !isset( $_SESSION ) ) session_start();
if ( !$_POST ) exit;
if ( !defined( "PHP_EOL" ) ) define( "PHP_EOL", "\r\n" );


$to = "consultaweb@ceamutual.com.ar";
$subject = "Consulta desde la web para Asociarse ";



foreach ($_POST as $key => $value) {
    if (ini_get('magic_quotes_gpc'))
        $_POST[$key] = stripslashes($_POST[$key]);
    $_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}

// Assign the input values to variables for easy reference
$name      = @$_POST["nombre"];
$apellido      = @$_POST["apellido"];
$dni      = @$_POST["dni"];
$direccion      = @$_POST["direccion"];
$localidad    = @$_POST["localidad"];
$provincia     = @$_POST["provincia"];
$codPost    = @$_POST["codPost"];
$celular     = @$_POST["celular"];
$telefono   = @$_POST["telefono"];
$email     = @$_POST["email"];
$message   = @$_POST["mensaje"];
$verify    = @$_POST["verify"];


// Test input values for errors
$errors = array();
 //php verif name
if(isset($_POST["nombre"])){
 
        if (!$name) {
            $errors[] = "Debe ingresar su Nombre.";
        } elseif(strlen($name) < 2)  {
            $errors[] = "Su nombre debe tener más de dos caracteres";
        }
 
}

if(isset($_POST["apellido"])){
 
    if (!$apellido) {
        $errors[] = "Debe ingresar su Apellido.";
    } elseif(strlen($apellido) < 2)  {
        $errors[] = "Su Apellido debe tener más de dos caracteres";
    }

}



    //php verif email
if(isset($_POST["email"])){
    if (!$email) {
        $errors[] = "Debe ingresar su Email.";
    } else if (!validEmail($email)) {
        $errors[] = "Debe ingresar un mail correcto.";
    }
}
    //php verif phone
if(isset($_POST["celular"])){
    if (!$celular) {
        $errors[] = "Debes ingresar un número de celular correcto.";
    }elseif ( !is_numeric( $celular ) ) {
        $errors[]= 'Su número de teléfono solo puede contener dígitos.';
    }
}



//php verif comment
if(isset($_POST["mensaje"])){
    if (strlen($message) <5) {
        if (!$message) {
            $errors[] = "Debes ingresar un mensaje.";
        } else {
            $errors[] = "El mensaje debe tener al menos  05 caracteres..";
        }
    }
}

    //php verif captcha
if(isset($_POST["verify"])){
    if (!$verify) {
        $errors[] = "You must enter the security code";
    } else if (md5($verify) != $_SESSION['nekoCheck']['verify']) {
        $errors[] = "The security code you entered is incorrect ";
    }
}

if ($errors) {
        // Output errors and die with a failure message
    $errortext = "";
    foreach ($errors as $error) {
        $errortext .= '<li>'. $error . "</li>";
    }

    echo '<div class="alert alert-error">The following errors occured:<br><ul>'. $errortext .'</ul></div>';

}else{



    // Send the email
    $headers  = "From: $to" . PHP_EOL;
    $headers .= "Reply-To: $email" . PHP_EOL;
    $headers .= "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
    $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

    $mailBody  = "Nuevo Mensaje desde la Pagina web - ASOCIACIONES" . PHP_EOL . PHP_EOL;
    $mailBody .= "Nombre: "."$name". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Apellido: "."$apellido". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "DNI: "."$dni". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Dirección: "."$direccion". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Localidad: "."$localidad". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Provincia: "."$provincia". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Código Postal: "."$codPost". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Teléfono: "."$telefono". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Celular: "."$celular". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Email: "."$email". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Mensaje: "."$message". PHP_EOL.$company. PHP_EOL . PHP_EOL;
    $mailBody .= "Enviar un mail a, $email.";
    $mailBody .= (isset($phone) && !empty($phone))?" Or via phone $phone." . PHP_EOL . PHP_EOL:'';
    $mailBody .= "-------------------------------------------------------------------------------------------" . PHP_EOL;


    if(mail("sec.general@cearg.org.ar", $subject, $mailBody, $headers)){
        echo '<div class="alert alert-success">Success! Su mensaje fue enviado correctamente.</div>';
    }
}

// FUNCTIONS 
function validEmail($email) {
    $isValid = true;
    $atIndex = strrpos($email, "@");
    if (is_bool($atIndex) && !$atIndex) {
        $isValid = false;
    } else {
        $domain = substr($email, $atIndex + 1);
        $local = substr($email, 0, $atIndex);
        $localLen = strlen($local);
        $domainLen = strlen($domain);
        if ($localLen < 1 || $localLen > 64) {
            // local part length exceeded
            $isValid = false;
        } else if ($domainLen < 1 || $domainLen > 255) {
            // domain part length exceeded
            $isValid = false;
        } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
            // local part starts or ends with '.'
            $isValid = false;
        } else if (preg_match('/\\.\\./', $local)) {
            // local part has two consecutive dots
            $isValid = false;
        } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
            // character not valid in domain part
            $isValid = false;
        } else if (preg_match('/\\.\\./', $domain)) {
            // domain part has two consecutive dots
            $isValid = false;
        } else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
            // character not valid in local part unless
            // local part is quoted
            if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                $isValid = false;
            }
        }
        if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
            // domain not found in DNS
            $isValid = false;
        }
    }
    return $isValid;
}

?>