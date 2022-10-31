@extends('layouts.main')

@section('container')
<div class="waw d-flex justify-content-center">
    <div class="container-fluid row justify-content-center my-3">
        <div class="input-group my-2">
            <input type="text" class="form-control" placeholder="Search agents">
            <div class="input-group-append">
              <button class="btn btn-secondary" type="button" style="width: 40px;" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
        </div>
        @foreach ($agents as $agent)
            <div class="container col-lg-3  my-3">
                <div class="card" style="background-color: 7399BF">
                    <img src="{{ $agent->agent_pict }}" class="card-img-top mt-3" style="float: center; height: 300px;object-fit: contain;" alt="{{ $agent->agent_name }}">

                    <div class="card-body" style = "height: auto">
                        <h4 class="fw-normal text-center text-bold">{{ $agent->agent_name }}</h4>
                        <p class="card-text fw-bold mt-3" style = "margin-top: -5px;">{{ Str ::limit($agent->agent_desc, 180)}}</p>
                    </div>
                    <a href="/edit/{{ $agent->agent_id }}">
                        <div class="d-grid gap-2 col-6 mx-auto mb-2">
                            <button class="btn btn-secondary" type="button">Edit</button>
                        </div>
                    </a>
                    <a href="/delete/{{ $agent->agent_id }}">
                        <div class="d-grid gap-2 col-6 mx-auto mb-2">
                            <button class="btn btn-danger   " type="button">Delete</button>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .waw{
        background-color: #0F141A;
    }
</style>
