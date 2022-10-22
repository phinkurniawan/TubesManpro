@extends('template.base')

@section('css')
    <style>
        @media (min-width: 576px) {
        .card-group.card-group-scroll {
          overflow-x: auto;
          flex-wrap: nowrap;
        }
      }

      .card-group.card-group-scroll > .card {
        flex-basis: 33%;
      }
    </style>
@endsection

@section('content')
  <div class="card shadow-sm p-3 mb-5 bg-white rounded border-light">
    <div class="card-body">
        <div class="row">
            <div class="col my-auto">
                <h5 class="card-title"><strong>Berkat Abadi</strong></h5>
                <p class="card-text mt-4">Toko Berkat Abadi merupakan dealer Honda yang menyediakan berbagai macam produk</p>
                <button class="btn btn-danger mt-4">See More</button></div>
            <div class="col">
                <img class="img-fluid float-end" width="400" src="{{ url('foto_toko.jpeg') }}" alt="Foto Toko Berkat Abadi">
            </div>
        </div>
      
    </div>
  </div>
  
  <div class="card shadow-sm p-3 mb-5 bg-white rounded border-light">
    <div class="card-body">
        <div class="card-title">
            <strong>Products</strong>
            <button class="btn btn-danger float-end">See More</button>
        </div>
        <div class="card-group card-group-scroll">
            @for ($i = 0; $i < 9; $i++)
                
            <div class="card bg-white border-light me-2">
                <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-300,f-auto/uploads/product/thumbnail/thumbnail-50828-14032022-082255.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text">Rp. xx.xxx.xxx</p>
                </div>
            </div>

            @endfor
        </div>
    </div>
  </div>
  
  <div class="card shadow-sm p-3 mb-5 bg-white rounded border-light">
    <div class="card-body">
        <div class="card-title">
            <strong>Video Motor</strong>
            <button class="btn btn-danger float-end">See More</button>
        </div>
        <div class="card-group card-group-scroll">
            @for ($i = 0; $i < 3; $i++)
                
            <div class="card bg-white border-light me-2" >
                <div class="card-body text-center">
                    <iframe width="902" height="500" src="https://www.youtube.com/embed/xo2V6UzqtMQ" title="New Honda #Vario125, Jadikan Harimu Istimewa!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            @endfor
        </div>
    </div>
  </div>

@endsection