<?php

namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository implements EmployeeInterface
{
    protected $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function getAll()
    {
        return $this->employee->paginate();
    }

    public function getById($id)
    {
        return $this->findOrFail($id);
    }

    // public function paginate($perPage = 10, $columns = array('*')) {
    //     return $this->employee->paginate($perPage, $columns);
    // }

    public function create(array $attributes)
     {
        return $this->employee->create($attributes);
     }

     public function update($id, array $attributes)
	{
		return $this->employee->findOrFail($id)->update($attributes);
	}
 

     public function delete($id)
     {
        return $this->employee->destroy($id);
     }
}

