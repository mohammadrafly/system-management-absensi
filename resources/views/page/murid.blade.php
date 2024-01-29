@extends('layout.app')

@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ $title }}</h3>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>UID</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $d)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $d->uid }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->ophone }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
@endsection