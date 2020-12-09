<?php


namespace App\Views\Forms;


use Core\Views\Form;

class ContactForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'attr' => [
                'method' => 'POST'
            ],
            'fields' => [
                'full_name' => [
                    'label' => 'Full name',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_full_name'
                    ]
                ],
                'phone' => [
                    'label' => 'Your phone no.',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_numeric_values'
                    ]
                ],
                'email' => [
                    'label' => 'Your email',
                    'type' => 'email',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_email'
                    ]
                ],
                'text' => [
                    'label' => 'Your message',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty'
                    ]
                ]
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Contact me!',
                    'type' => 'submit',
                ]
            ]
        ]);
    }
}