@extends('layouts.app')
  
@section('title', 'Show Question')
  
@section('contents')
    <h1 class="mb-0">Detail Question</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Question</label>
            <input type="number" name="question" class="form-control" placeholder="Question" value="{{ $surveyquestion->question }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $surveyquestion->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $surveyquestion->updated_at }}" readonly>
        </div>
    </div>
@endsection