<?php
    namespace App\Traits;
    use App\Models\User;
    use Storage;

    trait UserTrait {

        public function accessOnGalyon($user_id) {
            $is_admin = (new User())->has_galyon( $user_id );
            $has_access = (new User())->has_galyon( $user_id );
            return $is_admin || $has_access;
        }

        public function getAvatar($user_image) {

            $domain = env("ERPAT_HOST", "http://localhost:8000");
            if($user_image) {
                $avatar = unserialize($user_image);
                $filename = $avatar["file_name"];
                $fileurl = $domain."/files/profile_images/";
            } else {
                $filename = "avatar.jpg";
                $fileurl = $domain."/assets/images/";
            }
            $image_url = $fileurl.$filename; //backup

            $fulldir = storage_path( 'app/public/avatars/' );
            if (!file_exists($fulldir)) {
                mkdir($fulldir, 0700, true);
            }
            if (!file_exists( $fulldir.$filename )) {
                $contents = file_get_contents( $fileurl.$filename );
                Storage::put('public/avatars/'.$filename, $contents);
            }
            $image_url = asset('storage/avatars/'.$filename);

            return $image_url;
        }
    }
