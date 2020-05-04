@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @include('errors.list')
                <form action="{{url('books')}}" method="POST">
                    @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Author Name</label>
                        <select name="author_name" id="" class="form-control">
                            @foreach ($author as $item)
                        <option value="{{$item->id}}">{{$item->first_name}} {{$item->last_name}}</option>
                            @endforeach
                           
                        </select>
                         
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Book Title</label>
                        <input type="text" class="form-control" name="book_title"  value="{{old('book_title')}}" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Of Pages</label>
                          <input type="text" class="form-control" name="no_of_pages"  value="{{old('no_of_pages')}}" id="exampleInputPassword1">
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
