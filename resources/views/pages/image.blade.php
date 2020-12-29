@extends('layouts.dashboard')

@section('title', 'Report')

@section('content')
<h1 class="mt-4">Image</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Image</li>
</ol>
<div class="row">
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header">
                Responsensive
            </div>
            <div class="card-body">
                <img src="https://placeimg.com/1000/1000/tech?214" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header">
                Thumbnail
            </div>
            <div class="card-body">
                <img src="https://placeimg.com/200/200/tech?2131" class="img-thumbnail" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
@endsection
