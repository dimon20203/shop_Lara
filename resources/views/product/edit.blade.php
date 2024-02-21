@extends('layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирования продукта</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Home</a></li>
                        <li class="breadcrumb-item active"> Редактирования продукта </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="w-100">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="title">Наименование продукта</label>
                            <input type="text" class="form-control" name="title" placeholder="Введите наименование продукта" value="{{ $product->title }}">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Описание продукта</label>
                            <textarea class="form-control" name="description" placeholder="Введите описание продукта">{{ $product->description }}</textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Контент продукта</label>
                            <textarea class="form-control" name="content" placeholder="Введите контент продукта">{{ $product->content }}</textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <div class="mt-2">
                                <div class="mt-2">
                                    <img id="previewImage" src="{{ $product->preview_image ? asset('storage/' . $product->preview_image) : '' }}" alt="{{ $product->title }}" class="img-fluid" style="max-width: 200px; max-height: 200px;">
                                </div>
                            </div>
                            <label for="exampleInputFile">Главное зображение </label>
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

                        <!-- Додаткові картинки -->
                        @for ($i = 0; $i < 3; $i++)
                            <div class="form-group">
                                <div class="mt-2">
                                    <img id="previewImage{{ $i + 1 }}" src="{{ old('product_images.' . $i) ? asset('storage/' . old('product_images.' . $i)) : (isset($product->productImages[$i]) ? asset('storage/' . $product->productImages[$i]->file_path) : '') }}" class="img-fluid" style="max-width: 200px; max-height: 200px;">
                                </div>
                                <label for="exampleInputFile">Додаткове зображення №{{ $i + 1 }}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile{{ $i + 1 }}" accept="image/*" onchange="handleFileChanges(event, 'previewImage{{ $i + 1 }}')">
                                        <label class="custom-file-label" for="exampleInputFile{{ $i + 1 }}">Виберіть файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Завантаження</span>
                                    </div>
                                </div>
                                @error('product_images.' . $i)
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @endfor



                        <div class="form-group">
                            <label for="price">Цена продукта</label>
                            <input type="number" class="form-control" name="price" placeholder="Введите цену продукта" value="{{ $product->price }}">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="old_price">Старая цена продукта</label>
                            <input type="number" class="form-control" name="old_price" placeholder="Введите цену продукта" value="{{ $product->old_price }}">
                            @error('old_price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="count">Количество продукта</label>
                            <input type="number" class="form-control" name="count" placeholder="Введите количество продукта" value="{{ $product->count }}">
                            @error('count')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            <select name="category_id"class="form-control select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите категорию</option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->title }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Група</label>
                            <select name="group_id"class="form-control select2" style="width: 100%;">
                                <option value="" disabled selected>Выберите групу</option>

                                @foreach($groups as $group)
                                    <option value="{{ $group->id }}" {{ $group->id == $product->group_id ? 'selected' : '' }}>{{ $group->title }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Теги</label>
                            <select name="tags[]" class="select2" multiple="multiple" data-placeholder="Вибрать тег" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}" {{ in_array($tag->id, $product->tags->pluck('id')->toArray()) ? 'selected' : '' }}>{{$tag->title}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Цвета</label>
                            <select name="colors[]" class="select2" multiple="multiple" data-placeholder="Вибрать цвет" style="width: 100%;">
                                @foreach($colors as $color)
                                    <option value="{{$color->id}}" {{ in_array($color->id, $product->colors->pluck('id')->toArray()) ? 'selected' : '' }}>{{$color->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="submit" class="btn btn-block btn-primary" value="Обновить">
                    </form>
                </div>
            </div>
            <!-- /.row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
