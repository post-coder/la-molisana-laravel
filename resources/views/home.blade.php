@extends('layouts/main-layout')

@section('content')
<main class="pasta-list">

  <div class="container">
    <div class="row">

      @foreach ($pasta as $singlePasta)
        <div class="col-4 pasta-card">

          <div class="pasta-card-inner">
            <img src="{{$singlePasta['src']}}" alt="immagine pasta">
            {{$singlePasta['titolo']}}
          </div>
        </div>
      @endforeach

    </div>
  </div>
</main>
@endsection