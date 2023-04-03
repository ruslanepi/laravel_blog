@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mb-5">
                    <h5 class="col-12 my-3"> Добавление нового пользователя</h5>
                    <div class="col-2">
                        <a href="{{route('admin.user.index')}}" class="btn btn-block btn-secondary ">Назад</a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-4">
                        <form action="{{route('admin.user.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label >Имя</label>
                                <input type="text" name="name" class="form-control"  placeholder="Имя пользователя">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label >Email</label>
                                <input type="text" name="email" class="form-control"  placeholder="Email">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label >Пароль</label>
                                <input type="text" name="password" class="form-control"  placeholder="Пароль">
                                @error('password')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"  value="Добавить">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>

@endsection
