<?php 

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowField = ['username,nama,email,role'];

}

?>