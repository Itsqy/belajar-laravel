@extends('landing.template')

@section('content')

    {{-- biar carousel nya cuma ad pas di index doang , makanya dimasukin di index,blade ny aja , di panggil dsini --}}




    <section class="container mt-5 mb-5">
        {{-- PILIH LIGA --}}
        {{-- <section class="pilih-liga mt-4"> --}}
        {{-- <h3><strong>Berdasarkan {{$kategori->nama_kategori}}</strong></h3>
    <div class="row mt-4">
      @foreach ($kategori as $k)
       <div class="col">
          <a style="text-decoration: none; color:black " href="{{route('landing.kategori', $k->slug)}}">
             <div class="card shadow">
                <div class="card-body text-center">
{{$k->nama_kategori}}
                </div>
             </div>
          </a>
       </div>
       @endforeach
    </div> --}}
        {{-- </section> --}}
        <!-- card title -->



        <div style="margin-top: 15px;">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('landing') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">kategori</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $nm_kt->nama_kategori }}</li>
                </ol>
            </nav>
        </div>

        <div class="row mt-3 ">
            @foreach ($produk as $pro)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ $pro->img }}" class="img-fluid" alt="...">
                            <div class="row mt-2">
                                <h5 class="card-title">{{ $pro->nama }}</h5>
                                <p class="card-text"> Rp.{{ number_format($pro->harga) }}</p>
                                <a href="{{ route('produk.detail', $pro->slug) }}" class="btn btn-primary">Order now! </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </section>
@endsection
