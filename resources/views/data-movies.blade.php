@extends('layout.template')

@section('title', 'Data Movie')

@section('content')

<h1>Data Master Movie</h1>
<a href="/movies/create" class="btn btn-danger">Input New Movie</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Kategori</th>
        <th scope="col">Tahun</th>
        <th scope="col">Pemain</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $movie->judul }}</td>
            <td>{{ $movie->category->nama_kategori }}</td>
            <td>{{ $movie->tahun }}</td>
            <td>{{ $movie->pemain }}</td>
            <td class="text-nowrap">
                <a href="/movie/{{ $movie['id'] }}/edit" class="btn btn-warning">Edit</a>
                <a href="/movie/delete/{{ $movie->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
    <div class="d-flex justify-content-center">
        {{ $movies->links() }}
    </div>
@endsection