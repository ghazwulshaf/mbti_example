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

<h2>Pertanyaan</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col" class="text-center" style="width: 3vw">No</th>
        <th scope="col" class="text-center">Kode</th>
        <th scope="col">Pertanyaan</th>
        <th scope="col" class="text-center" style="width: 3vw">A<br>(TS)</th>
        <th scope="col" class="text-center" style="width: 3vw">B</th>
        <th scope="col" class="text-center" style="width: 3vw">C</th>
        <th scope="col" class="text-center" style="width: 3vw">D</th>
        <th scope="col" class="text-center" style="width: 3vw">E</th>
        <th scope="col" class="text-center" style="width: 3vw">F</th>
        <th scope="col" class="text-center" style="width: 3vw">G<br>(S)</th>
        <th scope="col" class="col-1 text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($questions as $question)
        <tr>
          <td class="text-center">{{ $loop->iteration }}</td>
          <td class="text-center">{{ $question->code }}</td>
          <td><textarea class="form-control dash-question" name="{{ $question->code }}" id="{{ 'question'.$loop->iteration }}" cols="50" wrap="hard" disabled>{{ $question->questions }}</textarea></td>
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

<form action="#" method="post">
    <button id="save" class="btn btn-sm btn-success pb-2 float-end" type="submit" disabled><span data-feather="save" class="me-1"></span>Simpan</button>
    <button class="btn btn-sm btn-primary pb-2 me-2 float-end"><span data-feather="plus" class="me-1"></span>Tambah</button>
</form>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pertanyaan</h1>
      </div>
      <form action="/" method="POST">
        @csrf
        <div class="modal-body py-0">
            <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">Kode</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">A<br>(TS)</th>
                    <th scope="col" style="width: 3vw">B</th>
                    <th scope="col" style="width: 3vw">C</th>
                    <th scope="col" style="width: 3vw">D</th>
                    <th scope="col" style="width: 3vw">E</th>
                    <th scope="col" style="width: 3vw">F</th>
                    <th scope="col" style="width: 3vw">G<br>(S)</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td class="text-center"><input type="text" name="code" id="code" class="form-control add-code" size="4"></td>
                      <td><textarea class="form-control add-question" name="question" id="question" cols="50" wrap="hard"></textarea></td>
                      <td class="text-center"><select name="a" id="point_a" class="form-select add-question-point" onchange="addQuestionPoint()">
                        <option value="0" selected>0</option>
                        <option value="6">6</option>
                      </select></td>
                      <td class="text-center"><input type="number" name="b" id="point_b" class="form-control add-question-point" value="1" disabled></td>
                      <td class="text-center"><input type="number" name="c" id="point_c" class="form-control add-question-point" value="2" disabled></td>
                      <td class="text-center"><input type="number" name="d" id="point_d" class="form-control add-question-point" value="3" disabled></td>
                      <td class="text-center"><input type="number" name="e" id="point_e" class="form-control add-question-point" value="4" disabled></td>
                      <td class="text-center"><input type="number" name="f" id="point_f" class="form-control add-question-point" value="5" disabled></td>
                      <td class="text-center"><input type="number" name="g" id="point_g" class="form-control add-question-point" value="6" disabled></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer py-0">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
