@extends('layout/layout')

@section('title', 'Productos')

@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small></small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="../img/{{$product->image}}.{{$product->extension}}" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">{{$product->name}}</h3>
        <p>{{$product->description}}.</p>

        <h4 class="my-3">Precios</h4>
        <ul>
        @forelse($product->details as $detail)
          <li>{{$detail->quantity}} Unidades
            <ul>
              @forelse($detail->prices as $price)
                <li>${{$price->price}} x {{$price->tray}} Bandeja</li>
              @endforeach
            </ul>
          </li>
        @endforeach
        </ul>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4"></h3>

    <div class="row">

      @forelse($product->details as $detail)
      <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../img/{{$detail->image}}.{{$detail->extension}}" alt="{{$detail->image}}">
          </a>
        </div>
      @endforeach

    </div>


    <!--   <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

    </div>
    /.row -->

  </div>
  <!-- /.container -->
@endsection