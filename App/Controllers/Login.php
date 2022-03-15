<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;
use \App\Auth;
use \App\Flash;

/**
 * Login controller
 *
 * PHP version 8.0
 */
class Login extends \Core\Controller
{

    public function indexAction()
    {
        if(Auth::isLoggedIn()) {
			$this->redirect('/menu/index');
		} else {
        View::renderTemplate('Login/index.html');
		}
    }

    public function createAction()
    {
		if(isset($_POST['email'])) {
			$user = User::authenticate($_POST['email'], $_POST['password']);
			
			$remember_me = isset($_POST['remember_me']);

			if ($user) {

				Auth::login($user, $remember_me);

				Flash::addMessage('Login successfully.');

				$this->redirect(Auth::getReturnToPage());

			} else {

				Flash::addMessage('Invalid e-mail or password.', Flash::DANGER);

				View::renderTemplate('Login/index.html', [
					'email' => $_POST['email'],
					'remember_me' => $remember_me
				]);
			}
		} else {
			$this->redirect('/login/index');
		}
    }

    public function destroyAction()
    {
        Auth::logout();

        $this->redirect('/login/show-logout-message');
    }

    public function showLogoutMessageAction()
    {
        Flash::addMessage('Logout successfully.');

        $this->redirect('/');
    }
}
