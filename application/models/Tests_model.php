<?php
class Tests_model extends MY_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function getSelectedTest($user = null, $testID = null, $question = null) {
    $this->db->select('*');
    $this->db->from('tests');
    $whereArr = ['tests.ID' => $testID, 'tests.userID' => $user];
    $this->db->where($whereArr);
    $this->db->join('quetsions', 'tests.ID = quetsions.testID');
    // $this->db->where_in('quetsions.ID', $question);
    // $this->db->join('varinats', 'quetsions.ID = varinats.questionID');
    $query = $this->db->get();
    return $query->result();
  }

  public function add_test($data = null) {
    if (!$data) { return ; }
    return $this->db->insert('tests', $data);
  }
}
