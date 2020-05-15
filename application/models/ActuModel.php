  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActuModel extends CI_Model {

    public $table_blog = 'blog';
    public $table_suscribers = 'suscribers';


    // ******************************************************************************
    //                              ACTUALITY METHOODES
    // ******************************************************************************
    public function add($data) {
        return $this -> db -> insert($this -> table_blog, $data);
    }

    public function count_rows() {
        return $this -> db -> table_blog($this -> table_blog) -> countAll();
    }

    public function fetch_data() {
        $query = $this ->db ->query('SELECT * FROM '.$this -> table_blog.' LIMIT 1;');
        if($query != NULL || isset($query)) {
            return $query -> result_array();
        } else {
            return NULL;
        }
    }


    // *********************************************************************************
    //                               SUSCRIBERS METHODES
    // *********************************************************************************
    public function add_suscriber($user_email) {
        return $this -> db -> insert($this -> table_suscribers, $user_email);
    }

    public function fetch_suscribers() {
        $query = $this -> db -> query('SELECT * FROM '.$this -> table_suscribers.' LIMIT 1;');
        if($query != NULL || isset($query)) {
            return $query -> result_array();
        } else {
            return NULL;
        }
    }

   
}