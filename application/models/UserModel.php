  
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
        
        return  $result;
    }

    public function delete() {
        $this -> db -> where('id', $id);
        return $this -> db -> delete($this -> table);
    }

    public function fetch_all_users() {
        $query = $this -> db -> query('SELECT * FROM ' . $this -> table );
        return $query;
    }

    public function fetch_single_user($id) {
        $this -> db -> where('id', $id);
        $query = $this -> db -> get($this -> table);
        return $query;
    }
}