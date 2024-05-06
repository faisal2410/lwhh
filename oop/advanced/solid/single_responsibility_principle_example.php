<?php

class Mailer{
    public function sendMail($to, $from, $subject, $message, $attachment){

    }

    public function connectMTA($mtaType, $username, $password){}
    
    public function prepareMail($to, $from, $subject, $message){}

    public function dispatch(){}

}

class BetterMailer{

    public function __construct(MailGatewayInterface $mg, MailInterface $mail, AttachmentInterface $attachment)
    {
        $this->mg=$mg;
        $this->mail=$mail;
        $this->attachment=$attachment;
    }

    public function sendMail($to, $from, $subject, $message, $attachment){
        $this->mail->addAttachment($attachment);
        $mailBody=$this->mail->prepare($to, $from, $subject, $message);
        $this->mg->connect();
        $this->mg->send($mailBody);




    }
}