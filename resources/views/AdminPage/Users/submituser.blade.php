@extends('AdminPage.Master')

@section('script')
    <script>
        $(document).ready(function () {
            $(this).find("#permission_id").selectpicker();
        });
    </script>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function  alertt() {
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'محصول شما با موفقیت ثبت شد',
            showConfirmButton: false,
            timer: 7000
        })
    }
</script>
@section('content')
    <div class="content-wrapper" style="margin-top: 20px">
        <div class="container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="font:15px IranSans !important; text-align: center">ایجاد کاربر جدید </h3>
                                {{--@if($switalert ==1)--}}
                                {{--<script>alertt();</script>--}}
                                    {{--@endif--}}
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('adduser')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{--@include('AdminPage.Errors')--}}
                                    <div class="form-group">
                                        <div class="col-sm-12" style="text-align: right">
                                            <label for="name" class="control-label">نام کاربر</label>
                                            <input type="text" class="form-control" name="namesub" id="name" placeholder="نام کاربر" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="text-align: right">
                                            <label for="permission_id" class="control-label">ایمیل کاربر</label>
                                            <input type="email" name="emailsub" class="form-control" placeholder="ایمیل کاربر"></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="text-align: right">
                                            <label for="label" class="control-label">رمز کاربر</label>
                                            <input type="password" class="form-control" name="passwordsub" id="password" placeholder="رمز" value="">
                                        </div>
                                    <div class="form-group" style="text-align: right">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">شماره تلفن کاربر</label>
                                            <input type="text" class="form-control" name="phone" id="label3" placeholder="شماره تلفن" value="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align: right">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">نقش کاربر</label>
                                            <select name="role" class="form-control">
                                                <option value="admin">مدیر</option>
                                                <option value="haghighi">حقیقی</option>
                                                <option value="hoghooghi">حقوقی</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success" style="width: 250px !important; margin-right: 780px !important;"> ثبت کاربر </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.card -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section>
        </div><!-- /.content -->
    </div>

    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

@endsection
