@extends('layouts.app')
  
@section('title', 'Edit Question')
  
@section('contents')
    <h1 class="mb-0">Edit Question</h1>
    <hr />
    <form action="{{ route('surveyquestion.update', $surveyquestion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Question</label>
                <input type="text" name="question" class="form-control" placeholder="Question" value="{{ $surveyquestion->question }}" >
            </div>
        </div>
        <div class="row ml-1">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection