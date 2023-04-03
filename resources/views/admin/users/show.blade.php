@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mb-5">
                    <h5 class="col-12 my-3"> Пользователь - {{$user->name}}</h5>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{route('admin.user.index')}}"
                                   class="btn btn-block btn-secondary ">Назад</a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('admin.user.edit', $user->id)}}"
                                   class="btn btn-block btn-success ">Редактировать</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
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
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="col-4">
                        <div class="row">
                            <div class="col-6">
                                <form action="{{route('admin.user.destroy', $user->id)}}" method="post" >
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Удалить" class="btn btn-danger">
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
