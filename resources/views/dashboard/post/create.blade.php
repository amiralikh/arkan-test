@extends('dashboard.layout.master')

@section('title')
    ثبت پست
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">ثبت پست جدید</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="title">عنوان :</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="name" placeholder="عنوان">
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">تصویر :</label>
                                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="content">محتوای پست</label>
                                    <textarea class="form-control" name="content" id="content" rows="3">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">ثبت</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
