<?php

namespace Tests;

use App\Admin;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Hash;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function loginAdmin() {
        $admin = Admin::create([
            'name' => 'm1@app.com',
            'email' => 'm1@app.com',
            'password' => Hash::make('12345678')
        ]);
        $this->actingAs($admin);
    }
}
