<?php


namespace App;


use App\Views\Forms\Admin\DeleteForm;
use Core\Views\Link;
use Core\Views\Table;

class MyTable extends Table
{

    public function __construct()
    {
        $rows = App::$db->getRowsWhere('wishes', ['email' => $_SESSION['email']]);

        foreach ($rows as $row_id => &$row) {
            unset($row['accessibility']);
            unset($row['url']);
            unset($row['email']);

            $link = new Link([
                'link' => "/admin/edit.php?id=$row_id",
                'text' => 'Edit'
            ]);

            $form = new DeleteForm();

            $form->fill(['row_id' => $row_id]);
            $row['link'] = $link->render();
            $row['delete'] = $form->render();
        }

        parent::__construct([
            'headers' => [
                'Wish',
                'Value',
                'Edit',
                'Delete'
            ],
            'rows' => $rows
        ]);
    }
}