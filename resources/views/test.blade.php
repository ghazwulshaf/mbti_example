@extends('layouts.main')

@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Test</h1>
</div>

<h3 class="text-center">Test Kepribadian</h3>

<hr>

<form action="/test" method="POST">
  @csrf

  @foreach ($questions as $question)

  <div id="pertanyaan" class="text-center ">
    <p>{{ $question->questions }}</p>
  </div>

  <div id="pilihan" class="text-center">
    <div class="form-check form-check-inline align-middle option1">
        <input class="form-check-input" type="radio" name="{{ $question->code }}" value="{{ $question->a }}">
        <label class="form-check-label" for="a">Tidak Setuju</label>
    </div>
    <div class="form-check form-check-inline align-middle option2">
        <input class="form-check-input" type="radio" name="{{ $question->code }}" value="{{ $question->b }}">
    </div>
    <div class="form-check form-check-inline align-middle option3">
        <input class="form-check-input" type="radio" name="{{ $question->code }}" value="{{ $question->c }}">
    </div>
    <div class="form-check form-check-inline align-middle option4">
        <input class="form-check-input" type="radio" name="{{ $question->code }}" value="{{ $question->d }}">
    </div>
    <div class="form-check form-check-inline align-middle option3">
        <input class="form-check-input" type="radio" name="{{ $question->code }}" value="{{ $question->e }}">
    </div>
    <div class="form-check form-check-inline align-middle option2">
        <input class="form-check-input" type="radio" name="{{ $question->code }}" value="{{ $question->f }}">
    </div>
    <div class="form-check form-check-inline align-middle option1">
        <input class="form-check-input" type="radio" name="{{ $question->code }}" value="{{ $question->g }}">
        <label class="form-check-label" for="g">Setuju</label>
    </div>
  </div>

  <hr>

  @endforeach

  <div id="aksi" class="container-md mt-4">
      <button type="submit" class="btn btn-secondary float-end"><span data-feather="arrow-right"></span></button>
  </div>

</form>

@endsection
