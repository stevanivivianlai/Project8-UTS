@extends("template.admin.base")
@section('content')

     <div class="container">
    <div class="card mt-3 pt-3">
    <div class="row ml-1 mr-2 mb-3">
      <h4>Detail Data Artikel</h4>
    </div>
            <div class="card-body">
              <h3>{{ $article->title }}</h3>
              <p> Writer : <strong> {{ $article->penulis->username }}</strong>
              </p>
              <hr>
              <p>{{ $article->description }}
              {{ $article->write }}
              
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
