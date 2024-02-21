@extends('layout.main')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Пользователи</h1>
        </div><div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item active"> Добавления пользователя </li>
          </ol>
        </div></div></div></div>

  <section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form action="{{ route('user.store') }}" method="POST" class="w-100">
                    @csrf

                    <div class="form-group">
                        <label for="name">Имя пользователя</label>
                        <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Имя пользователя">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Емейл пользователя</label>
                        <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Емейл пользователя">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль пользователя</label>
                        <input type="password" class="form-control" name="password" placeholder="Введите пароль">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Подтверждение пароля</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Подтвердите пароль">
                    </div>

                    <div class="form-group">
                        <label for="surname">Фамилия пользователя</label>
                        <input type="text" class="form-control" value="{{ old('surname') }}" name="surname" placeholder="Фамилия пользователя">
                        @error('surname')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="patronymic">Отчество пользователя</label>
                        <input type="text" class="form-control" value="{{ old('patronymic') }}" name="patronymic" placeholder="Отчество пользователя">
                        @error('patronymic')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="age">Возраст пользователя</label>
                        <input type="number" class="form-control" value="{{ old('age') }}" name="age" placeholder="Возраст пользователя">
                        @error('age')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Адрес пользователя</label>
                        <input type="text" class="form-control" value="{{ old('address') }}" name="address" placeholder="Адрес пользователя">
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gender">Пол</label>
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Выберите пол</option>
                            <option {{ old('gender') == 1 ? 'selected' : '' }} value="1">Мужской</option>
                            <option {{ old('gender') == 2 ? 'selected' : '' }} value="2">Женский</option>
                        </select>

                        @error('gender')
                        <div class="text-danger">{{ $message }}</div>
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
