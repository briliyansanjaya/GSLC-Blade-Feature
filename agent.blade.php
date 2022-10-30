@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center" style = "background-color: 0F141A">
    <div class="container-fluid row justify-content-center my-3">
        @foreach ($agents as $agent)
            <div class="container col-lg-3 py-2">
                <div class="card" style="background-color: 7399BF">
                    <img src="{{ $agent->agent_pict }}" class="card-img-top mt-3" style="float: center; height: 300px;object-fit: contain;" alt="{{ $agent->agent_name }}">

                    <div class="card-body" style = "height: auto">
                        <h4 class="fw-normal text-center text-bold">{{ $agent->agent_name }}</h4>
                        <p class="card-text fw-bold mt-3" style = "margin-top: -5px;">{{ Str ::limit($agent->agent_desc, 180)}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

<style></style> {{--ini gk tau kenapa gak bisa di hapus, kalau dihapus semua css yg di format sama navbar langsung ilang(invisible)--}}
