@extends('layouts.template')

@section('content')
    <h1>Create New Aduan</h1>
    <form action="{{ route('aduan.store') }}" method="POST">
        @csrf
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}">
        @error('judul')
            <div>{{ $message }}</div>
        @enderror

        <label for="konten">Konten:</label>
        <textarea id="konten" name="konten">{{ old('konten') }}</textarea>
        @error('konten')
            <div>{{ $message }}</div>
        @enderror

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Dalam Proses" {{ old('status') == 'Dalam Proses' ? 'selected' : '' }}>Dalam Proses</option>
            <option value="Valid" {{ old('status') == 'Valid' ? 'selected' : '' }}>Valid</option>
        </select>
        @error('status')
            <div>{{ $message }}</div>
        @enderror

        <label for="NIK_warga">NIK Warga:</label>
        <input type="text" id="NIK_warga" name="NIK_warga" value="{{ old('NIK_warga') }}">
        @error('NIK_warga')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Create</button>
    </form>
@endsection
