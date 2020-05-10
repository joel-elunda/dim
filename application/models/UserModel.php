  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    public $table = 'user';

    public function add($data) {
        $this -> db -> insert($this -> table, $data);
    }

    public function check_authentification($data) {
        $this -> db -> where($data);
        $query = $this -> db -> get($this -> table);
        $result = $query -> result();
        
        return  $res;
    }
}