@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6 d-flex align-items-center justify-content-between">
                    <h1 class="m-0 mr-2">Цвета</h1>
                    <div class="d-flex">
                        <a href="{{route('color.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('color.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">цвета</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                          <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Названия</th>
                                    <th>Цвет</th>
                                    <th colspan="3" class="text-center">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($colors as $color)
                                    <tr>
                                        <td>{{ $color->id }}</td>
                                        <td><a href="{{ route('color.show', $color->id) }}">{{ $color->title }}</a></td>
                                        <td>
                                            <div style="width: 16px; height: 16px; background: {{  $color->title }};"></div>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('color.show', $color->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('color.edit', $color->id) }}" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('color.delete', $color->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No colors found.</td>
                                    </tr>
                                @endforelse
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
