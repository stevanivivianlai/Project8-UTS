@extends("template.admin.base")
@section('content')

    <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <h4>Edit Data Artikel</h4>
      </div>
            <div class="card-body">
              <form action="{{ url('admin/article', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="" class="control-label">Judul</label>
                    <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                </div>
                <div class="form-group ">
                  <label for="Write" class="control-label">Penulis</label>
                  <input type="text" class="form-control" name="write" value="{{ $article->write }}">
              </div>
                <div class="form-group">
                    <label for="" class="control-label">Deskripsi</label>
                   <textarea class="form-control" style="height: 100px" name="description"> {{ $article->description }}
                    </textarea>
                </div>

               <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection