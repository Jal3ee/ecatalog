<<<<<<< HEAD
<?php

namespace App\Controllers;
use App\Models\User_model;
class Login extends BaseController{
    public function index($pesan = null){
        $data["pesan"] = $pesan;
        return view('Login/index', $data);
    }
    public function cek(){
        // print_r($_POST);
        $username = $this->request->getPost('email-username');
        $pass = $this->request->getPost('password');

        $user = new User_model();
        // $dataUser = $user->find($username);
        $dataUser =$user->where('username', $username)->first();
        if ($dataUser==NULL){
            echo $username;
            echo $dataUser;
            $data["pesan"] = "Username tidak ditemukan";
            return view('Login/index', $data);
        }else{
            if ($pass==$dataUser->password){
                //login berhasil
                $session = session();
                $session_data=[
                    "id" => $dataUser->id,
                    "username" => $dataUser->username,
                    "role" => $dataUser->role
                ];
                $session->set($session_data);
                return redirect()->to(base_url("public/Beranda"));
            }else{
                $data["pesan"]= "Password salah.";
                return view('Login/index', $data);
            }
        }
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url("public/Login"));
    }
=======
<?php

namespace App\Controllers;
use App\Models\User_model;
class Login extends BaseController{
    public function index($pesan = null){
        $data["pesan"] = $pesan;
        return view('Login/index', $data);
    }
    public function cek(){
        // print_r($_POST);
        $username = $this->request->getPost('email-username');
        $pass = $this->request->getPost('password');

        $user = new User_model();
        // $dataUser = $user->find($username);
        $dataUser =$user->where('username', $username)->first();
        if ($dataUser==NULL){
            echo $username;
            echo $dataUser;
            $data["pesan"] = "Username tidak ditemukan";
            return view('Login/index', $data);
        }else{
            if ($pass==$dataUser->password){
                //login berhasil
                $session = session();
                $session_data=[
                    "id" => $dataUser->id,
                    "username" => $dataUser->username,
                    "role" => $dataUser->role
                ];
                $session->set($session_data);
                return redirect()->to(base_url("public/Beranda"));
            }else{
                $data["pesan"]= "Password salah.";
                return view('Login/index', $data);
            }
        }
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url("public/Login"));
    }
>>>>>>> 184ecb88f33cbdbf4bea2742b895c7e30a436860
}