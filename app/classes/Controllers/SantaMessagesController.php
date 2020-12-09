<?php


namespace App\Controllers;


use App\App;
use App\Controllers\Base\AuthController;
use App\ListTable;
use App\MessagesTable;
use App\MyTable;
use App\Views\BasePage;
use App\Views\Forms\Admin\DeleteForm;
use Core\View;
use Core\Views\Form;
use Core\Views\Link;

class SantaMessagesController extends AuthController
{
    protected $table;
    protected $page;
    protected $form;

    public function __construct()
    {
        parent:: __construct();

        $this->page = new BasePage([
            'title' => 'Messages'
        ]);
    }

    public function index()
    {

        $this->table = new MessagesTable();

        $this->page->setContent($this->table->render());

        return $this->page->render();
    }
}