<?php
$plotsAcfArray = array(
    'key' => 'group_6206ba3bdecf1',
    'title' => 'Działka',
    'fields' => array(
        array(
            'key' => 'field_620776ad5cd45',
            'label' => 'Inwestycja',
            'name' => 'investition',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                // 'Mielno Marina' => 'Mielno Marina',
                // 'Enklawa Dziwnówek' => 'Enklawa Dziwnówek',
                // 'Osada Dziwnówek' => 'Osada Dziwnówek',
                // 'Enklawa Jarosławiec' => 'Enklawa Jarosławiec',
                // 'Osada Jaworek' => 'Osada Jaworek',
                'Ostoja Kładno' => 'Ostoja Kładno',
                'Osada Karwia' => 'Osada Karwia',
            ),
            'return_format' => 'array',
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_6206ba4e818a5',
            'label' => 'Sektor',
            'name' => 'sector',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                '' => '',
                // 'A' => 'A',
                // 'B' => 'B',
                // 'C' => 'C',
                // 'D' => 'D',
                // 'E' => 'E',
                // 'F' => 'F',
                // 'G' => 'G',
                // 'H' => 'H',
                // 'I' => 'I',
                // 'J' => 'J',
                // 'K' => 'K',
                // 'L' => 'L',
                // 'M' => 'M',
                // 'N' => 'N',
                // 'O' => 'O',
                // 'P' => 'P',
                // 'R' => 'R',
                // 'S' => 'S',
                // 'T' => 'T',
                // 'U' => 'U',
                // 'W' => 'W',
                // 'Y' => 'Y',
                // 'Z' => 'Z'
            ),
            'return_format' => 'array',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_6206ba5f818a6',
            'label' => 'Nr działki',
            'name' => 'plotNr',
            'type' => 'number',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_6206babe9c12a',
            'label' => 'Typ działki',
            'name' => 'plot_type',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                // 'budowlana' => 'Budowlana',
                // 'rolna-rekreacyjna' => 'Rolna / Rekreacyjna',
                // 'rolna' => 'Rolna',
                // 'rekreacyjna' => 'Rekreacyjna'
                'rolna-pod-domek-na-zgloszenie' => 'Rekreacyjna/pod domek na zgłoszenie',
            ),
            'return_format' => 'array',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_6206bad09c12b',
            'label' => 'Status',
            'name' => 'status',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'wolna' => 'Wolna',
                'zarezerwowana' => 'Zarezerwowana',
                'sprzedana' => 'Sprzedana',
            ),
            'return_format' => 'array',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_6206bad99c12c',
            'label' => 'Cena netto',
            'name' => 'priceNetto',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_6206bae59c12d',
            'label' => 'Powierzchnia',
            'name' => 'area',
            'type' => 'number',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_6206bafd9c12e',
            'label' => 'Rabat',
            'name' => 'discount',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'plots',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'the_content',
        1 => 'excerpt',
        2 => 'discussion',
        3 => 'comments',
        4 => 'author',
        5 => 'format',
        6 => 'page_attributes',
        7 => 'featured_image',
        8 => 'categories',
        9 => 'tags',
        10 => 'send-trackbacks',
    ),
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
);

?>