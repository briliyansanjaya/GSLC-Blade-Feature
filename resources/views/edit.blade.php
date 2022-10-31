@extends('layouts.main')

@section('container')
    @if ($errors->any())
    <center>
        <strong>{{$errors->first()}}</strong>
    </center>
    @endif

<center>
<div class="container-fluid" style="background-color: 0F141A; height: 100vh;">
    @foreach ($agent as $a)
        <form action="/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="form-group">
                    <h5>Agent Id</h5>
                    <input type="text" class="form-control" name="agent_id" value="{{ $a->agent_id }}">
                </div>

                <div class="form-group">
                    <h5>Agent Name</h5>
                    <input type="text" class="form-control" name="agent_name" value="{{ $a->agent_name }}">
                </div>

                <div class="form-group">
                    <h5>Agent Description</h5>
                    <input type="text" class="form-control" name="agent_desc" value="{{ $a->agent_desc }}">
                </div>

                <div class="form-group">
                    <h5>Agent Picture</h5>
                    <input type="url" class="form-control" name="agent_pict" value="{{ $a->agent_pict }}">
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    @endforeach

    <a href="/">
        <button class="btn btn-secondary" type="submit">Cancel</button>
    </a>
</div>
</center>
@endsection

<style>
    .container h5 {
       color: white;
    }
</style>
