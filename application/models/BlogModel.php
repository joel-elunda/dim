  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogModel extends CI_Model {

    public $table = 'blog';

    public function add($data) {
        return $this -> db -> insert($this -> table, $data);
    }

    public function count_rows() {
        return $this -> db -> table($this -> table) -> countAll();
    }

    public function fetch_data() {
        $query = $this ->db ->query("SELECT * FROM user LIMIT 1;");
        if($query != NULL || isset($query)) {
            return $query -> result_array();
        } else {
            return NULL;
        }
    }

    public function delele($id) {
        
    }

   
}