@extends('layout.main')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Категории</h1>
        </div><div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">Home</a></li>
            <li class="breadcrumb-item active"> Добавления категории v1</li>
          </ol>
        </div></div></div></div>

  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <form action="{{ route('category.store') }}" method="POST" class="w-100">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="Добавления категории">
              @error('title')
              <div class="text-danger">Ето поле необходимо для заполнения</div>
              @enderror
            </div>
            <input type="submit" class="btn btn-block btn-primary" value="Добавить">
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
