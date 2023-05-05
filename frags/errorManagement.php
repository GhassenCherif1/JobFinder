<?php



/**
 * generates an errors list, each error is defined by error code as the key, and the error message as the value of  the array
 *
 * its purpose is to collect all the defined errors, and allow you to reuse them easily.
 * @return array of errors
 */
    function getErrors() : array{
        $Errors = [];
        $Errors["wrong_email"]="Incorrect E-Mail: the e-mail you put is incorrect, please verify before entering or sign up if you don't have one";
        $Errors["wrong_password"]="Incorrect Password : check your password again ";
        $Errors["incorrect_input"]="Wrong Input : Verify your input";
        $Errors["email_already_exists"]="E-Mail Already Exists: you can't use this one, try again";
        $Errors["unauthenticated"]="You are not Authenticated : you need to log in before accessing to the application";
        $Errors["sign_up_first"]="Sign up to a new account first to access to this page";
        return $Errors;
    }

/**
 * it checks the current session, if there is any error value in there it return the error message as alert
 *
 * this function could be put anywhere in the html page, and it will show the error there,
 *
 * makes it easier to check if there are errors that has to be shown in that page or no, plus it supports any type
 * defined in the error list otherwise it will just print the error code.
 * @return string the error message in a div class alert-danger
 */
    function showErrorIfExists() : string {
        session_start_once();
        $errors = getErrors();
        if (!isset($_SESSION['errorCode'])) return "";
        $errorCode = $_SESSION['errorCode'];
        $str = '<div class="alert alert-danger" role="alert">';
        if (array_key_exists($errorCode, $errors)){
            $str.= $errors[$errorCode];
        }else{
            $str.= "Error Code: " .$errorCode;
        }
        $str.= '</div>';
        unset($_SESSION['errorCode']);
        return $str;
    }

/**
 * when you detect error that happened and needs to be shown,
 * you use this function to send the error code to the desired page, and it will be shown if it has showErrorIfExists() function
 * @param $errorCode string of the error that has occurred
 * @param $to string the name of the page to send the error (without .php suffix)
 * @return void
 */
     function sendError(string $errorCode, string $to): void {
        session_start_once();
        $_SESSION['errorCode']=$errorCode;
        header("Location: $to.php");
        exit;
    }

/**
 * gets the current page name
 *
 *
 * @return string current page name
 */
    function here():string{
        $filename = basename($_SERVER['PHP_SELF'], '.php');
        return $filename;
    }