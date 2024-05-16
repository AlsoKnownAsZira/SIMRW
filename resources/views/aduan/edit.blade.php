@extends('layouts.template')

@section('content')
    <h1>Edit Aduan</h1>
    <form action="{{ route('aduan.update', $aduan->id_aduan) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul', $aduan->judul) }}">
        @error('judul')
            <div>{{ $message }}</div>
        @enderror

        <label for="konten">Konten:</label>
        <textarea id="konten" name="konten">{{ old('konten', $aduan->konten) }}</textarea>
        @error('konten')
            <div>{{ $message }}</div>
        @enderror

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Dalam Proses" {{ old('status', $aduan->status) == 'Dalam Proses' ? 'selected' : '' }}>Dalam Proses</option>
            <option value="Valid" {{ old('status', $aduan->status) == 'Valid' ? 'selected' : '' }}>Valid</option>
        </select>
        @error('status')
            <div>{{ $message }}</div>
        @enderror

        <label for="NIK_warga">NIK Warga:</label>
        <input type="text" id="NIK_warga" name="NIK_warga" value="{{ old('NIK_warga', $aduan->NIK_warga) }}">
        @error('NIK_warga')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Update</button>
    </form>
@endsection
