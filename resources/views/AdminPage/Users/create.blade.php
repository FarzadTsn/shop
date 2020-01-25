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
                                <h3 class="card-title" style="font:15px IranSans !important; text-align: center">ایجاد محصول جدید </h3>
                                @if($switalert ==1)
                                <script>alertt();</script>
                                    @endif
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('addProduct')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{--@include('AdminPage.Errors')--}}
                                    <div class="form-group">
                                        <div class="col-sm-12" style="text-align: right">
                                            <label for="name" class="control-label">عنوان محصول</label>
                                            <input type="text" class="form-control" name="title" id="name" placeholder="عنوان محصول " value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="text-align: right">
                                            <label for="permission_id" class="control-label">توضیحات محصول</label>
                                            <textarea name="description" class="form-control" placeholder="توضیحات محصول را وارد کنید"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="text-align: right">
                                            <label for="label" class="control-label">قیمت اصلی محصول</label>
                                            <input type="text" class="form-control" name="mainprice" id="label1" placeholder="قیمت بدون تخفیف" value="">
                                        </div>
                                    </div><div class="form-group" style="text-align: right">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">قیمت با اعمال تخفیف محصول</label>
                                            <input type="text" class="form-control" name="offprice" id="label2" placeholder="قیمت نهایی بعد از اعمال تخفیف" value="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align: right">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">قیمت برای فروش عمده</label>
                                            <input type="text" class="form-control" name="totalprice" id="label3" placeholder="قیمت برای فروش عمده" value="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align: right">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">سایز محصول</label>
                                            <select name="size" class="form-control">
                                                <option value="s">small</option>
                                                <option value="m">medium</option>
                                                <option value="l">larg</option>
                                                <option value="xl">x larg</option>
                                                <option value="xxl">xx larg</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align: right">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">رنگ محصول</label>
                                            <select name="color" class="form-control">
                                                <option value="white">سفید</option>
                                                <option value="red">قرمز</option>
                                                <option value="green">سبز</option>
                                                <option value="blue">آبی</option>
                                                <option value="black">مشکی</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" style="text-align: right">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">دسته بندی محصول</label>
                                            <select name="category" class="form-control">
                                                @foreach($category as $cat)
                                                <option value="{{$cat->id}}">{{$cat->display_name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" style="text-align: right">
                                        <div class="col-sm-12">
                                            <label for="label" class="control-label">عکس محصول</label>
                                            <hr>
                                         <input type="file" name="propic">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success" style="width: 250px !important; margin-right: 780px !important;"> ثبت محصول </button>
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
