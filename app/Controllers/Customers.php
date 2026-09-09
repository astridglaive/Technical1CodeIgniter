<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['name' => 'March 7th', 'email' => 'march7th@astralexpress.space', 'phone' => 'AE-1001'],
            ['name' => 'Dan Heng', 'email' => 'danheng@astralexpress.space', 'phone' => 'AE-1002'],
            ['name' => 'Seele', 'email' => 'seele@wildfire.belobog', 'phone' => 'BL-2041'],
            ['name' => 'Bronya Rand', 'email' => 'bronya@belobog.gov', 'phone' => 'BL-2001'],
            ['name' => 'Jing Yuan', 'email' => 'jingyuan@luofu.alliance', 'phone' => 'XL-3001'],
            ['name' => 'Kafka', 'email' => 'kafka@stellaron.hunters', 'phone' => 'SH-4040'],
        ];

        return view('customers/index', [
            'title'      => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customers,
        ]);
    }
}
