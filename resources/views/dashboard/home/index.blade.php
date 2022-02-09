@extends('dashboard.layout.master')

@section('title')
    خانه
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نمایه</th>
                            <th scope="col">عنوان</th>
                            <th scope="col">نویسنده</th>
                            <th scope="col">مدیریت</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($posts as $post)--}}
{{--                            <tr>--}}
{{--                                <th scope="row">1</th>--}}
{{--                                <td>--}}
{{--                                    <img src="" alt="">--}}
{{--                                </td>--}}
{{--                                <td>{{ $post->title }}</td>--}}
{{--                                <td>{{ $post->user->name }}</td>--}}
{{--                                <td>--}}
{{--                                    <button type="button" class="btn btn-warning mt-2"><i class="ri-radio-button-fill pr-0"></i></button>--}}
{{--                                    <button type="button" class="btn btn-danger mt-2"><i class="ri-delete-bin-2-fill pr-0"></i></button>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endsection--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
