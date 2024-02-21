@extends('layout.main')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Продукти</h1>
        </div><div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('product.index')}}">Home</a></li>
            <li class="breadcrumb-item active"> Добавления продукта v1</li>
          </ol>
        </div></div></div></div>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="w-100">
                        @csrf

                        <div class="form-group">
                            <label for="title">Наименование продукта</label>
                            <input type="text" class="form-control" name="title" placeholder="Введите наименование продукта">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Описание продукта</label>
                            <textarea class="form-control" name="description" placeholder="Введите описание продукта"></textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Контент продукта</label>
                            <textarea class="form-control" name="content" placeholder="Введите контент продукта"></textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="mt-2">
                                <img id="previewImage" src="#"  class="img-fluid" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <label for="exampleInputFile">Главное изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile" accept="image/*" onchange="handleFileChange(event)">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('preview_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>


                        <div class="form-group">
                            <div class="mt-2">
                                <img id="previewImage1" src="#" class="img-fluid" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <label for="exampleInputFile">Изображение дополнительное №1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile1" accept="image/*" onchange="handleFileChanges(event, 'previewImage1')">
                                    <label class="custom-file-label" for="exampleInputFile1">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('product_images')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="form-group">
                            <div class="mt-2">
                                <img id="previewImage2" src="#" class="img-fluid" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <label for="exampleInputFile">Изображение дополнительное №2</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile2" accept="image/*" onchange="handleFileChanges(event, 'previewImage2')">
                                    <label class="custom-file-label" for="exampleInputFile2">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('product_images')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="form-group">
                            <div class="mt-2">
                                <img id="previewImage3" src="#" class="img-fluid" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <label for="exampleInputFile">Изображение дополнительное №3</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile3" accept="image/*" onchange="handleFileChanges(event, 'previewImage3')">
                                    <label class="custom-file-label" for="exampleInputFile3">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('product_images')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Повторите аналогичный блок для изображений №3 с уникальным идентификатором -->



                        <div class="form-group">
                            <label for="price">Цена продукта</label>
                            <input type="number" class="form-control" name="price" placeholder="Введите цену продукта">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="old_price">Старая цена продукта</label>
                            <input type="number" class="form-control" name="old_price" placeholder="Введите цену продукта">
                            @error('old_price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="count">Количество продукта</label>
                            <input type="number" class="form-control" name="count" placeholder="Введите количество продукта">
                            @error('count')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            <select name="category_id" class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled>Выберите категорию</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Група</label>
                            <select name="group_id" class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled>Выберите групу</option>
                                @foreach($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Теги</label>
                            <select name="tags[]" class="select2" multiple="multiple" data-placeholder="Выбрать тег" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Цвета</label>
                            <select name="colors[]" class="select2" multiple="multiple" data-placeholder="Выбрать цвет" style="width: 100%;">
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="submit" class="btn btn-block btn-primary" value="Добавить">
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
