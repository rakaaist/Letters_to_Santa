<?php


namespace App\Controllers\Admin;


use App\App;
use App\Controllers\Base\AuthController;
use App\MyTable;
use App\Views\BasePage;
use App\Views\Forms\Admin\DeleteForm;
use Core\Views\Form;


class ListController extends AuthController
{
    protected $table;
    protected $page;
    protected $form;

    public function __construct()
    {
        parent:: __construct();

        $this->page = new BasePage([
            'title' => 'MyWishes'
        ]);
    }

    public function index()
    {
        if (Form::action()) {
            $this->form = new DeleteForm();

            if ($this->form->validateForm()) {
                App::$db->deleteRow('wishes', $this->form->values()['row_id']);
            }
        }

        $this->table = new MyTable();

        $this->page->setContent($this->table->render());

        return $this->page->render();
    }
}