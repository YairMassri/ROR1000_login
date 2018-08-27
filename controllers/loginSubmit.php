<?php
// get values from the url
$email = $_POST['email'];
$pass = ($_POST['pass']);
// die($pass);

// validate user values
if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
       // send back with wrong email error
       header('Location: ../login.php?error');
    }else if(strlen(trim($pass)) < 6){
        // send back with wrong password error
        header('Location: ../login.php?error');
    }else {
        $pass = md5($_POST['pass']);
        if(file_exists('../data.db')) {
            //get contents from database.db file and assign to variable unserialized
            $content = unserialize(file_get_contents('../data.db'));
            
            $fileArr = $content;
            // print_r($content);//show selected record
            // exit;
            //check if file is empty, if it is, login failed redirect with error message
            if (empty($content)) {
                // send back with file empty error
                header('Location: ../login.php?error');
            }else{
                if (is_array($fileArr)) {
                    //check password entered with the one in file
                    if($fileArr[$email]['pass'] == $pass)
                    {
                        //put variables in session variable
                        $session = ['email'=>$email, 'pass'=>$fileArr[$email]['pass']];
                        // start the session
                        session_start();
                        // place session variable in session
                        $_SESSION = $session;
                        // redirect to home after successful log in
                        header("Location: ../home.php");
                    }
                    else{
                        // send back with login error
                        header('Location: ../login.php?error');
                    }
                }
                else{
                    // send back with file doesn't exist error
                    header('Location: ../login.php?error');
                } 
            }
        }
        else{
            // send back with file doesn't exist error
            header('Location: ../login.php?error');
        }
    }
?>