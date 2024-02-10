@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
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
                <form action="{{route('user.update', $user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Например: Ваня" value="{{ $user->name ?? old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="surname">Фамилия</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия" value="{{ $user->surname ?? old('surname')}}">
                        </div>
                        <div class="form-group">
                            <label for="patronymic">Отчество</label>
                            <input type="text" class="form-control" id="patronymic" name="patronymic" placeholder="Фамилия" value="{{ $user->patronymic ?? old('patronymic')}}">
                        </div>
                        <div class="form-group">
                            <label for="age">Возраст</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Возраст" value="{{ $user->age ?? old('age')}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Адрес</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Адрес" value="{{ $user->address ?? old('address')}}">
                        </div>
                        <div class="form-group">
                            <select name="gender" class="custom-select form-control" id="selectGender">
                                <option disabled selected>Пол</option>
                                <option {{ $user->gender ||  old('gender') == 1 ? 'selected': '' }} value="1">Мужской</option>
                                <option {{ $user->gender ||  old('gender') == 2 ? 'selected': '' }} value="2">Женский</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
