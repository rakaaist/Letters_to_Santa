<?php

namespace App\Controllers;

use App\App;
use App\Controllers\Base\GuestController;
use App\Views\BasePage;
use App\Views\Forms\LoginForm;

class LoginController extends GuestController
{
    protected $form;
    protected $page;

    public function __construct()
    {
        parent:: __construct();
        $this->form = new LoginForm();
        $this->page = new BasePage([
            'title' => 'Login'
        ]);
    }

    public function index()
    {


        if ($this->form->validateForm()) {
            $clean_inputs = $this->form->values();
            App::$session->login($clean_inputs['email'], $clean_inputs['password']);

            if ($clean_inputs['email'] === 'santa@santa.lt' && $clean_inputs['password'] === 'santa') {
                header("location: /santa/messages.php");
            } else {
                header("location: /admin/newWish.php");
            }
        }

        $this->page->setContent($this->form->render());

        return $this->page->render();
    }
}