@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center justify-content-between">
                    <h1 class="m-0 mr-2">{{$product->title}}</h1>
                    <div class="d-flex">
                        <a href="{{route('product.edit',$product->id)}}" class="text-success mr-2"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{route('product.delete',$product->id)}}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent text-danger" role="button"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
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
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$product->id}}</td>
                                </tr>
                                <tr>
                                    <td>Главная картинка</td>
                                    <td><img width="100px" src="{{ asset('storage/' . $product->preview_image) }}" ></td>
                                </tr>
                                <!-- Дополнительные изображения -->
                                @foreach($product->productImages as $index => $productImage)
                                    <tr>
                                        <td>Изображение дополнительное №{{ $index + 1 }}</td>
                                        <td><img src="{{ asset('storage/' . $productImage->file_path) }}" class="img-fluid" style="max-width: 200px; max-height: 200px;"></td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td>Название</td>
                                    <td>{{$product->title}}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{$product->description}}</td>
                                </tr>
                                <tr>
                                    <td>Контент</td>
                                    <td>{{$product->content}}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{$product->price}}</td>
                                </tr>
                                <tr>
                                    <td>Старая цена продукта</td>
                                    <td>{{$product->old_price}}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{$product->count}}</td>
                                </tr>
                                <tr>
                                    <td>Цвета</td>
                                    <td>
                                        @foreach($colors as $color)
                                            <div style="display: inline-block; margin-right: 5px; width: 16px; height: 16px; background: {{ $color->title }};"></div>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Теги</td>
                                    <td>
                                        @foreach($tags as $tag)
                                            {{ $tag->title }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Категории</td>
                                    <td>
                                        @foreach($categories as $category)
                                            {{ $category->title }}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Группа</td>
                                    <td>
                                        @foreach($groups as $group)
                                            {{ $group->title }}
                                        @endforeach
                                    </td>
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
