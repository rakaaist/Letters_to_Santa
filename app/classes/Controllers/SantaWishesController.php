<?php


namespace App\Controllers;


use App\App;
use App\Views\BasePage;
use App\Views\Forms\Admin\StatusForm;
use Core\View;
use Core\Views\Form;

class SantaWishesController extends \App\Abstracts\Controller
{

    public function __construct()
    {
    }

    function index(): ?string
    {
        if (Form::action()) {
            $statusForm = new StatusForm();

            if ($statusForm->validateForm()) {
                $clean_inputs = $statusForm->values();

                $wish = App::$db->getRowById('wishes', $clean_inputs['id']);
                $wish['status'] = $clean_inputs['status'];

                App::$db->updateRow('wishes', $clean_inputs['id'], $wish);
            }
        }

        $wishes = App::$db->getRowsWhere('wishes');

        foreach ($wishes as $id => &$wish) {
            unset($wish['accessibility']);

            $statusForm = new StatusForm();
            $statusForm->fill([
                'id' => $id,
                'status' => $wish['status']
            ]);
            $wish['form'] = $statusForm->render();
        }

        $content = new View(
            [
                'title' => 'Santa Wishes',
                'wishes' => $wishes
            ]
        );
        $page = new BasePage([
            'title' => 'Index',
            'content' => $content->render(ROOT . '/app/templates/content/index.tpl.php')
        ]);
        return $page->render();
    }

}
