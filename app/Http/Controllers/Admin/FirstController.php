<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function __construct()
    {
    }

    public function showString()
    {
        return 'Show String Working';
    }
}
