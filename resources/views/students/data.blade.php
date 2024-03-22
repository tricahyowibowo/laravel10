@extends('layout.main')

@section('content')
<h3>Data Siswa</h3>
  <div class="p-2">
    <div class="card">
      <div class="card-header">
        <button class="btn btn-primary" onclick="{{ 'students/add' }}">
          <i class="fa fa-solid fa-plus"></i> 
          tambah data siswa
        </button>
      </div>
      <div class="card-body">
        <table class="table table-sm table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Id Siswa</th>
              <th>Nama Siswa</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>No HP</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $row)
            <tr>
              <th>{{ $loop->iteration }}</th>    
              <td>{{ $row->idstudents }}</td> 
              <td>{{ $row->fullname }}</td>          
              <td>{{ $row->gender == 'M' ? 'laki-laki' : 'perempuan' }}</td>          
              <td>{{ $row->address }}</td>          
              <td>{{ $row->emailaddress }}</td>          
              <td>{{ $row->phone }}</td>          
              <td><button class="btn btn-sm btn-danger"><i class="fa fa-solid fa-trash"></i></button></td>          
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection