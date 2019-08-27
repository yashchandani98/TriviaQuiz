<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function save_user(){
        $data['Name'] = $this->input->post('user_name',true);
		$data['session_id'] =  rand(1111,9999);
		$this->QuizModel->save_user_model($data);
        $data['session_id'] = $this->session->set_userdata($data);
		$data['questions'] = $this->QuizModel->getQuestions();
      	$this->load->view('play_quiz',$data);
	}
 public function save_user_ans(){
	$data['question_id'] = $this->input->post('question_id',true);
	$data['user_ans'] = $this->input->post('quizid',true);
	$data['session_id']= $this->session->userdata('session_id');
    $this->QuizModel->save_user_answer($data);
 }
}
