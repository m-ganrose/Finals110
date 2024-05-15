@extends('layouts.user')

<link rel="stylesheet" href="../dist/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
@section('title')


 @inject('animev', 'App\Models\Animev')  
 <style>
    html,
body,
.intro {
  height: 100%;
}

.gradient-custom-1 {
  /* fallback for old browsers */
  background: #cd9cf2;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1))
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
tbody td {
  font-weight: 500;
  color: #999999;
}
 </style>
@section('content')



<section class="intro">
    <div class="gradient-custom-1 h-100">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="table-responsive bg-white">
                <table class="table mb-0">
                    
                  <thead>
                    <tr>
                      <th scope="col">Title</th>
                      <th scope="col">Episode</th>
                      <th scope="col">Documents</th>
              

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($animes as $item)
                    <tr>
                  
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->episode }}</td>
                      <td>
                        @foreach ($animev->where('a_id', $item->id)->get() as $video)
                            <a href="javascript:void(0);" onclick="window.open('{{ url('/storage/' . $video->hashname) }}', '_blank');">{{ $video->document }}</a> <br>
                        @endforeach
                    </td>
                      
                     
                      @endforeach
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




@endsection
<script src="../dist/js/player.js"></script>
<script src="../dist/js/jquery.nice-select.min.js"></script>
<script src="../dist/js/mixitup.min.js"></script>
<script src="../dist/js/jquery.slicknav.js"></script>
<script src="../dist/js/owl.carousel.min.js"></script>
<script src="../dist/js/main.js"></script>

@section('scripts')