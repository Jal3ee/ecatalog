<?php

namespace App\Controllers;
use App\Models\User_model;
class Beranda extends BaseController{
    public function index(){
        $session = session();
        if($session->get('role')==null){
            return redirect()->to(base_url("public/Login"));
        }
        $data = [
            'title' => 'Home',
            'content' => 'v_home',
        ];
        return view('layout/template', $data);
    }
    // public function content(){ //belum copas, ganti nanti
    //     $session = session();
    //     if($session->get('role')==null){
    //         return redirect()->to(base_url("public/Login"));
    //     }
    //     return view('Home/konten');
    // }
    // public function sidebar(){ //belum copas, ganti nanti
    //     $session = session();
    //     if($session->get('role')==null){
    //         return redirect()->to(base_url("public/Login"));
    //     }
    //     return view('Home/sidebar');
    // }
}