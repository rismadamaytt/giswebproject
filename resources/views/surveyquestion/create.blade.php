@extends('layouts.app')
  
@section('title', 'Create Question')
  
@section('contents')
    <h1 class="mb-0">Add Question for Survey</h1>
    <hr />
    <form action="{{ route('surveyquestion.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="question" class="form-control" placeholder="Question">
            </div>
        </div>
        <div class="row ml-1">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection