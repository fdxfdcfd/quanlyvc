
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends My_Model {

     public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->table="user";
        }

}

