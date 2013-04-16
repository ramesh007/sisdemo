<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Sis\Controller\Index' => 'Sis\Controller\IndexController',
            'Sis\Controller\Student' => 'Sis\Controller\StudentController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'sis' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/sis[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Sis\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'sis' => __DIR__ . '/../view',
        ),
    ),
);