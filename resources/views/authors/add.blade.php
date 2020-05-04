@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @include('errors.list')
                <form action="{{url('authors')}}" method="POST">
                    @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{old('emaill')}}" aria-describedby="emailHelp">
                         
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">First Name</label>
                        <input type="text" class="form-control" name="first_name"  value="{{old('first_name')}}" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name</label>
                          <input type="text" class="form-control" name="last_name"  value="{{old('last_name')}}" id="exampleInputPassword1">
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
