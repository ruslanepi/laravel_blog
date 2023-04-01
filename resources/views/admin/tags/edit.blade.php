@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mb-5">
                    <h5 class="col-12 my-3">Редактирование тэга</h5>
                    <div class="col-1">
                        <a href="{{route('admin.tag.index')}}" class="btn btn-block btn-secondary ">Назад</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <form action="{{route('admin.tag.update', $tag->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" name="title" class="form-control" value="{{$tag->title}}" placeholder="{{$tag->title}}">
                                @error('title')
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
