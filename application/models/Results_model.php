<?php
class Results_model extends MY_Model {
  public function __construct()
  {
    parent::__construct();
  }

  public function getResultForUser($userID = null, $testID = null) {
    $rules = array('userID' => $userID, 'testID' => $testID);
    $this->db->where( $rules);
    $query = $this->db->get('results');

    return $query->result();
  }
}
