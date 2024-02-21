@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6 d-flex align-items-center justify-content-between">
                    <h1 class="m-0 mr-2">Продукты</h1>
                    <div class="d-flex">
                        <a href="{{route('product.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Категории</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Аватар</th>
                                        <th>Названия</th>
                                        <th colspan="3" class="text-center">Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>
                                                <img width="100px" src="{{ asset('storage/' . $product->preview_image) }}" >
                                            </td>





                                            <td>{{$product->title}}</td>
                                            <td class="text-center"><a href="{{route('product.show',$product->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a></td>
                                            <td class="text-center"><a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a></td>
                                            <td class="text-center">
                                                <form action="{{route('product.delete',$product->id)}}" method="POST">
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
