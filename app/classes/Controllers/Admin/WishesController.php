<?php


namespace App\Controllers\Admin;


use App\App;
use App\Controllers\Base\AuthController;
use App\Views\BasePage;
use App\Views\Forms\Admin\AddForm;
use App\Views\Forms\Admin\EditForm;
use Core\View;

class WishesController extends AuthController
{
    protected $formEdit;
    protected $formAdd;
    protected $pageEdit;
    protected $pageAdd;

    public function __construct()
    {
        parent:: __construct();

        $this->formEdit = new EditForm();

        $this->formAdd = new AddForm();

        $this->pageEdit = new BasePage([
            'title' => 'Edit'
        ]);

        $this->pageAdd = new BasePage([
            'title' => 'Add'
        ]);

    }

    public function indexEdit()
    {
        $id = $_GET['id'] ?? null;
        $row = App::$db->getRowById('wishes', $id);
        unset($row['email']);
        $this->formEdit->fill($row);

        if ($this->formEdit->validateForm()) {
            $clean_inputs = $this->formEdit->values();
            $clean_inputs['email'] = $_SESSION['email'];
            $clean_inputs['status'] = $row['status'];
            App::$db->updateRow('wishes', $id, $clean_inputs);
            header("Location: ../admin/myWishes.php");
            exit();
        }

        $this->pageEdit->setContent($this->formEdit->render());

        print $this->pageEdit->render();
    }

    public function indexAdd()
    {
        if ($this->formAdd->validateForm()) {
            $clean_inputs = $this->formAdd->values();
            $clean_inputs['email'] = $_SESSION['email'];
            $clean_inputs['status'] = 'active';

            App::$db->insertRow('wishes', $clean_inputs);
        }

        $this->pageAdd->setContent($this->formAdd->render());

        return $this->pageAdd->render();
    }

}