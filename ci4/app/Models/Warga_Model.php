<?php
namespace App\Models;
use CodeIgniter\Model;

class Warga_Model extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'id';
    //protected $primaryKey = 'nik';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'kelamin', 'alamat', 'no_rumah', 'status'];
    public function getwarga($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
    public function savewarga($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function hapuswarga($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
    public function editwarga($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }
}