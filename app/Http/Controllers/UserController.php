<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    protected $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }
}
