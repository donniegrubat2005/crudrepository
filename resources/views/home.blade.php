@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - Users</div>

                <div class="card-body">
                <table class="table table-table">
                        <thead>
							<tr>
								<th>Name</th>
								<th>Email Address</th>
                                <th>Created</th>
								<th>Updated</th>
							</tr>
						</thead>
						@foreach($users as $user)
						<tbody>
							<tr>

								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
                                <td>{{ $user->created_at}}</td>								
                                <td>{{ $user->updated_at}}</td>
							</tr>

						</tbody>
						@endforeach
					</table>
                </div>
                <div class="card-footer">
				<div class="pull-right" id="page_link">
						{{ $users->links() }}
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
