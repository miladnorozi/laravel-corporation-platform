@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>xAdmin</span><i class="zmdi zmdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title">داشبورد</h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="zmdi zmdi-notifications-none"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="به دنبال چه می گردی ؟؟؟"
                                           class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="#">علی یدالهی</a> </h5>
                        <ul class="list-inline">
                            <li>
                                <a href="#" >
                                    <i class="zmdi zmdi-settings"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-custom">
                                    <i class="zmdi zmdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">دسته بندی ها</li>

                            <li>
                                <a href="index.html" class="waves-effect active"><i class="zmdi zmdi-view-dashboard"></i> <span> داشبورد </span> </a>
                            </li>

                            <li>
                                <a href="typography.html" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> نوشته ها </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> رابط کاربی </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">دکمه ها</a></li>
                                    <li><a href="ui-cards.html">کارد</a></li>
                                    <li><a href="ui-draggable-cards.html">کارت های جابه جا شونده</a></li>
                                    <li><a href="ui-checkbox-radio.html">چک باکس ها</a></li>
                                    <li><a href="ui-material-icons.html">آیکون های طراحی متریال</a></li>
                                    <li><a href="ui-font-awesome-icons.html">فونت آسوم</a></li>
                                    <li><a href="ui-themify-icons.html">تم فی آیکون</a></li>
                                    <li><a href="ui-modals.html">مدل ها</a></li>
                                    <li><a href="ui-notification.html">اطلاعات</a></li>
                                    <li><a href="ui-range-slider.html">نوار تغیرات</a></li>
                                    <li><a href="ui-components.html">اجزا</a>
                                    <li><a href="ui-sweetalert.html">هشدار ها</a>
                                    <li><a href="ui-treeview.html">نمایش درختی</a>
                                    <li><a href="ui-widgets.html">ویجت ها</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-text"></i><span class="label label-warning pull-right">7</span><span> فرم ها </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">فرم های عمومی</a></li>
                                    <li><a href="form-advanced.html">فرم های پیشرفته</a></li>
                                    <li><a href="form-validation.html">فرم ولیدشن</a></li>
                                    <li><a href="form-wizard.html">فرم پیشفرض</a></li>
                                    <li><a href="form-fileupload.html">فرم آپلود</a></li>
                                    <li><a href="form-wysiwig.html">ادیتور 1</a></li>
                                    <li><a href="form-xeditable.html">ادیتور 2</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> جدول ها </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="tables-basic.html">جدول پیشفرض</a></li>
                                    <li><a href="tables-datatable.html">جدول داده ها</a></li>
                                    <li><a href="tables-responsive.html">جدول واکنش گرا</a></li>
                                    <li><a href="tables-editable.html">جدول تغیرات</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect "><i class="zmdi zmdi-chart"></i><span> چارت ها </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.html">چارت شماره 1</a></li>
                                    <li><a href="chart-morris.html">چارت شماره 2</a></li>
                                    <li><a href="chart-chartist.html">چارت شماره 3</a></li>
                                    <li><a href="chart-chartjs.html">چارت شماره 4</a></li>
                                    <li><a href="chart-other.html">چارت شماره 5</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" ><i class="zmdi zmdi-calendar"></i><span> تقویم </span></a>
                            </li>

                            <li>
                                <a href="inbox.html" class="waves-effect"><i class="zmdi zmdi-email"></i><span class="label label-purple pull-right">جدید</span><span> ایمیل </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-item"></i><span> برگه ها </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-starter.html">برگه خالی</a></li>
                                    <li><a href="page-login.html">ورود</a></li>
                                    <li><a href="page-register.html">ثبت نام</a></li>
                                    <li><a href="page-recoverpw.html">فراموشی رمز</a></li>
                                    <li><a href="page-lock-screen.html">قفل صفحه</a></li>
                                    <li><a href="page-confirm-mail.html">تنظیمات ایمیل</a></li>
                                    <li><a href="page-404.html">خطای 404</a></li>
                                    <li><a href="page-500.html">خطای 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect "><i class="zmdi zmdi-layers"></i><span>دیگر صفحات </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-projects.html">پروژ ه ها</a></li>
                                    <li ><a href="extras-tour.html">تور آزمایشی</a></li>
                                    <li><a href="extras-taskboard.html">مدیرها</a></li>
                                    <li><a href="extras-taskdetail.html">جزئیات</a></li>
                                    <li><a href="extras-profile.html">پروفایل </a></li>
                                    <li><a href="extras-maps.html">نقشه</a></li>
                                    <li><a href="extras-contact.html">لیست تماس</a></li>
                                    <li><a href="extras-pricing.html">فروش</a></li>
                                    <li><a href="extras-timeline.html">خط زمان</a></li>
                                    <li><a href="extras-invoice.html">صورت حساب</a></li>
                                    <li><a href="extras-faq.html">سوال و جواب</a></li>
                                    <li><a href="extras-gallery.html">گالری</a></li>
                                    <li><a href="extras-email-template.html">تم های ایمیل</a></li>
                                    <li><a href="extras-maintenance.html">تعمیرات</a></li>
                                    <li><a href="extras-comingsoon.html">به زودی</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                        		<div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">درآمد کل</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                               data-bgColor="#F9B9B9" value="58"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1">
                                            <h2 class="p-t-10 m-b-0"> 256 </h2>
                                            <p class="text-muted">درآمد روزانه</p>
                                        </div>
                                    </div>
                        		</div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                        		<div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">آنالیز فروش</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2">
                                            <span class="badge badge-success pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                                            <h2 class="m-b-0"> 8451 </h2>
                                            <p class="text-muted m-b-25">درآمد امروز</p>
                                        </div>
                                        <div class="progress progress-bar-success-alt progress-sm m-b-0">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 77%;">
                                                <span class="sr-only">77% مجموع</span>
                                            </div>
                                        </div>
                                    </div>
                        		</div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                        		<div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">آمار</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                               data-bgColor="#FFE6BA" value="80"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                        </div>
                                        <div class="widget-detail-1">
                                            <h2 class="p-t-10 m-b-0"> 4569 </h2>
                                            <p class="text-muted">آمار امروز</p>
                                        </div>
                                    </div>
                        		</div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                        		<div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">فروش روزانه</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2">
                                            <span class="badge badge-pink pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                                            <h2 class="m-b-0"> 158 </h2>
                                            <p class="text-muted m-b-25">فروش امروز</p>
                                        </div>
                                        <div class="progress progress-bar-pink-alt progress-sm m-b-0">
                                            <div class="progress-bar progress-bar-pink" role="progressbar"
                                                 aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 77%;">
                                                <span class="sr-only">77% مجموع</span>
                                            </div>
                                        </div>
                                    </div>
                        		</div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                        		<div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0">فروش روزانه</h4>

                                    <div class="widget-chart text-center">
                                        <div id="morris-donut-example"style="height: 245px;"></div>
                                        <ul class="list-inline chart-detail-list m-b-0">
                                            <li>
                                                <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>سری الف</h5>
                                            </li>
                                            <li>
                                                <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>سری ب</h5>
                                            </li>
                                        </ul>
                                	</div>
                        		</div>
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="header-title m-t-0">آمارها</h4>
                                    <div id="morris-bar-example" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="header-title m-t-0">مجموع درآمد</h4>
                                    <div id="morris-line-example" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{ asset('images/users/avatar-1.jpg') }}" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">علی یدالهی</h4>
                                            <p class="text-muted m-b-5 font-13">ali.yadollahi7074@gmail.com</p>
                                            <small class="text-warning"><b>مدیر کل</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{ asset('images/users/avatar-2.jpg') }}" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600"> فرهاد پور هاشم</h4>
                                            <p class="text-muted m-b-5 font-13">faarhad@email.com</p>
                                            <small class="text-custom"><b>مدیر داخلی</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{ asset('images/users/avatar-3.jpg') }}" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">خانم حسن زاده</h4>
                                            <p class="text-muted m-b-5 font-13">m.hasanzadeh@email.com</p>
                                            <small class="text-success"><b>مدیر مالی</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="{{ asset('images/users/avatar-10.jpg') }}" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">آقای زارع</h4>
                                            <p class="text-muted m-b-5 font-13">zarepor@email.com</p>
                                            <small class="text-info"><b>بازاریاب</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-4">
                            	<div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">جعبه دریافتی</h4>

									<div class="inbox-widget nicescroll" style="height: 315px;">
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-1.jpg') }}" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">کاربر اول</p>
                                                <p class="inbox-item-text">سلام دوست من این یک متن تستی است</p>
                                                <p class="inbox-item-date">13:40 ب:ظ</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-2.jpg') }}" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">کاربر دوم</p>
                                                <p class="inbox-item-text">سلام دوست من این یک متن تستی است</p>
                                                <p class="inbox-item-date">13:34 ب:ظ</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-3.jpg') }}" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">کاربر سوم</p>
                                                <p class="inbox-item-text">سلام دوست من این یک متن تستی است</p>
                                                <p class="inbox-item-date">13:17 ق::ظ</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">کاربر چهارم</p>
                                                <p class="inbox-item-text">سلام دوست من این یک متن تستی است</p>
                                                <p class="inbox-item-date">12:20 ب:ظ</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-5.jpg') }}" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">کاربر پنجم</p>
                                                <p class="inbox-item-text">سلام دوست من این یک متن تستی است</p>
                                                <p class="inbox-item-date">10:15 ق:ظ</p>
                                            </div>
                                        </a>
                                    </div>
								</div>
                            </div><!-- end col -->

                            <div class="col-lg-8">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">آخرین پروژه های اجرا شده</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>نام پروژه</th>
                                                <th>تاریخ شروع</th>
                                                <th>سررسید</th>
                                                <th>وضعیت</th>
                                                <th>نوع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>X</td>
                                                    <td>01/01/2016</td>
                                                    <td>26/04/2016</td>
                                                    <td><span class="label label-danger">به اتمام رسید</span></td>
                                                    <td>قالب HTML</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>املاک نیاوران</td>
                                                    <td>01/01/2016</td>
                                                    <td>26/04/2016</td>
                                                    <td><span class="label label-success">در حال برسی</span></td>
                                                    <td>قالب وردپرس</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>اپ شرط بندی</td>
                                                    <td>01/05/2016</td>
                                                    <td>10/05/2016</td>
                                                    <td><span class="label label-pink">اجرا شده</span></td>
                                                    <td>اندروید</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>اپ شرط بندی</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-purple">تست نهایی</span>
                                                    </td>
                                                    <td>آی او اس</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>چت روم ایرانی</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-warning">به زودی</span></td>
                                                    <td>لاراول</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>حساب یار</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-primary">به زودی</span></td>
                                                    <td>برنامه ویندوزی</td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                     © xAdmin 2019
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">اعلانات</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="images/users/avatar-2.jpg/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">کاربر شماره یک</span>
                                    <span class="desc">متن کاربر شماره یک</span>
                                    <span class="time">2 ساعت قبل</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">ثبت نام جدید</span>
                                    <span class="desc">کاربری جدید در سایت ثبت نام کرده است</span>
                                    <span class="time">5 ساعت قبل</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">پیام جدید</span>
                                    <span class="desc">متن پیام جدید از کاریی جدید</span>
                                    <span class="time">1 روز قبل</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="{{ asset('images/users/avatar-3.jpg') }}" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">کاربر شماره 2</span>
                                    <span class="desc">با سلام من یک متن کاملا آزمایشی هستم</span>
                                    <span class="time">2 روز قبل</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">تنظیمات</span>
                                    <span class="desc">تنظیمات جدید برای دسترسی و راحتی شما موجود است</span>
                                    <span class="time">1 روز قبل</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

@endsection