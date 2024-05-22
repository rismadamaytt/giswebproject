@extends('layouts.app')
  
@section('title', 'Create Article')
  
@section('contents')
    <h1 class="mb-0">Add Article</h1>
    <hr />
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="image" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div  class="row mb-3">
            <div class="col">
                <textarea name="content" class="form-control" placeholder="Content" rows="10"></textarea>
            </div>
        </div>
        <div class="row ml-1 mb-5">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection