<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Quiz extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function history(){
		$this->load->view('Include/Header');
		$this->load->view('history');
	}


	public function submitAnswers($questionId,$answerId){
		$response=$this->Model_Quiz->submitAnswer($questionId,$answerId);
		echo $response;
	}

	public function getQuizResult(){
		$this->load->view('Include/Header');
		$this->load->view('quizresult');
	}

	public function getQuizDetails(){
		$name=$this->Model_Quiz->getQuizDetails($this->session->userdata('session_id'));
		echo json_encode($name);
	}

	public function getQuizQuestions(){
		$data=$this->Model_Quiz->getQuizDetailsQuestions($this->session->userdata('session_id'));	
		echo $data;
	}
	
	public function getQuizQuestions2(){
		$data=$this->Model_Quiz->getQuizDetailsQuestions2($this->session->userdata('session_id'));	
		echo $data;
	}

	public function save_user(){
      $data['Name'] = $this->input->post('user_name',true);
	  $data['session_id'] =  rand(1111,9999);
      $this->Model_Quiz->save_user_model($data);
      $data['session_id'] = $this->session->set_userdata($data);
	  $data['questions'] = $this->Model_Quiz->getQuestions();
      $this->load->view('Include/Header');
	  $this->load->view('play_quiz',$data);
	  
	}
 public function save_user_ans(){
	  $data['question_id'] = $this->input->post('question_id',true);
		$data['user_ans'] = $this->input->post('quizid',true);
	   $data['session_id']= $this->session->userdata('session_id');
      $this->Model_Quiz->save_user_answer($data);
 }
 public function getAllQuestions(){
	 $questions=$this->Model_Quiz->getQuestions();
	 echo json_encode($questions);
 }
}
