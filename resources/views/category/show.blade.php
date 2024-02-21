@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center justify-content-between">
                    <h1 class="m-0 mr-2">{{$category->title}}</h1>
                    <div class="d-flex">
                        <a href="{{route('category.edit',$category->id)}}" class="text-success mr-2"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{route('category.delete',$category->id)}}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent text-danger" role="button"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Категории</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$category->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$category->title}}</td>
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
