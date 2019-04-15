<?php


namespace App\Controllers;

use App\Classes\Mail;


class IndexController extends BaseController
{
    public function show()
    {
        echo 'Burası Ana Baba Günü';
        $mail = new Mail();
        $data = [
            'to' => 'test@example.com',
            'subject' => 'Hoşgeldiniz Biladerim',
            'view'=>'welcome',
            'body'=> 'Test Ediyoruz Email Şablonunu'

        ];

        if ($mail->send($data)) {
            echo 'email Başarıyla Gönderildi';
        } else {
            echo 'email Gönderilemedi';
        }
    }
}