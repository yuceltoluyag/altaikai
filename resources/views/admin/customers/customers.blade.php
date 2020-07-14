@extends('admin.layout.base')
@section('title', 'Müşteriler')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> @yield('title', 'Müşteri Listesi')</h1>
                <p>Müşterilerinizi Listeleyebilir,Düzenleyebilir,Silebilirsiniz</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Ad Soyad</th>
                                <th>Telefon</th>
                                <th>Adres</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($customers))
                                @foreach($customers as $custom)
                                    <tr>
                                        <td>{!! $custom->id !!}</td>
                                        <td>{!! $custom->musteri_ad !!}</td>
                                        <td>{!! $custom->musteri_telefon !!}</td>
                                        <td>{!! $custom->musteri_adres !!}</td>
                                    </tr>
                                @endforeach
                            @else
                                <h2>Not Yet Add Category</h2>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection