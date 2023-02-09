<?php

namespace App\Repository\Contracts;



interface PersonaRepositoryInterface
{

    public function buscarnombre(object $persona);
    public function buscardni(object $persona);
    public function index();
    public function store(array $data);
    public function show(int $id);
    public function edit(int $id);
    public function update($request, $persona);
    public function destroy(int $id);

}
