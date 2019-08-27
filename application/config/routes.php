<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Controller_Quiz';
$route['Home'] = 'Controller_Quiz';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['start-quiz']= 'Controller_Quiz/save_user';
$route['history']= 'Controller_Quiz/history';
$route['getAllQuestions'] = 'Controller_Quiz/getAllQuestions';
$route['save-user-answer'] ='Controller_Quiz/save_user_ans';
$route['submitAnswer/(:num)/(:any)'] = 'Controller_Quiz/submitAnswers/$1/$2';
$route['getQuizResult'] = 'Controller_Quiz/getQuizResult';
$route['getQuizDetails'] = 'Controller_Quiz/getQuizDetails';
$route['showHistory']='Controller_Quiz/getQuizDetails';
$route['getQuizQuestions']='Controller_Quiz/getQuizQuestions';
$route['getQuizQuestions2']='Controller_Quiz/getQuizQuestions2';