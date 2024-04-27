<?php
namespace CloudStorage;
// include "mail/mailer.php";
include "autoloader.php";

use CloudStorage\FileSystem\Files\Contracts\Images\Jpeg;
use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;

class Main{
    public function __construct()
    {
        // (new Mail\Mailer())->sendMail();
        // $mailer=new Mail\Mailer();
        $mailer=new Mailer();
        $mailer->sendMail();

        $scanner=new Scanner();
        $scanner->scan();
        $jpeg=new Jpeg();
        $jpeg->getDimension();
    }
}

new Main();
