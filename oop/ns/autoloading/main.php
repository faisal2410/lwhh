<?php
namespace CloudStorage;
include "mail/mailer.php";

class Main{
    public function __construct()
    {
        (new Mail\Mailer())->sendMail();

    }
}

new Main();
