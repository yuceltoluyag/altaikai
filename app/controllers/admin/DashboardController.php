<?php


namespace App\Controllers\Admin;

use App\Classes\Session;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function show()
    {
        Session::add('admin','Merhaba Amdin Kardeş','amdin user');
        ///Session::remove('admin');
        if (Session::has('admin')){
            $msg = Session::get('admin');
        }else {
            $msg = 'Böyle Bir oturum yok yada hata yapmıssın işte...';
        }
        return view('admin/dashboard',['admin'=>$msg]);
    }
}