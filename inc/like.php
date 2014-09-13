<?php

    if (ctype_alnum($email)) {
        if(strlen($email)>3){
            $emresult = filter_var( $email, FILTER_VALIDATE_EMAIL );
            if($emresult){

              include('emails/like.php');
              echo  'success';
     
              
            }
          }
        }
          //Else Username already exist
          else{
            echo '(' . "{'status' : 'Invalid Email'}" . ')';
              
          }
        