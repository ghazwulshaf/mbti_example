@extends('layouts.main')

@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar" class="align-text-bottom"></span>
      This week
    </button>
  </div>
</div>

<h2>Test</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Pertanyaan</th>
        <th scope="col" class="text-center" style="width: 3em">A<br>(TS)</th>
        <th scope="col" class="text-center" style="width: 3em">B</th>
        <th scope="col" class="text-center" style="width: 3em">C</th>
        <th scope="col" class="text-center" style="width: 3em">D</th>
        <th scope="col" class="text-center" style="width: 3em">E</th>
        <th scope="col" class="text-center" style="width: 3em">F</th>
        <th scope="col" class="text-center" style="width: 3em">G<br>(S)</th>
        <th scope="col" class="col-1 text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($questions as $question)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $question->questions }}</td>
          <td class="text-center">{{ $question->a }}</td>
          <td class="text-center">{{ $question->b }}</td>
          <td class="text-center">{{ $question->c }}</td>
          <td class="text-center">{{ $question->d }}</td>
          <td class="text-center">{{ $question->e }}</td>
          <td class="text-center">{{ $question->f }}</td>
          <td class="text-center">{{ $question->g }}</td>
          <td class="text-center"><button class="btn badge btn-primary"><span data-feather="edit"></span></button><button class="btn badge btn-danger ms-1"><span data-feather="trash"></span></button></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<button class="btn btn-sm btn-primary pb-2 float-end"><span data-feather="plus"></span></button>

@endsection
