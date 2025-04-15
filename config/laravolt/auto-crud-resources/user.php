<?php

return [
    'label' => 'User',
    'model' => \App\Models\User::class,

    // optional, if you want to override the default Table
    //'table' => \App\Http\Livewire\Table\UserCustomTable::class

    'schema' => [
        [
            'name' => 'name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Lengkap',
        ],
        [
            'name' => 'email',
            'type' => \Laravolt\Fields\Field::EMAIL,
            'label' => 'Email',
        ],
        [
            'name' => 'password',
            'type' => \Laravolt\Fields\Field::PASSWORD,
            'label' => 'Password',
            'show_on_index' => false,
            'show_on_detail' => false,
            'show_on_edit' => false,
        ],
    ],
];

?>