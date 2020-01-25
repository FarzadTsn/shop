@extends('AdminPage.Master')

@section('content')

    <div class="content-wrapper" style="margin-top: 20px">
        <div class="container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="btn-group btn-md ">
                                    <a href="{{route('submituser')}}"   class="btn  btn-info">افزودن کابر یا ادمین جدید</a>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-hover table-dark text-center">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">ایمیل</th>
                                        <th scope="col">نقش</th>
                                        <th scope="col">وضعیت</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{$Number =1}}
                                    @foreach($UserList as $uss)
                                    <tr>
                                        <th scope="row">{{$Number++}}</th>
                                        <td>{{$uss->name}}</td>
                                        <td>{{$uss->email}}</td>
                                        <td>
                                            <form action = "{{route('changeroleinline')}}" method = "post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <input type="text" style="display: none" name="changeroleinlineid" value="{{$uss->id}}">
                                                    <input type="submit" name="changeroleinline" value="{{$uss->role}}">
                                            </form>
                                            </td>
                                        <td>
                                            <form action = "{{route('changestatusinline')}}" method = "post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <input type="text" style="display: none" name="changestatusinlineid" value="{{$uss->id}}">
                                                    <input type="submit" name="changestatusinline" value="{{$uss->status}}">
                                            </form>
                                            </td>
                                        <td><a href="{{route('edituser',$uss->id)}}" style="color: #fff725">ویرایش</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section>
            <div style="text-align: center">
            </div>
        </div><!-- /.content -->
    </div>

@endsection()
