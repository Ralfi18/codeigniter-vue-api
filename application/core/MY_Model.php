<?php
class MY_Model extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getAll($table = null, $select = false, $selection = ''){
    if ($table) {
      if ($select && $selection) {
        $this->db->select($selection);
        $query = $this->db->get($table);
        return $query->result();
      }
      $query = $this->db->get($table);
      return $query->result();
    }
  }
}
