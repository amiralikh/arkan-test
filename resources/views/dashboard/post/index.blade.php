@extends('dashboard.layout.master')

@section('title')
    پست ها
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
                            <th scope="col">تاریخ ثبت</th>
                            <th scope="col">عنوان</th>
                            <th scope="col">نویسنده</th>
                            <th scope="col">مدیریت</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    {{ \Morilog\Jalali\Jalalian::forge($post->created_at) }}
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td style="display: flex">
                                    <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary mt-2"><i class="ri-radio-button-fill pr-0"></i></a>
                                    <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning mt-2"><i class="ri-radio-button-fill pr-0"></i></a>

                                    <form style="margin-right: 10px" action="{{ route('posts.destroy',$post->id) }}" method="post">
                                        @csrf @method('delete')
                                        <button type="submit" class="btn btn-danger mt-2"><i class="ri-delete-bin-2-fill pr-0"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

@endsection
