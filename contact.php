
 https://code.tutsplus.com/tutorials/create-a-contact-form-in-php--cms-32314

<?php 
    if ($_POST) {
        $user_name = "";
        $user_email = "";
        $user_message = "";
        $email_body = "<div>";

        if(isset($_POST['user_name'])) {
            $user_name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
            $email_body .= "<div>
                                <label><b>User Name:</b></label>&nbsp;<span>".$user_name."</span>
                                </div>";     
        }

        if(isset($_POST['user_email'])) {
            $user_email = str_replace(array("\r", "\n", "\0a", "\od"), '', $_POST['visitor_email']);
            $user_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
            $email_body .= "<div>
                                <label><b>Visitor Email:</b></label>&nbsp;<span>".$user_email."</span>
                            "
        }


    } else {
        echo '<p>Something went wrong!</p>'
    }
?>