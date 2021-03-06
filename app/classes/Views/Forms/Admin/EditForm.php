<?php


namespace App\Views\Forms\Admin;


use Core\Views\Form;

class EditForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'fields' => [
                'accessibility' => [
                    'label' => 'Accessibility',
                    'type' => 'select',
                    'options' => [
                        'public' => 'Public',
                        'private' => 'Private'
                    ],
                    'value' => 'public',
                    'validators' => [
                        'validate_select'
                    ]
                ],
                'wish' => [
                    'label' => 'Your wish!',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty'
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Make a wish...'
                        ]
                    ]
                ],
                'url' => [
                    'label' => 'Link to you wish',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Type the link...'
                        ]
                    ]
                ],
                'price' => [
                    'label' => 'Price of your wish',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_numeric_values',
                        'validate_wish_amount'
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Type the price of your wish...'
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Edit your wish!',
                    'type' => 'submit',
                ]
            ],
        ]);
    }
}