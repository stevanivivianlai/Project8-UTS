@extends("template.admin.base")
@section('content')

    <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <div class="col-md-8">
            <h4>Filter</h4>
         </div>

         <div class="container">
         <div class="card-body">
            <form action="{{url('admin/article/filter')}}" method="post">
               @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama Artikel</label>
                                <input type="text" class="form-control" name="title" value="{{ $title ?? "" }}">
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
                        </form>
                    </div>
                </div>

                <div class="container">
    <div class="card mt-3 pt-3">
    <div class="row ml-1 mr-2 mb-3">
        <div class="col-md-8">
            <h4>Data Artikel</h4>
        </div>
        <div class="col-md-4">
            <a href="{{url('admin/article/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data Artikel</a>
        </div>
    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th width="250px"> Aksi </th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_article as $article)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                        <div class="btn btn-group">

                                        <a href="{{url('admin/article', $article->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>

                                        <a href="{{url('admin/article', $article->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                        @include('template.admin.utils.delete', ['url' =>url('admin/article', $article->id)])
                                    </div>  
                                        </td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->write }}</td>
                                        <td>{{ $article->created_at->diffForHumans() }}</td>
                                        <td>{{ $article->description }}</td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
