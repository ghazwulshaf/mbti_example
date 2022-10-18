@extends('layouts.main')

@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Report</h1>
</div>

<div class="text-center">
    <h3>{{ $result > 50 ? 'Extrovert' : 'Introvert' }}</h3>

    <div class="w-50" style="position: relative; left: 25%">
        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" style="width: {{ 100 - $result }}%;" aria-valuenow="{{ 100 - $result }}" aria-valuemin="0" aria-valuemax="100">{{ 100 - $result }}%</div>
          <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $result }}%;" aria-valuenow="{{ $result }}" aria-valuemin="0" aria-valuemax="100">{{ $result }}%</div>
        </div>
    </div>

    <div>
      <p>{{ $result > 50 ? 'Memperkenalkan diri ke orang lain merupakan hal yang mudah bagi Anda' : 'Memperkenalkan diri ke orang lain bukan merupakan hal yang mudah bagi Anda' }}</p>
    </div>
</div>

@endsection
