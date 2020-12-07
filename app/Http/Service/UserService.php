<?php


namespace App\Http\Service;


use App\Http\Repository\UserRepository;

class UserService
{
    protected $userRepo;

    public function __construct(UserRepository $userRepo)
    {
    $this->userRepo=$userRepo;
    }
    public function getAll(){
        return $this->userRepo->getAll();
    }
}
