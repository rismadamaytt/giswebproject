@extends('layouts.app')
  
@section('title', 'Show Article')
  
@section('contents')
    <h1 class="mb-0">Detail Artikel</h1>
    <hr />
    <div class="row">
        <div class="col mb-3 ">
            <label class="form-label">Image</label> 
            <div>
                <img src="{{ asset('storage/images/' . $article->image) }}" class="article-image">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tittle</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $article->title }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" placeholder="Content" value="{{ $article->content}}" readonly></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $article->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $article->updated_at }}" readonly>
        </div>
    </div>
@endsection