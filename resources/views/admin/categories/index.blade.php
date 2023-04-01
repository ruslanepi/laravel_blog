@extends('admin.layouts.main')

@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="row mb-5">
                <h5 class="col-12 my-3"> Список категорий</h5>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->title}}</td>
                                        <td><a href="{{route('admin.category.show', $category->id)}}">Подробнее</a></td>
                                        <td><a href="{{route('admin.category.edit', $category->id)}}">Изменить</a></td>
                                        <td>
                                            <form action="{{route('admin.category.destroy', $category->id)}}" method="post" >
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Удалить">
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
                        <a href="{{route('admin.category.create')}}" class="btn btn-block btn-primary">Добавить категорию</a>
                    </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
