<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'navigator.himeko', 'name' => 'Himeko', 'role' => 'Express Navigator'],
            ['username' => 'senior.welt', 'name' => 'Welt Yang', 'role' => 'Senior Crew Member'],
            ['username' => 'guard.danheng', 'name' => 'Dan Heng', 'role' => 'Archive Keeper'],
            ['username' => 'camera.march7', 'name' => 'March 7th', 'role' => 'Crew Member'],
            ['username' => 'trailblazer', 'name' => 'Caelus', 'role' => 'Trailblazer'],
            ['username' => 'conductor.pom', 'name' => 'Pom-Pom', 'role' => 'Express Conductor'],
        ];

        return view('users/index', [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}
