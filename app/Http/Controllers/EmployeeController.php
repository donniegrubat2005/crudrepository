<?php

namespace App\Http\Controllers;
use App\Repositories\EmployeeInterface;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $empRepo;

    public function __construct(EmployeeInterface $empRepo)
    {
        $this->empRepo =$empRepo;
    }
   
    public function index()
    {
        $emps = $this->empRepo->Paginate();
        //return $this->empRepo->Paginate();
        return view('employee', compact('emps'));
    }

    
    public function create()
    {
        return view('create');
    }

    
    public function store(Request $request)
    {
        $employees = $this->empRepo->create($request->all());
        return view('employee');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $emps=Employee::findOrFail($id);
        return view('edit',compact('emps'));
    }

    
    public function update(Request $request, $id)
    {
        //$emps = $request->only(['first_name']);
        $emps =$request->all();
		$this->empRepo->update($id, $emps);
       
		return redirect('employees');
    }

    
    public function destroy($id)
    {
        $this->empRepo->delete($id);
        return redirect('employees');
    }
}
