@extends('layouts.app')
  
@section('title', 'Edit Article')
  
@section('contents')
    <h1 class="mb-0">Edit Artikel</h1>
    <hr />
    <form action="{{ route('article.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <div class="mb-3">
                    <img src="{{ asset('storage/images/' . $article->image) }}" class="article-image">
                </div>
                <input type="file" name="image" class="form-control" placeholder="Image" value="{{$article->image }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tittle</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $article->title }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control" placeholder="Content" value="{{ $article->content }}"></textarea>
            </div>
        </div>
        <div class="row ml-1">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection