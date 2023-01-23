@extends("layouts.app")
@section("content")
<div class="container">
    <h1>Benvento nel mio primo sito doeve utilizzo i DB</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$movie["title"]}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Original Title: {{$movie["original_title"]}}</h6>
                  
                  
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$movie["nationality"]}}</li>
                    <li class="list-group-item">{{$movie["date"]}}</li>
                    <li class="list-group-item">{{$movie["vote"]}}/10</li>
                  </ul>
              </div>
            
        </div>
            
        @endforeach
    </div>

</div>

@endsection
