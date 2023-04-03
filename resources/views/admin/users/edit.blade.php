@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mb-5">
                    <h5 class="col-12 my-3">Редактирование пользователя</h5>
                    <div class="col-1">
                        <a href="{{route('admin.user.index')}}" class="btn btn-block btn-secondary ">Назад</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <form action="{{route('admin.user.update', $user->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="{{$user->name}}">
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="text" name="email" class="form-control"  placeholder="Email" value="{{$user->email}}">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"  value="Обновить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
