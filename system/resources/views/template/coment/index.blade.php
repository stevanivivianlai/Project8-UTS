@extends("template.admin.base")
@section('content')
   <div class="container">
    <div class="card mt-3 pt-3">
    <div class="row ml-1 mr-2 mb-3">
      <div class="col-md-8">
        <h4>Komentar</h4>
      </div>
    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Isi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_coment as $comment)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>
                                      <div class="btn-group">
                                        <a href="{{ url('admin/coment', $comment->id) }}" class="btn btn-primary">
                                          <i class="fa fa-comment"></i>
                                      </a>
                                      </div>
                                  </td>
                                  <td>{{ $comment->nama  }}</td>
                                  <td>{{ $comment->created_at->diffForHumans()  }}</td>
                                  <td>{{ $comment->isi }}</td>
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
