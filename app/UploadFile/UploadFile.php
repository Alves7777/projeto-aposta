<?php

declare(strict_types=1);

namespace App\UploadFile;

class UploadFile
{
    public static function uploadPhoto(array $photo): string
    {
        $filename = '/photos/fotos-'.date('Ymd-His').$photo['name'];
        $path = dirname(__DIR__,2).'/public/'.$filename;

        move_uploaded_file($photo['tmp_name'], $path);

        return $filename;
    }

    public static function removePhoto(string $filename): void
    {
        unlink(dirname(__DIR__, 2).'/public'.$filename);
    }
}

