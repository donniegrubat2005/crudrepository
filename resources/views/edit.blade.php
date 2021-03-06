@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Employee</div>
                <div class="card-body">
                <form action="/employees/{{ $emps->id }}" method="post">
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
                <!-- <input type="hidden" name="user_id" value="{{ Auth::user()->id}}"> -->
                <div class="formgroup">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" value="{{ $emps->first_name }}" class="form-control">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" value="{{ $emps->last_name }}" class="form-control">
                <label for="address">Address</label>
                <textarea name="address" class="form-control" cols="30" rows="10">{{ $emps->address }}</textarea>
                </div>
                <div class="btnsubmit">
                <input type="submit" class="btn btn-success float-right">
                </div>
                </form>
                </div>
                <div class="card-footer">
				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection