@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пользователя</h1>
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
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Например: Ваня" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Почта</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{old('password')}}">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Подверждение пароля</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Повторите пароль" value="{{old('password_confirmation')}}">
                        </div>
                        <div class="form-group">
                            <label for="surname">Фамилия</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия" value="{{old('surname')}}">
                        </div>
                        <div class="form-group">
                            <label for="patronymic">Отчество</label>
                            <input type="text" class="form-control" id="patronymic" name="patronymic" placeholder="Фамилия" value="{{old('patronymic')}}">
                        </div>
                        <div class="form-group">
                            <label for="age">Возраст</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Возраст" value="{{old('age')}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Адрес</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Адрес" value="{{old('address')}}">
                        </div>
                        <div class="form-group">
                            <select name="gender" class="custom-select form-control" id="selectGender">
                                <option disabled selected>Пол</option>
                                <option {{ old('gender') == 1 ? 'selected': '' }} value="1">Мужской</option>
                                <option {{ old('gender') == 2 ? 'selected': '' }} value="2">Женский</option>
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
