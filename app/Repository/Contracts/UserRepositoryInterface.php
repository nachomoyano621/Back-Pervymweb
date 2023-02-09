<?php

namespace App\Repository\Contracts;



interface UserRepositoryInterface 
{

    public function store(object $data);
    public function show(int $id);
    public function login($data);
    public function logout($request);
    public function update($request, $user);
    public function destroy(int $id);

 
}
