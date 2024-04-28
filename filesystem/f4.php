<?php
// mkdir("test1");
mkdir("test1/d1/d2/d3",0777,true);
file_put_contents("test1/f.txt","hello");
file_put_contents("test1/d1/f.txt","hello");
file_put_contents("test1/d1/d2/f.txt","hello");
file_put_contents("test1/d1/d2/f2.txt","hello");
sleep(10);

// mkdir("test1",0777,true);
// file_put_contents("test1/f.txt","hello");
// sleep(5);

// unlink("test1/f.txt");
// rmdir("test1");

deleteDir(getcwd() . DIRECTORY_SEPARATOR . "test1");

function deleteDir($path)
{
    if(!is_readable($path)){
        return;
    }
    // print_r(scandir($path));
    $filesInPath = scandir($path);
    if (count($filesInPath) > 2) {
        // not empty

        foreach ($filesInPath as $file) {
            if("."!=$file && ".."!=$file){

                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                if(is_dir($filePath)){
                    deleteDir($filePath);
                }else{

                    unlink($filePath);
                }
            }
        }
    }

    rmdir($path);
}
