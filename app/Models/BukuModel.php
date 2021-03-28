<?php 

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    //protected $primaryKey = 'id'; // tidak perlu karena di basemodel sudah ada
    protected $useTimestamps = true;
    public function getBuku($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug'=>$slug])->first();
    }
}
?>