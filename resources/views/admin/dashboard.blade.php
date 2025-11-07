@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
<style>
    <style>
    body {
        background-color: #1e1e2f;
        color: #f1f1f1;
    }

    .content-wrapper,
    .box,
    .box-header,
    .box-body {
        background-color: #2a2a40 !important;
        color: #f1f1f1 !important;
    }

    .small-box {
        color: #fff !important;
    }

    .bg-aqua {
        background-color: #005f73 !important;
    }

    .bg-green {
        background-color: #0a9396 !important;
    }

    .bg-yellow {
        background-color: #ca6702 !important;
    }

    .bg-red {
        background-color: #ae2012 !important;
    }

    .small-box-footer {
        color: #ccc !important;
        background: rgba(255, 255, 255, 0.05);
    }

    .box-title {
        color: #fff;
    }

    .active {
        color: #fff;
    }

    .chart canvas {
        background-color: #1e1e2f;
    }
    .small-box {
        border-radius: 16px;
        padding: 16px;
        transition: 0.3s;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        background: #2a2a40;
        color: #fff;
        position: relative;
    }

    .small-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.3);
    }

    .box-dark    { background-color: #2c2f48; }
    .box-indigo  { background-color: #4f46e5; }
    .box-purple  { background-color: #7c3aed; }
    .box-red     { background-color: #b91c1c; }

    .small-box .icon {
        font-size: 50px;
        position: absolute;
        top: 10px;
        right: 15px;
        color: rgba(255, 255, 255, 0.2);
    }

    .small-box .small-box-footer {
        color: #bbb;
        background: rgba(255, 255, 255, 0.05);
        display: block;
        margin-top: 10px;
        padding: 6px 12px;
        border-radius: 8px;
        text-align: center;
    }

    .small-box .inner h3,
    .small-box .inner p {
        margin: 0;
    }
</style>

</style>
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box box-dark">
            <div class="inner">
                <h3>{{ $kategori }}</h3>

                <p>Total Kategori</p>
            </div>
            <div class="icon">
                <i class="fa fa-cube"></i>
            </div>
            <a href="{{ route('kategori.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $produk }}</h3>

                <p>Total Produk</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="{{ route('produk.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $member }}</h3>

                <p>Total Member</p>
            </div>
            <div class="icon">
                <i class="fa fa-id-card"></i>
            </div>
            <a href="{{ route('member.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $supplier }}</h3>

                <p>Total Supplier</p>
            </div>
            <div class="icon">
                <i class="fa fa-truck"></i>
            </div>
            <a href="{{ route('supplier.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

@endsection

