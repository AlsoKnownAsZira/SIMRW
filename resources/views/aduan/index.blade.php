@extends('layouts.template')

@section('content')
    <h1>Data Aduan</h1>
    <a href="{{ route('aduan.create') }}">Create New Aduan</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Status</th>
                <th>NIK Warga</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aduan as $a)
                <tr>
                    <td>{{ $a->id_aduan }}</td>
                    <td>{{ $a->judul }}</td>
                    <td>{{ $a->konten }}</td>
                    <td>{{ $a->status }}</td>
                    <td>{{ $a->NIK_warga }}</td>
                    <td>
                        <a href="{{ route('aduan.show', $a->id_aduan) }}">View</a>
                        <a href="{{ route('aduan.edit', $a->id_aduan) }}">Edit</a>
                        <form action="{{ route('aduan.destroy', $a->id_aduan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
