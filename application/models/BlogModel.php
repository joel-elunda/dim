  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogModel extends CI_Model {

    public $table = 'blog';

    public function add($data) {
        return $this -> db -> insert($this -> table, $data);
    }

    public function count_entries() {
        // return $this -> db -> table($this -> table) -> countAll();
        return $this -> db -> count_all($this -> table);
    }

    public function fetch_data() {
        $query = $this -> db -> query("SELECT * FROM user LIMIT 1;");
        if($query != NULL || isset($query)) {
            return $query -> result_array();
        } else {
            return NULL;
        }
    }

    public function fetch_blog_messages(){
        $query = $this -> db -> get($this -> table);
        return $query;
    }

    public function delele($id) {
        
    }

   
}