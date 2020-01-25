@extends('AdminPage.Master')

@section('script')
    <script>
        $(document).ready(function () {
            $(this).find("#permission_id").selectpicker();
        });
    </script>
@endsection

@section('content')
    <div class="content-wrapper" style="margin-top: 20px">
        <div class="container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="font:15px IranSans !important;">ویرایش محصول </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{method_field('PATCH')}}
                                    {{--@include('AdminPage.Errors')--}}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="name" class="control-label">عنوان محصول</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="عنوان محصول " value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="permission_id" class="control-label">توضیحات محصول</label>
                                            <textarea class="form-control" placeholder="توضیحات محصول را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">قیمت اصلی محصول</label>
                                            <input type="text" class="form-control" name="label" id="label" placeholder="قیمت بدون تخفیف" value="">
                                        </div>
                                    </div><div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">قیمت با اعمال تخفیف محصول</label>
                                            <input type="text" class="form-control" name="label" id="label" placeholder="قیمت نهایی بعد از اعمال تخفیف" value="">
                                        </div>
                                    </div><div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">قیمت برای فروش عمده</label>
                                            <input type="text" class="form-control" name="label" id="label" placeholder="قیمت برای فروش عمده" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success" style="width: 250px !important; margin-right: 780px !important;"> ویرایش محصول </button>
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
@endsection
