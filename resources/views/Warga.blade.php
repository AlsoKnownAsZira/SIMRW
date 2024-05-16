@extends('layouts.template')

@section('content')
    <style>
        .card {
            background-color: #FFA755; /* Change the base color of the card */
        }

        .card.map-card {
            background-color: initial; /* Remove the color of the map card */
        }

        .card-category {
            color: white; /* Change the color of the card category to white */
        }

        .card-title {
            color: white; /* Change the color of the card category to white */
        }

        .card-title-map {
            color: rgb(0, 0, 0); /* Change the color of the card category to white */
        }

        .content {
            background-color: #F4F3EF
        }
    </style>
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning" style="margin-top: 20px;">
                                    <i class="fa-solid fa-address-card" style="color: white; font-size: 50px;"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Penduduk</p>
                                    <p class="card-title">2000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning" style="margin-top: 20px;">
                                    <i class="fa-solid fa-money-bill" style="color: white; font-size: 50px;"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Anggaran</p>
                                    <p class="card-title">RP 12345</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning" style="margin-top: 20px;">
                                    <i class="fa-solid fa-warehouse" style="color: white; font-size: 50px;"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Inventori</p>
                                    <p class="card-title">23</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning" style="margin-top: 20px;">
                                    <i class="fa-solid fa-envelope" style="color: white; font-size: 50px;"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Surat Masuk</p>
                                    <p class="card-title">72</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card map-card">
                    <div class="card-header">
                        <h5 class="card-title-map">PETA RW 5</h5>
                    </div>
                    <div class="card-body">
                        <div id="map" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
