<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['first_name', 'last_name','username','email','branch_id', 'store_id','is_superuser','is_staff','is_active'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';

    // Validation
    protected $validationRules      = [
        'first_name' =>'required|min_length[3]|max_length[255]',
        'last_name' =>'required|min_length[3]|max_length[255]',
        'username' =>'required|min_length[3]|max_length[255]',
        'email' =>'required|min_length[3]|max_length[255]|valid_email',
        'password' => 'required|min_length[4]|max_length[255]',
        'passconf' => 'required|min_length[4]|max_length[255]|matches[password]',
    ];
    // protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;


    public function login_user($username, $pass) {
        return $this->where('username', $username)->where('password', $pass)->first();
    }

   public function get_users() {
    return $this->findAll();
   }

   public function get_user(int $id) {
    return $this->where('id', $id)->first();
   }

   public function create_user(array $data) {
    return $this->insert($data);
   }

   public function update_user(array $data) {
    $this->save($data);
   }

   public function delete_user(int $id) {
    $this->delete($id);
   }

}
