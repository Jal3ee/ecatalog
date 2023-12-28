<<<<<<< HEAD
<?php 

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model{
    protected $table = "user";

    function searchAndDisplay($katakunci = null, $start = 0, $length = 0){
        $builder = $this->table("user");
        if ($katakunci){
            $arr_katakunci = explode(" ", $katakunci);
            for ($x=0; $x < count($arr_katakunci); $x++) { 
                $builder = $builder->orLike('username', $arr_katakunci[$x]);
                $builder = $builder->orLike('nama', $arr_katakunci[$x]);
                $builder = $builder->orLike('email', $arr_katakunci[$x]);
                $builder = $builder->orLike('role', $arr_katakunci[$x]);
            }
        }
        if ($start != 0 or $length != 0){
            $builder = $builder->limit($length, $start);
        }
        return $builder->orderBy('username')->get()->getResult();
    }
}

=======
<?php 

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model{
    protected $table = "user";

    function searchAndDisplay($katakunci = null, $start = 0, $length = 0){
        $builder = $this->table("user");
        if ($katakunci){
            $arr_katakunci = explode(" ", $katakunci);
            for ($x=0; $x < count($arr_katakunci); $x++) { 
                $builder = $builder->orLike('username', $arr_katakunci[$x]);
                $builder = $builder->orLike('nama', $arr_katakunci[$x]);
                $builder = $builder->orLike('email', $arr_katakunci[$x]);
                $builder = $builder->orLike('role', $arr_katakunci[$x]);
            }
        }
        if ($start != 0 or $length != 0){
            $builder = $builder->limit($length, $start);
        }
        return $builder->orderBy('username')->get()->getResult();
    }
}

>>>>>>> 184ecb88f33cbdbf4bea2742b895c7e30a436860
?>