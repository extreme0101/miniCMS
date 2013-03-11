<?php
/**
 * Description of Send
 *
 * @author batmunkh
 */
class Email_Send {
    
    public function Email_Send(){
       
    }
    
    public function Email_Send_Register($to='' , $subject='' , $message='' , $headers=''){

        if(mail($to,$subject,$message,$headers))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
     
}

?>
