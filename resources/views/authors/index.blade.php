@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <a href="{{url('authors/create')}}" class="btn btn-primary">Add A New Author</a>

                <div class="card-body">
                    @include('partials.flash')

                    <table class="table">
                        <thead>
                          <tr>
                           
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $item)
                            <tr>
                               
                            <td>{{$item->first_name}}</td>
                            <td>{{$item->last_name}}</td>
                            <td>{{$item->email}}</td>
                              </tr> 
                            @endforeach
                        
                        
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
