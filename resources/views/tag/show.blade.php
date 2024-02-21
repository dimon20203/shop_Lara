@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center justify-content-between">
                    <h1 class="m-0 mr-2">{{$tag->title}}</h1>
                    <div class="d-flex">
                        <a href="{{route('tag.edit',$tag->id)}}" class="text-success mr-2"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{route('tag.delete',$tag->id)}}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Теги</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-3">ID</td>
                                        <td>{{$tag->id}}</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-3">Название</td>
                                        <td>{{$tag->title}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
