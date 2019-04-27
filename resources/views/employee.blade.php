@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - Employee
				<div class="float-right" id="btn-create">
						<a href="{{ route('employees.create')}}" class="btn btn-success">Create</a>
					</div>
				</div>
                
                <div class="card-body">
                <table class="table table-table">
                        <thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th> 
								<th>Address</th>
                                <th>Created</th>
                                <th>Updated</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
										   
						<tbody>
							@foreach($emps as $emp)
							<tr>

								<td>{{$emp->first_name}}</td>
								<td>{{$emp->last_name}}</td>
								<td>{{$emp->address}}</td>
								<td>{{$emp->created_at}}</td>
								<td>{{$emp->updated_at}}</td>
								<td><a href="/employees/{{ $emp->id }}/edit" class="btn btn-success btn-sm">
								Edit</a></td>
								<td>
									<form action="/employees/{{ $emp->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger btn-sm">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
						</tbody>
				   </table>
                </div>
                <div class="card-footer">
				<div class="pull-right" id="page_link">
						{{ $emps->links() }}
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
