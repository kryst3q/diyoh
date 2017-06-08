<?php

namespace DiyohBundle\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader {

    private $targetDir;

    public function __construct($targetDir) {
        
        $this->targetDir = $targetDir;
        
    }

    /**
     * @ORM\PreFlush()
     */
    public function upload($files) {
        
        $paths = [];
        
        foreach ($files as $file) {
            
            $path = sha1(uniqid(mt_rand(), true)) . '.' . $file->guessExtension();
            array_push($paths, $path);
            $file->move($this->targetDir, $path);

            unset($file);
        }
        
        return $paths;
    }

//    public function upload(UploadedFile $file)
//    {
//        $fileName = md5(uniqid()).'.'.$file->guessExtension();
//
//        $file->move($this->targetDir, $fileName);
//
//        return $fileName;
//    }

    public function getTargetDir() {
        
        return $this->targetDir;
        
    }

}
