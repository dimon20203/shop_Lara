@extends('layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                        <li class="breadcrumb-item active"> Редактирования пользователя </li>
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
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Имя пользователя" value="{{ $user->name ?? old('name') }}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $user->surname ?? old('surname') }}" name="surname" placeholder="Фамилия пользователя">
                        @error('surname')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $user->patronymic ?? old('patronymic') }}" name="patronymic" placeholder="Отчество пользователя">
                        @error('patronymic')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" value="{{ $user->age ?? old('age') }}" name="age" placeholder="Возраст пользователя">
                        @error('age')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $user->address ?? old('address') }}" name="address" placeholder="Адрес пользователя">
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{ $user->gender == 1 || old('gender') == 1 ? 'selected' : '' }} value="1">Мужской</option>
                            <option {{ $user->gender == 2 || old('gender') == 2 ? 'selected' : '' }} value="2">Женский</option>
                        </select>

                        @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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
