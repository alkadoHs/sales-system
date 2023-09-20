<?php

namespace App\Models;

use CodeIgniter\Model;

class StoreModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'stores';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'mnj_id'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField = 'updated_at';


    // Validation
    protected $validationRules      = [
        'name' => 'required',
        'mnj_id' => 'required',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;


    public function get_stores() {
    return $this->findAll();
   }

   public function get_store(int $id) {
    return $this->where('id', $id)->first();
   }

   public function create_store(array $data) {
    return $this->insert($data);
   }

   public function update_store(array $data) {
    $this->save($data);
   }

   public function delete_store(int $id) {
    $this->delete($id);
   }
}
