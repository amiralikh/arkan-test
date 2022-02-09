@extends('dashboard.layout.master')

@section('title')
    کاربران
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">کاربران ثبت شده</h5>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام</th>
                            <th scope="col">ایمیل</th>
                            <th scope="col">تاریخ ثبت</th>
                            <th scope="col">مدیریت</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ \Morilog\Jalali\Jalalian::forge($user->created_at) }}</td>
                                <td style="display: flex">
                                    <a href="{{ route('users.edit',$user->id) }}" type="button" class="btn btn-warning mt-2"><i class="ri-radio-button-fill pr-0"></i></a>

                                    <form style="margin-right: 10px" action="{{ route('users.destroy',$user->id) }}" method="post">
                                        @csrf @method('delete')
                                        <button type="submit" class="btn btn-danger mt-2"><i class="ri-delete-bin-2-fill pr-0"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links('pagination::bootstrap-4') }}

                </div>
            </div>
        </div>
    </div>

@endsection
