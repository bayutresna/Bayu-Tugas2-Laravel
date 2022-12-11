@extends('template')
@section('title','Tugas 2 Blog')
@section('logo','Tugas 2 Blog')
@section('konten_master')
@parent
@parent

            @foreach($blogs as $blog)
                @include('blog.component.card')
            @endforeach

    <div class="py-3 d-flex justify-content-center">
        <a href="{{route ('blog.create')}}"><button class="btn btn-primary">Tambah Postingan</button></a>
    </div>
@endsection

