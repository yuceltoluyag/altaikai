<?php

namespace App\Controllers;

use App\Classes\Mail;

class IndexController extends BaseController
{
    public function show()
    {
        echo 'Burası Ana Baba Günü';

        /**
         * Özel Hata Sayfası İçin Mail Fonksiyonu Eksik Yazıldı
         * Test Edildi : Whoops.
         */
     /* $mail = new Mail();
        if ($mail->send($data)) {
            echo 'email Başarıyla Gönderildi';
        } else {
            echo 'email Gönderilemedi';
        }*/
    }
}
