<!-- Start Navbar Section -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom ">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link"> صفحه اصلی</a>
        </li>
    </ul>
    <!-- Start Search  Form  -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="جستجو در پنل" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-comments"></i>
                <span class="badge badge-danger navbar-badge">17</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="{{Url('/images/AdminImg/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 ml-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                            </h3>
                            <p class="text-sm">با من تماس بگیر لطفا...</p>
                            <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="{{Url('/images/AdminImg/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle ml-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title"> پیمان احمدی
                                <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                            </h3>
                            <p class="text-sm">من پیامتو دریافت کردم</p>
                            <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{Url('/images/AdminImg/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle ml-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                سارا وکیلی
                                <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                            </h3>
                            <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                            <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-warning navbar-badge">89</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
                    <span class="float-left text-muted text-sm">3 دقیقه</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
                    <span class="float-left text-muted text-sm">12 ساعت</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa fa-file ml-2"></i> 3 گزارش جدید
                    <span class="float-left text-muted text-sm">2 روز</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fa fa-th-large"></i></a>
        </li>
    </ul>
</nav>
<!-- End navbar  Section -->

<!-- Start Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4 rightt">
    <a href="" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" >پنل مدیریت فروشگاه</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{Url('/images/AdminImg/user6-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info" style="color:#ffffff">{{auth()->user()->name}}

                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item ">
                        <a href="/admin/panel" class="nav-link active">
                            <i class="nav-icon fas fa-solar-panel"></i>
                            <p> پنل اصلی  </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p> اعضاء <i class="right fa fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                {{--<a href="{{route('roles.index')}}" class="nav-link">--}}
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>  تنظیمات کاربران </p>
                                {{--</a>--}}
                            </li>
                            <li class="nav-item">
                                <a href="{{route('userslist')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>  لیست کاربران <span class="right badge badge-info">4 نفر </span> </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('submituser')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p> افزودن کاربر جدید </p>
                                </a>
                            </li>
                            {{--<li class="nav-item">--}}
                                {{--<a href="/admin/users" class="nav-link">--}}
                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                    {{--<p>کاربران سایت  <span class="right badge badge-warning">17 نفر </span> </p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-school"></i>
                            <p> محصولات <i class="right fa fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                {{--<a href="{{route('courses.create')}}" class="nav-link">--}}
                                    <i class="fa fa-send-o nav-icon"></i>
                                    <p> کنترل محصولات </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/courses" class="nav-link">
                                    <i class="fa fa-send-o nav-icon"></i>
                                    <p> لیست محصولات  </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/addproduct" class="nav-link">
                                    <i class="fa fa-send-o nav-icon"></i>
                                    <p> ثبت محصول جدید  </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p> دسته بندی <i class="right fa fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                {{--<a href="{{route('articles.create')}}" class="nav-link">--}}
                                    <i class="fa fa-send-o nav-icon"></i>
                                    <p> تنظیمات دسته بندی </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/cat" class="nav-link">
                                    <i class="fa fa-send-o nav-icon"></i>
                                    <p> اضافه کردن دسته بندی </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p> اساتید آموزشگاه <i class="right fa fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                {{--<a href="{{route('professors.create')}}" class="nav-link">--}}
                                    <i class="fa fa-send-o nav-icon"></i>
                                    <p> ثبت مدرس جدید </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/professors" class="nav-link">
                                    <i class="fa fa-send-o nav-icon"></i>
                                    <p> آرشیو اساتید سایت </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cash-register"></i>
                            <p> وضعیت تراکنش ها <i class="right fa fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/payments" class="nav-link">
                                    <i class="fa fa-send-o nav-icon"></i>
                                    {{--<p>پرداخت های موفق<span class="right badge badge-success">{{$paymentSuccessCount}} </span></p>--}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/payments/unsuccessful" class="nav-link">
                                    <i class="fa fa-send-o nav-icon"></i>
                                    {{--<p>پرداخت های ناموفق<span class="right badge badge-danger">{{$paymentUnsuccessfulCount}} </span></p>--}}
                                </a>
                            </li>
                        </ul>
                    </li>
                    @can('show-comment')
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-edit"></i>
                                <p> مدیریت کامنت ها <i class="fa fa-angle-left right"></i> </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>همه کامنت ها </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>  تایید نشده ها<span class="right badge badge-danger">18 </span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-chart-area"></i>
                            <p>آمار و ارقام<i class="fa fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>جداول ساده</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>جداول داده</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-book"></i>
                            <p>صفحات  <i class="fa fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/examples/invoice.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>معرفی آموزشگاه</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/profile.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>اطلاعات تماس</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/login.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>صفحه ورود</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/register.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>صفحه عضویت</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link">
                            <i class="nav-icon fa fa-user-lock"></i><p> خروج از پنل</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
