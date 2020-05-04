@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <a href="{{url('books/create')}}" class="btn btn-primary">Add A New Book</a>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                           
                            <th scope="col">Author Name</th>
                            <th scope="col">Book Title</th>
                            <th scope="col">Number Of Pages</th>
                            <th scope="col">Edit</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $item)
                            <tr>
                               
                            <td>{{$item->author->first_name}} {{$item->author->last_name}}</td>
                            <td>{{$item->book_title}}</td>
                            <td>{{$item->book_no_pages}}</td>
                            <td><a href="{{url("books/$item->id/edit")}}"> Edit</a>
                            
                            </td>
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
