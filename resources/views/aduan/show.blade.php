@extends('layouts.template')

@section('content')
    <h1>Detail Aduan</h1>
    <p>Judul: {{ $aduan->judul }}</p>
    <p>Konten: {{ $aduan->konten }}</p>
    <p>Status: {{ $aduan->status }}</p>
    <p>NIK Warga: {{ $aduan->NIK_warga }}</p>
@endsection
