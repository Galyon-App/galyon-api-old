<?php
    namespace App\Traits;
    use Storage;

    trait UtilityTrait {

        public function is_serialized($string) {
            $data = @unserialize($string);
            if ($string !== false) {
                return true;
            } else {
                return false;
            }
        }

        public function getFile($fileurl, $path = "others") {

            $domain = env("ERPAT_HOST", "http://localhost:8000");
            $filename = basename($fileurl);

            $fulldir = storage_path( 'app/public/'.$path .'/' );
            if (!file_exists($fulldir)) {
                mkdir($fulldir, 0700, true);
            }
            if (!file_exists( $fulldir.$filename )) {
                $contents = file_get_contents( $fileurl );
                Storage::put('public/'.$path .'/'.$filename, $contents);
            }
            $fileurl = asset('storage/'.$path .'/'.$filename);

            return $fileurl;
        }
    }
