@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6 d-flex align-items-center justify-content-between">
                    <h1 class="m-0 mr-2">Теги</h1>
                    <div class="d-flex">
                        <a href="{{route('tag.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="col-md-6">
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Названия</th>
                                        <th colspan="3" class="text-center">Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td>{{$tag->id}}</td>
                                            <td>{{$tag->title}}</td>
                                            <td class="text-center"><a href="{{route('tag.show',$tag->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a></td>
                                            <td class="text-center"><a href="{{route('tag.edit',$tag->id)}}" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a></td>
                                            <td class="text-center">
                                                <form action="{{route('tag.delete',$tag->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
