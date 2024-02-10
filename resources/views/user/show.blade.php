@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Цвет</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Цвета</a></li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Редактировать</a>

                            <form action="{{route('user.delete', $user->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Отчество</th>
                                    <th>Почта</th>
                                    <th>Возраст</th>
                                    <th>Пол</th>
                                    <th>Адрес</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>>{{ $user->name }}</a></td>
                                        <td>>{{ $user->surname }}</td>
                                        <td>>{{ $user->patronymic }}</td>
                                        <td>>{{ $user->email }}</td>
                                        <td>>{{ $user->age }}</td>
                                        <td>>{{ $user->getName }}</td>
                                        <td>>{{ $user->address }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
