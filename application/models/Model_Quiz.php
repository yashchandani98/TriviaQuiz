<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Quiz extends CI_Model {
  public function save_user_model($data){
		$data['Date_time'] = date("Y-m-d H:i:s");
		$this->db->insert('tbl_users',$data);
  }
  public function getQuizDetails($a){
	$this->db->select('Name');
	$this->db->from('tbl_users');
	$this->db->where('session_id',$a);
	return $this->db->get()->row_array();
  }
  public function getQuizDetailsQuestions($a){
	  $this->db->select('*');
	  $this->db->from('tbl_quiz_session');
	  $this->db->where('Session_id',$a);
	  $this->db->join('tbl_questions','tbl_questions.Pk_id=tbl_quiz_session.Question_id');
	  $data=$this->db->get()->result_array();
	  $returnData=array();
	  $j=0;
	  foreach($data as $value){
		  $questionId=$value['Question_id'];
		  $questionName=$value['Question'];
		  $numberOptions=$value['Options_correct'];
		  $this->db->select('*');
	  	  $this->db->from('tbl_option_chosen');
		  $this->db->where('Session_id',$a);
		  $this->db->where('tbl_option_chosen.Question_id',$questionId);
		  $this->db->join('tbl_options','tbl_options.Option_id=tbl_option_chosen.Option_id');
		  //$this->db->where('Question_correct_id >', 0);
		  $data2=$this->db->get()->result_array();
		  $optionChosen=array();
		  $i=0;
		  foreach($data2 as $value2){
				$optionChosen[$i]=$value2['Option_name'];
				$i++;
		  }
		  $returndata[$j]=array('questionName'=>$questionName,'option'=>$optionChosen);
		  $j++;
	  }
	  echo json_encode($returndata);
  }
  public function getQuizDetailsQuestions2($a){
	  $this->db->select('*');
	  $this->db->from('tbl_quiz_session');
	  $this->db->join('tbl_questions','tbl_questions.Pk_id=tbl_quiz_session.Question_id');
	  $data=$this->db->get()->result_array();
	  $returnData=array();
	  $j=0;
	  foreach($data as $value){
		  $questionId=$value['Question_id'];
		  $questionName=$value['Question'];
		  $numberOptions=$value['Options_correct'];
		  $this->db->select('*');
	  	  $this->db->from('tbl_option_chosen');
		  $this->db->where('Session_id',$a);
		  $this->db->where('tbl_option_chosen.Question_id',$questionId);
		  $this->db->join('tbl_options','tbl_options.Option_id=tbl_option_chosen.Option_id');
		  //$this->db->where('Question_correct_id >', 0);
		  $data2=$this->db->get()->result_array();
		  $optionChosen=array();
		  $i=0;
		  foreach($data2 as $value2){
				$optionChosen[$i]=$value2['Option_name'];
				$i++;
		  }
		  $returndata[$j]=array('questionName'=>$questionName,'option'=>$optionChosen);
		  $j++;
	  }
	  echo json_encode($returndata);
  }
  public function save_user_answer($data){
     $this->db->insert('tbl_user_answer',$data);
  }
  public function getQuestions(){
	  $this->db->select('*');
	  $this->db->from('tbl_questions');
	  $this->db->join('tbl_options','tbl_options.Question_id=tbl_questions.Pk_id');
	  return $this->db->get()->result_array();
  }
  public function submitAnswer($questionId,$answer1Id){
	  $sessionId=$this->session->userdata('session_id');
	  $data=array('Session_id'=>$sessionId,'Question_id'=>$questionId);
	  $this->db->insert('tbl_quiz_session',$data);
	  $answers=explode(',',$answer1Id);
	  foreach($answers as $value){
		$data2=array('Session_id'=>$sessionId,'Question_id'=>$questionId,'Option_id'=>$value);
	  	$this->db->insert('tbl_option_chosen',$data2);
	  }
	  return 1;
  }
}
