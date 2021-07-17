@extends('layouts.app')

@section ('content')

<div class="container p-0">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  <!-- GET FIT FROM HOME [S]-->
    <div class="row">
      <div class="col-12 promowrap">
        <div class="row m-0 p-0">
          <div class="col-4 promo-info h-100">
            <div class="infowrapper d-flex flex-column h-100 justify-content-center">
              <h2>BELANJA SEKARANG</h2>
              <h4>Potongan 30% semua barang</h4>
              <p>Tawaran Berakhir 17 Juli 2021</p>
              <a href="{{ route('product.index') }}" class="w-100 button">BELANJA</a>
            </div>   
          </div> 
        </div>
        <img class="d-block w-100" src="{{ asset('photo\tampilan\home.jpg') }}" alt="">
      </div>
    </div>
    <!-- GET FIT FROM HOME [E]-->

    <!-- MEN & WOMEN [S]-->
    <div class="row pt-4">
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
          <button id="maleBtn">
          <div class="gender">
            <img class="d-block w-100" src="{{ asset('photo\tampilan\laki.jpg') }}" alt="">
            <h2 class="pt-2">PRIA</h2>
          </div>
        </button>
        </a>
      </div>
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
          <button id="femaleBtn">
          <div class="gender">
            <img class="d-block w-100" src="{{ asset('photo\tampilan\perem.jpg') }}" alt="">
            <h2 class="pt-2">WANITA</h2>
          </div>
        </button>
        </a>
      </div>
    </div>

    <!-- MEN & WOMEN [E]-->

        <!-- CATEGORY [S]-->
        <div class="row m-0 pt-4">
          <div class="col-lg col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="{{ route('product.index') }}">
              <div class="category">
                <img class="" height="200px" src="{{ asset('photo\tampilan\cwok.jpg') }}" alt="">
                <h5 class="pt-2">Anak Laki</h5>
              </div>
            </a>
          </div>
          <div class="col-lg col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="#">
              <div class="category">
                <img class="" height="200px" src="{{ asset('photo\tampilan\cwek.jpg') }}" alt="">
                <h5 class="pt-2">Anak Perempuan</h5>
            </div>
            </a>
          </div>
          <div class="col-lg col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="#">
              <div class="category">
                <img class="" height="200px" src="{{ asset('photo\tampilan\sholat.jpg') }}" alt="">
                <h5 class="pt-2">Alat Shalat</h5>
              </div>
            </a>
          </div>
          <div class="col-lg col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="#">
              <div class="category">
                <img class="" height="200px" src="{{ asset('photo\tampilan\hijab.jpg') }}" alt="">
                <h5 class="pt-2">Hijab</h5>
              </div>
            </a>
          </div>
        </div>
        <!-- CATEGORY [E]-->

    <!-- FEATURED SHOES [S]-->
    <h2 class="pt-4">BESTSELLER</h2>
    <div class="row d-flex justify-content-center">
      @foreach ($products as $product)    
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-3">
        <div class="card">
          <a href="{{ route('product.show',['product'=>$product->id]) }}">
            <div class="card-body ">
              <div class="product-info">
                <div class="info-1"><img src="{{ asset('/storage/'.$product->image) }}" alt=""></div>
                <div class="info-4"><h5>{{ $product->brand }}</h5></div>
                <div class="info-2"><a href="product/{{ $product->id }}"><h4>{{ $product->name }}</h4></a></div>
                <div class="info-3"><h5>Rp {{ $product->price }}</h5></div>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
    <!-- FEATURED SHOES [E]-->


</div>

@endsection