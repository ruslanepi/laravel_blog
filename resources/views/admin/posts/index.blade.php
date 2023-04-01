@extends('admin.layouts.main')

@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="row mb-5">
                <h5 class="col-12 my-3"> Список записей</h5>

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
                                    <th>Название</th>
                                    <th>Контент</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->content}}</td>
                                        <td><a href="{{route('admin.post.show', $post->id)}}" class="btn">Подробнее</a></td>
                                        <td><a href="{{route('admin.post.edit', $post->id)}}" class="btn btn-primary">Изменить</a></td>
                                        <td>
                                            <form action="{{route('admin.post.destroy', $post->id)}}" method="post" >
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
                    <div class="col-2">
                        <a href="{{route('admin.post.create')}}" class="btn btn-block btn-primary">Добавить запись</a>
                    </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
