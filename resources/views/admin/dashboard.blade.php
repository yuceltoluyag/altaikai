@extends('admin.layout.base')
@section('title','Yönetici')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Boş Sayfa</h1>
                <p>{{getenv('APP_NAME')}}</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">{{getenv('APP_NAME')}}</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">Vallaha De ? {{ $admin }}
                        <br />
                        {!! \App\Classes\CSRFToken::_token() !!}
                        <br />
                        {!! \App\Classes\Session::get('token') !!}
                        <br />
                        {{ \App\Classes\Redirect::to('/') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection