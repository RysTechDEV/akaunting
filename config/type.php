<?php

use App\Models\Document\Document;

return [

    // Documents
    Document::INVOICE_TYPE => [
        'alias' => '', // core empty but module write own alias
        'group' => 'sales', // controller folder name for permission and route
        'route' => [
            'prefix'    => 'invoices', // core use with group + prefix, module ex. estimates
            'paramater' => 'invoice', // sales/invoices/{parameter}/edit
            //'create' => 'invoices.create', // if you change route, you can write full path
        ],
        'permission' => [
            'prefix' => 'invoices', // this controller file name.
            //'create' => 'create-sales-invoices', // if you change action permission key, you can write full permission
        ],
        'translation' => [
            'prefix'    => 'invoices', // this translation file name.
            'add_contact' => 'general.customers', //
            'issued_at' => 'invoices.invoice_date',
            'due_at' => 'invoices.due_date',
        ],
        'contact_type' => 'customer', // use contact type
        'hide' => [], // for document items
    ],

    Document::BILL_TYPE => [
        'alias' => '',
        'group' => 'purchases',
        'route' => [
            'prefix'    => 'bills',
            'paramater' => 'bill',
            //'create' => 'bilss.create',
        ],
        'permission' => [
            'prefix' => 'bills',
            //'create' => 'create-purchases-bills',
        ],
        'translation'     => [
            'prefix'    => 'bills',
            'issued_at' => 'bills.bill_date',
            'due_at'    => 'bills.due_date',
        ],
        'contact_type' => 'vendor',
        'hide' => [],
    ],

    // Contacts
    'customer' => [
        'group' => 'sales',
        'permission' => [
            'prefix' => 'customers',
            //'create' => 'create-sales-customers',
        ],
    ],

    'vendor' => [
        'group' => 'purchases',
        'permission' => [
            'prefix' => 'vendors',
            //'create' => 'create-purchases-vendors',
        ],
    ],

    // Transactions
    'income' => [
        'group' => 'sales',
        'permission' => [
            'prefix' => 'revenues',
            //'create' => 'create-sales-revenues',
        ],
        'contact_type' => 'customer',
    ],

    'expense' => [
        'group' => 'purchases',
        'permission' => [
            'prefix' => 'payments',
            //'create' => 'create-purchases-payments',
        ],
        'contact_type' => 'vendor',
    ],
];
