@extends('layouts.dashboard.index')

@section('title', '| Dashboard')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Dashboard</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Olá, <strong>{{ auth()->user()->name }}</strong>.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <chart-pie
                    id="{{ Str::random(20) }}"
                    url="/charts/computers"
                    title="Tipos de Computadores"
                ></chart-pie>
            </div>
            <div class="col-md-12 mt-2">
                <chart-pie
                    id="{{ Str::random(20) }}"
                    url="/charts/patterns"
                    title="Modelos de Computadores"
                ></chart-pie>
            </div>
        </div>
    </div>
</div>
@endsection
