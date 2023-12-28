<<<<<<< HEAD
<?php 

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowField = ['username,nama,email,role'];

}

=======
<?php 

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowField = ['username,nama,email,role'];

}

>>>>>>> 184ecb88f33cbdbf4bea2742b895c7e30a436860
?>