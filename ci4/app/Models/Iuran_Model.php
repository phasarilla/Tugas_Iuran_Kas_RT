<?php
namespace App\Models;
use CodeIgniter\Model;

class Iuran_Model extends Model
{
    protected $table = 'iuran';
    //protected $primaryKey = 'id';
    //protected $primaryKey = 'nik';
   //protected $useAutoIncrement = true;
    //protected $allowedFields = ['nama', 'kelamin', 'alamat', 'no_rumah', 'status'];
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id','keterangan', 'tanggal', 'bulan', 'tahun', 'jumlah', 'warga_id'];
    protected $db;
    public function getiuran($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
    public function saveiuran($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function hapusiuran($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}