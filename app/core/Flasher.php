<?php
    class Flasher{
        public static function setFlash($pesan, $aksi, $tipe){
            $_SESSION['flash'] = [
                'pesan' => $pesan, 'aksi' => $aksi,'tipe' => $tipe
            ];
        }

        public static function flash(){
            if(isset($_SESSION['flash'])){
                echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>'.$_SESSION['flash']['pesan'].'</strong> '.$_SESSION['flash']['aksi'].'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

              unset($_SESSION['flash']);
            }
        }

        public static function flashReg(){
            if(isset($_SESSION['flash'])){
                echo '<div class="bg-green-400 w-full" role="alert">
                Pengguna <strong>'.$_SESSION['flash']['pesan'].'</strong> '.$_SESSION['flash']['aksi'].'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

              unset($_SESSION['flash']);
            }
        }
    }