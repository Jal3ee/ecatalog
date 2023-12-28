<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\User_model;
class Register extends BaseController{
    // function __construct()
    // {
    //     $this->model = new \App\Models\User_model();
    // }
    public function index($pesan = null){
        helper(['form']);
        $dataDB = [];
        $data["pesan"] = $pesan;
        return view('Register/index', $data);
    }
    public function cek(){
        // print_r($_POST);
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');
        $nama = $this->request->getPost('nama');

        $user = new User_model();
        $dataUser = $user->find($username);
        $dataUser2 = $user->find($email);
        if ($dataUser!=NULL || $dataUser2!=NULL){
            $data["pesan"] = "Username/Email sudah dipakai";
            return view('Register/index', $data);
        }else{

            $dataDB = [
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'nama' => $nama,
                'role' => 'member'
            ];

            $user->save($dataDB);

            $data["pesan"]= "Registrasi berhasil.";
                return view('Login/index', $data);
        } 
        }
    }
    
