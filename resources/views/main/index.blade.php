@extends('layout.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
          <div class="inner">
            <h3></h3>
            <p>Заказы</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-shopping-bag"></i>
          </div>
          <a href="#" class="small-box-footer">Подробнее <i
              class="nav-icon fas fa-shopping-bag"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3></h3>
            <p>Пользователи</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">Подробнее <i
              class="fas fa-users"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3></h3>
            <p>Продукти</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-box-open"></i>
          </div>
          <a href="#" class="small-box-footer">Подробнее <i
              class="nav-icon fas fa-box-open"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3></h3>
            <p>Отзиви</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-clipboard"></i>
          </div>
          <a href="#" class="small-box-footer">Подробнее <i
              class="nav-icon fas fa-clipboard"></i></a>
        </div>
      </div>
    </div>
    </div></section>

    <!-- /.content -->
</div>
@endsection
