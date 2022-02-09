@extends('dashboard.layout.master')

@section('title')
    ویرایش کاربر
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">ویرایش اطلاعات کاربر</h4>
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

                        <form method="post" action="{{ route('users.update',$user->id) }}">
                            @csrf @method('patch')
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="form-group col-md-4">
                                    <label for="name">نام :</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') ? old('name') : $user->name }}" id="name" placeholder="نام">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">ایمیل :</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') ? old('email') : $user->email }}" placeholder="ایمیل">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">رمز عبور :</label>
                                    <input type="password" name="password"  class="form-control" id="password" placeholder="رمز عبور">
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
