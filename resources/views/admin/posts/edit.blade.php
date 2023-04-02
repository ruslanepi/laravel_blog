@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mb-5">
                    <h5 class="col-12 my-3">Редактирование записи</h5>
                    <div class="col-1">
                        <a href="{{route('admin.post.index')}}" class="btn btn-block btn-secondary ">Назад</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <form action="{{route('admin.post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label>Изменить категорию</label>
                                <select name="category_id" class="form-control" required>
                                    <option selected>Выберите категорию</option>
                                    @foreach($categories as $category)
                                        <option
                                            {{$category->id == $post->category_id ? ' selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Изменить теги</label>
                                <select class="select2 select2-hidden-accessible" multiple=""
                                        data-placeholder="Выберите теги" style="width: 100%;" data-select2-id="7"
                                        tabindex="-1" aria-hidden="true" name="tag_ids[]">
                                    @foreach($tags as $tag)
                                        <option {{is_array($post->tags->pluck('id')->toArray() ) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : ''}}  value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Изменить название</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="{{$post->title}}">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Изменить содержание</label>
                                <textarea id="summernote" name="content" rows="4">{{$post->content}}</textarea>

                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class=""><img src="{{asset('storage/' . $post->main_image)}}" alt="" width="150px"></div>
                                <label for="exampleInputFile">Изменить основное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Выберите картинку</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="w-25"><img src="{{asset('storage/' . $post->preview_image)}}" alt="" width="150px"></div>
                                <label for="exampleInputFile">Изменить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Выберите картинку</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('preview_image')
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
