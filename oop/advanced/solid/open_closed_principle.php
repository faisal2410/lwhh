<?php

// Open for extension and closed for modification

// class FileDisplay{
//     public function display($file, $fileType){
//         if('mp4'==$fileType){
//             // display video player
//         }elseif("mp3"==$fileType){
//             // display audio player
//         }
//         elseif("jpg"==$fileType){
//             // display image file
//         }
//         else{
//             // display text file
//         }

//     }

// }

class FileDisplay{
    public function display(FileInterface $file){
        $file->display();


    }
}

interface FileInterface{
    public function display();
}

class ImageFile implements FileInterface{
    public function display(){
        // take necessary steps to display image
    }
}

class VideoFile implements FileInterface{
    public function display(){
        // take necessary steps to display video file
    }
}
class AudioFile implements FileInterface{
    public function display(){
        // take necessary steps to display audio file
    }
}

$image=new ImageFile("abcd.jpg");
$video=new VideoFile("abcd.mp4");
$audio=new AudioFile("abcd.mp3");

$fd=new FileDisplay();
$fd->display($image);
$fd->display($video);
$fd->display($audio);