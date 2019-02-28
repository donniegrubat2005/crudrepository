<?php

namespace App\Repositories;

interface EmployeeInterface
{
    public function getAll();
    public function getById($id);
    public function paginate();
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
}
