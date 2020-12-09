<?php


namespace App\Controllers;


use App\App;
use App\Views\BasePage;
use App\Views\Forms\ContactForm;
use Core\View;

class AboutController extends \App\Abstracts\Controller
{
    protected $form;
    protected $page;

    public function __construct()
    {
        $this->form = new ContactForm();
        $this->page = new BasePage([
            'title' => 'About Santa',
        ]);
    }

    function index(): ?string
    {
        if ($this->form->validateForm()) {
            $clean_inputs = $this->form->values();
            App::$db->insertRow('messages', $clean_inputs);

            $content = new View([
                'message' => 'Your message is successfully sent!'
            ]);
        } else {
            $content = new View([
                'title' => 'About Santa',
                'form_title' => 'Contact me!',
                'form' => $this->form->render(),
            ]);
        }

        $this->page->setContent($content->render(ROOT . '/app/templates/content/about.tpl.php'));

        return $this->page->render();
    }


}