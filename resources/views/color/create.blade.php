@extends('layout.main')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Цвета</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('color.index')}}">Home</a></li>
            <li class="breadcrumb-item active"> Добавления цвета </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class="card">
            <div class="card-body">
              <form action="{{route('color.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="title" placeholder="Добавления цвета">
                  @error('title')
                  <div class="text-danger">Ето поле необходимо для заполнения</div>
                  @enderror
                </div>
                <input type="submit" class="btn btn-block btn-primary" value="Добавить">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
