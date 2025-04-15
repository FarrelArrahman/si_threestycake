<?php

return [
    'label' => 'Product',
    'model' => \App\Models\Product::class,

    // optional, if you want to override the default Table
    //'table' => \App\Http\Livewire\Table\UserCustomTable::class

    'schema' => [
        [
            'name' => 'name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Produk',
        ],
    ],
];

?>