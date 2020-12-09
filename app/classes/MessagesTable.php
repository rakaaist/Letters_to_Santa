<?php


namespace App;

use Core\Views\Table;

class MessagesTable extends Table
{

    public function __construct()
    {
        $rows = App::$db->getRowsWhere('messages');

        if (!empty($rows)) {
            foreach ($rows as $row_index => $row) {
                if ($row['email'] === 'santa@santa.lt') {
                    unset($rows[$row_index]);
                }
            }
        }

        parent::__construct([
            'headers' => [
                'Full name',
                'Phone',
                'Email',
                'Message'
            ],
            'rows' => $rows ?? null
        ]);
    }
}