@extends('layout.template')

@section('content')
    <!-- Basic Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
    </nav>
    <!-- Basic Breadcrumb -->
@endsection
