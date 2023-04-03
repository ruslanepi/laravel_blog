@extends('admin.layouts.main')

@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="row mb-5">
                <h5 class="col-12 my-3"> Список пользователей</h5>

            </div>

            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Имя</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td><a href="{{route('admin.user.show', $user->id)}}" class="btn">Подробнее</a></td>
                                        <td><a href="{{route('admin.user.edit', $user->id)}}" class="btn btn-primary">Изменить</a></td>
                                        <td>
                                            <form action="{{route('admin.user.destroy', $user->id)}}" method="post" >
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" value="Удалить">
                                            </form></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-3">
                        <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary">Добавить пользователя</a>
                    </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
