@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mb-5">
                    <h5 class="col-12 my-3"> Добавление категории</h5>
                    <div class="col-2">
                        <a href="{{route('admin.category.index')}}" class="btn btn-block btn-secondary ">Назад</a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-4">
                        <form action="{{route('admin.category.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label >Название</label>
                                <input type="text" name="title" class="form-control"  placeholder="Название категории">
                            @error('title')
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
