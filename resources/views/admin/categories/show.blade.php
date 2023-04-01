@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mb-5">
                    <h5 class="col-12 my-3"> Категория - {{$category->title}}</h5>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{route('admin.category.index')}}"
                                   class="btn btn-block btn-secondary ">Назад</a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('admin.category.edit', $category->id)}}"
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
                                        <th>Название</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->title}}</td>
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
                                <form action="{{route('admin.category.destroy', $category->id)}}" method="post" >
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Удалить">
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
