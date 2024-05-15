@extends('layouts.admin')

<link rel="stylesheet" href="../dist/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
@section('title')
 Navigatu Add Event



 @extends('layouts.admin')


 @section('title')
  Navigatu Add Event
 @endsection
 
 
 @section('content')
 
 
 
 @if (session('error'))
 <div class="alert alert-danger">
     {{ session('error') }}
 </div>
 @endif
 <Center>
     <h3 class="text-success"><strong>Add Event</strong></h3>
     </Center>
 <div class="container-lx">
     
     <a href="/watch" class="fw-bold fs-5 btn btn-success"> <i class="fa fa-arrow-left"> </i>Back</a>
     <br>
     <br>
     <div class="row">
 
   <div class="col-12">
 
     <div class="card">
        
         <div class="card-body">
 <form action="/adds" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
         <br>
         <br>
       
 
     </div>
     <label>Title</label></br>
     <input type="text" name="title" id="title" class="form-control" required></br>
     <label>Episode</label></br>
     <textarea type="text" name="episode" id="episode" class="form-control" ></textarea></br>
     <label>Video</label></br>
     <input type="file" name="document[]" id="document" class="form-control" multiple ></br>
     <input type="submit" value="Save" onclick="return confirm('Video Has Been Created')" class="btn btn-success">
 <br>
 <br>
 <br>
 <br>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
 @endsection
 
 
 @section('scripts')
 
 @endsection





@endsection
<script src="../dist/js/player.js"></script>
<script src="../dist/js/jquery.nice-select.min.js"></script>
<script src="../dist/js/mixitup.min.js"></script>
<script src="../dist/js/jquery.slicknav.js"></script>
<script src="../dist/js/owl.carousel.min.js"></script>
<script src="../dist/js/main.js"></script>

@section('scripts')