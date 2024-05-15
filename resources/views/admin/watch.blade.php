@extends('layouts.admin')

<link rel="stylesheet" href="../dist/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="../dist/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="../dist/css/plyr.css" type="text/css">
<link rel="stylesheet" href="../dist/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="../dist/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="../dist/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="../dist/css/style.css" type="text/css">

@section('title')
@endsection

@inject('animev', 'App\Models\Animev')  

<style>
html,
body,
.intro {
  height: 100%;
}

.gradient-custom-1 {
  background: linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));
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
                                <a href="/add" class="btn btn-success btn-sm float-right" title="Add New Episode">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New Episode
                                </a>   
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Episode</th>
                                        <th scope="col">Documents</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($animes as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->episode }}</td>
                                        <td>
                                            @foreach ($animev->where('a_id', $item->id)->get() as $image)
                                                <a href="{{ url('/storage/' . $image->hashname) }}" target="_blank">{{ $image->document }}</a> <br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('movies.edit', $item->id) }}" class="btn btn-primary btn-sm" title="Edit Movie">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                            </a>
                                            <form action="{{ route('movies.destroy', $item->id) }}" method="POST" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Movie" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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
@endsection
