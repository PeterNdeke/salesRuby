@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @include('errors.list')
                <form action="{{url("books/$book->id")}}" method="POST">
                  {{method_field('PUT')}}
                    @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Author Name</label>
                        <select name="author_name" id="" class="form-control">
                        <option value="{{$book->id}}">{{$book->author->first_name}} {{$book->author->last_name}}</option>
                            @foreach ($author as $item)
                        <option value="{{$item->id}}">{{$item->first_name}} {{$item->last_name}}</option>
                            @endforeach
                           
                        </select>
                         
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Book Title</label>
                        <input type="text" class="form-control" name="book_title"  value="{{$book->book_title}}" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Of Pages</label>
                          <input type="number" class="form-control" name="no_of_pages"  value="{{$book->booK_no_pages}}" id="exampleInputPassword1">
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
