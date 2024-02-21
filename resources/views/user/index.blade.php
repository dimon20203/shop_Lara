@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6 d-flex align-items-center justify-content-between">
                    <h1 class="m-0 mr-2">Пользователи</h1>
                    <div class="d-flex">
                        <a href="{{route('user.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Пользователи</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Имя</th>
                                        <th>Фамилия</th>
                                        <th>Отчество</th>
                                        <th>Email</th>
                                        <th>Возраст</th>
                                        <th>Пол</th>
                                        <th>Адрес</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td><a href="{{ route('user.show', $user->id) }}">{{ $user->surname }}</a></td>
                                            <td>{{ $user->patronymic }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->age }}</td>
                                            <td>{{ $user->genderTitle }}</td>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection
