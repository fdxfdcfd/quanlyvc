
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends MY_Model {

    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->table="calendar";
        }    

}

/* End of file Calendar.php */
