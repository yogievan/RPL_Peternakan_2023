@extends('Layouts.template')
@section('title','Dashboard')
@section('menu')
    <ul class="nav">
        <li class="active ">
            <a href="/dashboard/pabrik">
                <i class="fa-solid fa-house"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="#permintaan pakan">
                <i class="fa-solid fa-dolly"></i>
                <p>Permintaan Pakan</p>
            </a>
        </li>
    </ul>
@endsection
@section('pages_title', 'Dashboard Pabrik')
@section('contents')
@php
    $date = date('D, d M Y');
@endphp
@section('contents')
@php
    $date = date('D, d M Y');
@endphp
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <img src="../assets/img/cow-silhouette.png" alt="sapi" height="50px" width="50px">
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Data Ternak Sapi</p>
                                <p class="card-title"><b>Data</b><p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <img src="../assets/img/quail-bird-shape.png" alt="puyuh" height="50px" width="50px">
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Data Ternak Puyuh</p>
                                <p class="card-title"><b>Data</b><p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <img src="../assets/img/chicken-looking-right.png" alt="ayam" height="50px" width="50px">
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Data Ternak Ayam/Bebek</p>
                                <p class="card-title"><b>Data</b><p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <img src="../assets/img/goat.png" alt="puyuh" height="50px" width="50px">
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Data Ternak Kambing</p>
                                <p class="card-title"><b>Data</b><p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <img src="../assets/img/goat.png" alt="puyuh" height="50px" width="50px">
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Data Ternak Kambing</p>
                                <p class="card-title"><b>Data</b><p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
