@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mb-5">
                    <h5 class="col-12 my-3"> Добавление записи</h5>
                    <div class="col-2">
                        <a href="{{route('admin.post.index')}}" class="btn btn-block btn-secondary ">Назад</a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-4">
                        <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label >Название</label>
                                <input type="text" name="title" class="form-control"  placeholder="Название поста">
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label >Содержание</label>
                                <textarea type="text" name="content" class="form-control" placeholder="Содержание"></textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Добавить основное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label" >Выберите картинку</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label" >Выберите картинку</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
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
