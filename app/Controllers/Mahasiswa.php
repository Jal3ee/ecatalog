<<<<<<< HEAD
<?php 

namespace App\Controllers;

use App\Models\User_model;

class Mahasiswa extends BaseController
{
    public function index(){
        // $dataMahasiswa = new \App\Models\ModelMahasiswa();
        $data = [
            'title' => 'Mahasiswa',
            'content' => 'v_home',
        ];
        // $data['dataMahasiswa'] = $dataMahasiswa->orderBy('first_name')->findAll();
        
        return view('layout/template', $data);
    }
    function mahasiswaAjax(){
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $dataMahasiswa = new \App\Models\ModelMahasiswa();
        $data = $dataMahasiswa->searchAndDisplay($search_value, $start, $length);
        $total_count = $dataMahasiswa->searchAndDisplay($search_value);

        $json_data = array(
            'draw' => intval($param['draw']),
            'recordsTotal'=>count($total_count),
            'recordsFiltered' => count($total_count),
            'data' => $data
        );

        echo json_encode($json_data);
    }

    public function simpan(){
        $username = $this->request->getPost("username");
        $nama = $this->request->getPost("nama");
        $email = $this->request->getPost("email");
        $university = $this->request->getPost("role");

        $user = new User_model();
        $dataUser = $user->find($first_name);
        if($dataUser==NULL){
            //tidak boleh
            $dataInsert = array(
                "username"=>$username,
                "nama"=>$nama,
                "email"=>$email,
                "role"=>$role,
            );
            $user->insert($dataInsert);
            echo "success";
        } else {
            //boleh username
            echo "Isi Array: ";
            print_r($user);
            echo "failed";
        }
    }
}

=======
<?php 

namespace App\Controllers;

use App\Models\User_model;

class Mahasiswa extends BaseController
{
    public function index(){
        // $dataMahasiswa = new \App\Models\ModelMahasiswa();
        $data = [
            'title' => 'Mahasiswa',
            'content' => 'v_home',
        ];
        // $data['dataMahasiswa'] = $dataMahasiswa->orderBy('first_name')->findAll();
        
        return view('layout/template', $data);
    }
    function mahasiswaAjax(){
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $dataMahasiswa = new \App\Models\ModelMahasiswa();
        $data = $dataMahasiswa->searchAndDisplay($search_value, $start, $length);
        $total_count = $dataMahasiswa->searchAndDisplay($search_value);

        $json_data = array(
            'draw' => intval($param['draw']),
            'recordsTotal'=>count($total_count),
            'recordsFiltered' => count($total_count),
            'data' => $data
        );

        echo json_encode($json_data);
    }

    public function simpan(){
        $username = $this->request->getPost("username");
        $nama = $this->request->getPost("nama");
        $email = $this->request->getPost("email");
        $university = $this->request->getPost("role");

        $user = new User_model();
        $dataUser = $user->find($first_name);
        if($dataUser==NULL){
            //tidak boleh
            $dataInsert = array(
                "username"=>$username,
                "nama"=>$nama,
                "email"=>$email,
                "role"=>$role,
            );
            $user->insert($dataInsert);
            echo "success";
        } else {
            //boleh username
            echo "Isi Array: ";
            print_r($user);
            echo "failed";
        }
    }
}

>>>>>>> 184ecb88f33cbdbf4bea2742b895c7e30a436860
?>