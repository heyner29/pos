<?php

return [

    /*
     * Establecer el tema HTML para los componentes
     * Como alertas, campos de formulario, menús, etc.
     */
    'theme'  => 'bootstrap',

    /*
     * Establezca la carpeta para almacenar las plantillas personalizadas
     */
    'custom' => 'themes',

    /*
     * Establecer en false para desactivar el componente AccessHandler
     * Haciendo esto, el componente funcionará ligeramente más rápido pero
     * Los controladores registrados y de roles no estarán disponibles
     */
    'control_access' => true,

    /*
     * Establecer en false para desactivar el Traductor para la alerta y el menú
     * Componentes, lo que hará que se ejecute un poco más rápido, pero no
     * Buscará las llaves Lang para traducir textos.
     *
     * Nota: el FieldBuilder utilizará siempre el traductor
     * Para buscar nombres de atributos y otros textos,
     * Independientemente de este valor de configuración.
     */
    'translate_texts' => true,

    /*
     * Establecer en true para desactivar la validación de formularios HTML5
     * Y probar la validación del backend
     */
    'novalidate' => false,

    /*
     * Especificar las abreviaturas de los atributos del campo de formulario
     */
    'abbreviations' => [
        'ph' => 'placeholder',
        'max' => 'maxlength',
        'tpl' => 'template'
    ],

    /*
     * Establecer la configuración para cada tema
     */
    'themes' => [
        'bootstrap' => [
            'field_templates' => [
                // type => template
                'checkbox' => 'checkbox',
                'checkboxes' => 'collections',
                'radios' => 'collections'
            ],
            'field_classes' => [
                // type => class or classes
                'default' => 'form-control',
                'checkbox' => '',
                'error' => 'input-with-feedback'
            ],
        ]
    ]

];
