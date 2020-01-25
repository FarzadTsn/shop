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
                                    <form action="subcat" method="post" class="form-inline float-right">
                                        @csrf
                                        <label>مشخصه ی دسته بندی : </label>
                                        <input type="text" name="title" class="form-control">
                                        <label>نام نمایشی دسته بندی: </label>
                                        <input type="text" name="displayname" class="form-control">
                                        <input type="submit" value="ثبت" class="btn btn-success">

                                    </form>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-hover table-dark text-center">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">مشخصه</th>
                                        <th scope="col">نام نمایشی</th>
                                    </tr>
                                    </thead>
                                    {{$Number =1}}
                                    <tbody>
                                    @foreach($CategoryList as $cat)
                                        <tr>
                                            <th scope="row">{{$Number++}}</th>
                                            <td>{{$cat->title}}</td>
                                            <td>{{$cat->display_name}}</td>
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
                {{$CategoryList->render("pagination::bootstrap-4")}}
            </div>
        </div><!-- /.content -->
    </div>

@endsection()
