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
            icon: 'error',
            title: 'لطفا نقش خود را انتخاب کنید',
            showConfirmButton: false,
            timer: 7000
        })
    }
    function  alerttt() {
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'تغییرات با موفقیت ثبت شد',
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
                                <h3 class="card-title" style="font:15px IranSans !important; text-align: center">به صفحه ی مناسب بازگردید </h3>
                                @if($switalert ==2)
                                <script>alertt();</script>
                                    @elseif($switalert ==1)
                                    <script>alerttt();</script>
                                    @endif
                            </div><!-- /.card-header -->
                            <div class="card-body">


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
