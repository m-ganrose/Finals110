@extends('layouts.admin')

<link rel="stylesheet" href="../dist/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="../dist/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="../dist/css/plyr.css" type="text/css">
<link rel="stylesheet" href="../dist/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="../dist/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="../dist/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="../dist/css/style.css" type="text/css">

@section('title')
Delete Event
@endsection

@section('content')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<center>
    <h3 class="text-danger"><strong>Delete Event</strong></h3>
</center>

<div class="container-lx">
    <a href="/watch" class="fw-bold fs-5 btn btn-success">
        <i class="fa fa-arrow-left"></i> Back
    </a>
    <br><br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('movies.destroy', $anime->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <br><br>
                        
                        <p>Are you sure you want to delete the event titled <strong>{{ $anime->title }}</strong>?</p>
                        
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this video?')" class="btn btn-danger">
                        <br><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script src="../dist/js/player.js"></script>
<script src="../dist/js/jquery.nice-select.min.js"></script>
<script src="../dist/js/mixitup.min.js"></script>
<script src="../dist/js/jquery.slicknav.js"></script>
<script src="../dist/js/owl.carousel.min.js"></script>
<script src="../dist/js/main.js"></script>

@section('scripts')
@endsection
