<?php

namespace App\Views\Forms;

use Core\Views\Form;

class RegisterForm extends Form
{
    public function __construct()
    {
        parent::__construct(
            [
                'attr' => [
                    'method' => 'POST',
                ],
                'fields' => [
                    'name' => [
                        'label' => 'Name',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_alphabetic_input'
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Name'
                            ]
                        ]
                    ],
                    'surname' => [
                        'label' => 'Surname',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_alphabetic_input'
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Surname'
                            ]
                        ]
                    ],
                    'email' => [
                        'label' => 'Email',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_user_unique',
                            'validate_email'
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Email'
                            ]
                        ]
                    ],
                    'password' => [
                        'label' => 'Password',
                        'type' => 'password',
                        'validators' => [
                            'validate_field_not_empty'
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Password'
                            ]
                        ]
                    ],
                    'password_repeat' => [
                        'label' => 'Repeat password',
                        'type' => 'password',
                        'validators' => [
                            'validate_field_not_empty'
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Repeat password'
                            ]
                        ]
                    ],
                ],
                'buttons' => [
                    'submit' => [
                        'title' => 'Register',
                        'type' => 'submit',
                    ]
                ],
                'validators' => [
                    'validate_fields_match' => [
                        'password',
                        'password_repeat'
                    ]
                ]
            ]
        );
    }
}