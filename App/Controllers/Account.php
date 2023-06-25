<?php

namespace App\Controllers;

use \App\Models\User;

class Account extends \Core\Controller
{
    /**
     * Validate if email is available (AJAX) for a new signup.
     *
     * @return void
     */
    public function validateEmailAction()
    {
		if(isset($_GET['email'])) {
        $is_valid = ! User::emailExists($_GET['email'],$_GET['ignore_id'] ?? null);
        
        header('Content-Type: application/json');
        echo json_encode($is_valid);
		} else {
			$this->redirect('/settings/index');
		}
    }   
	
	public function validatePasswordAction()
    {	
		if(isset($_GET['oldPassword'])) {
        $is_valid = User::validateOldPassword($_GET['oldPassword'],$_GET['user_id']);
        
        header('Content-Type: application/json');
        echo json_encode($is_valid);
		} else {
			$this->redirect('/settings/index');
		}
    }	

}
