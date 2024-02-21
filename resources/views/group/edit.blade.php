@extends('layout.main')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Групы</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('group.index')}}">Home</a></li>
            <li class="breadcrumb-item active"> Редактирования групы </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-6">
          <form action="{{route('group.update',$group->id)}}" method="POST">
            @csrf
            @method('PATCH ')
            <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="Добавления тега" value="{{$group->title}}">
              @error('title')
              <div class="text-danger">Ето поле необходимо для заполнения</div>
              @enderror
            </div>
            <input type="submit" class="btn btn-block btn-primary" value="Обновить">
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
