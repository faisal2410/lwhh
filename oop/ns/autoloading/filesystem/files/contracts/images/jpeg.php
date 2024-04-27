<?php
namespace CloudStorage\FileSystem\Files\Contracts\Images;
use CloudStorage\FileSystem\Files\Contracts\ImageContract;

class Jpeg implements ImageContract{
    public function getDimension()
    {
        echo "Dimension 100x100 \n";
    }

}