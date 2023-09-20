<?php

namespace App\Models;

use CodeIgniter\Model;

class BranchModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'branch';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $protectFields    = true;
    protected $allowedFields    = ['name','mnj_id'];

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
    // protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;


   public function get_branches() {
    return $this->findAll();
   }

   public function get_branch(int $id) {
    return $this->where('id', $id)->first();
   }

   public function create_branch(array $data) {
    return $this->insert($data);
   }

   public function update_branch(array $data) {
    $this->save($data);
   }

   public function delete_branch(int $id) {
    $this->delete($id);
   }

}
