<!DOCTYPE html>
@if(Request::segment(1) == 'ar')
    <html direction="rtl" dir="rtl" style="direction: rtl">
    @else
        <html lang="en">
        @endif
        <head>
            <base href="">
            <meta charset="utf-8"/>
            <title> URAM ELECTRONIC TRADEMENT| @yield('title')</title>
            <meta name="description" content="UramSYS"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
            <link rel="canonical" href="http://uramit.com/"/>
            <!--begin::Fonts-->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
            <!--end::Fonts-->
            <link rel="shortcut icon" href="{{asset('dashboard/assets/media/logos/fav.png')}}"/>

            @if(Request::segment(1) == 'ar')
                <link href="{{asset('dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}"
                      rel="stylesheet" type="text/css"/>

                <link href="{{asset('dashboard/assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}"
                      rel="stylesheet" type="text/css"/>
                <link href="{{asset('dashboard/assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>

                <link href="{{asset('dashboard/assets/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet"
                      type="text/css"/>
            @else
                <link href="{{asset('dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}"
                      rel="stylesheet" type="text/css"/>

                <link href="{{asset('dashboard/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

                <link href="{{asset('dashboard/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('dashboard/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet"
                      type="text/css"/>

            @endif

            @yield('css')
        </head>

        <!-- end::Head -->

        <!-- begin::Body -->
        <body id="kt_body"
              class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

        <!-- begin:: Page -->
        <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
            <!--begin::Logo-->
            <a href="/">
                <img style="width: 61%;" alt="Logo" src="{{asset('/Upload')}}/{{$Sett->logo}}"/>
            </a>
            <!--end::Logo-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Aside Mobile Toggle-->
                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Aside Mobile Toggle-->
                <!--begin::Header Menu Mobile Toggle-->
                <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Header Menu Mobile Toggle-->
                <!--begin::Topbar Mobile Toggle-->
                <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24"/>
								<path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"/>
								<path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero"/>
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
                </button>
                <!--end::Topbar Mobile Toggle-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header Mobile-->

        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                    <!--begin::Brand-->
                    <div class="brand flex-column-auto" id="kt_brand">
                        <!--begin::Logo-->
                        <a href="/" class="brand-logo">
                            <img alt="Logo" src="{{asset('/Upload')}}/{{$Sett->logo}}" style="width:150px;"/>
                        </a>
                        <!--end::Logo-->
                        <!--begin::Toggle-->
                        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24"/>
										<path
                                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)"/>
										<path
                                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)"/>
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
                        </button>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Brand-->
                    <!--begin::Aside Menu-->
                    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                        <!--begin::Menu Container-->
                        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
                             data-menu-dropdown-timeout="500">
                            <!--begin::Menu Nav-->
                            <ul class="menu-nav">

                                <li class="menu-item @if(Request::segment(2) == '')  menu-item-active @endif"
                                    aria-haspopup="true">
                                    <a href="/" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon id="Bound" points="0 0 24 0 24 24 0 24"/>
													<path
                                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                        id="Shape" fill="#000000" fill-rule="nonzero"/>
													<path
                                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                        id="Path" fill="#000000" opacity="0.3"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                                        <span class="menu-text"
                                              style="font : bold;font-size: 17px;">{{__('lang.Home')}}</span>
                                    </a>
                                </li>
                                @inject('UserRole','App\UserRole')
                                @if($UserRole->find(Auth::user()->role)->transactions ==1 )
                                    <li class="menu-item @if(Request::segment(2) == 'transactions')  menu-item-active @endif "
                                        aria-haspopup="true">
                                        <a href="/transactions" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"/>
													<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7"
                                                          height="7" rx="1.5"/>
													<path
                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                        id="Combined-Shape" fill="#000000" opacity="0.3"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                                            <span class="menu-text"
                                                  style="font : bold;font-size: 17px;">{{__('lang.Transactions')}}</span>
                                        </a>
                                    </li>
                                @endif
                                @if($UserRole->find(Auth::user()->role)->resources ==1 )

                                    <li class="menu-item @if(Request::segment(2) == 'resources')  menu-item-active @endif"
                                        aria-haspopup="true">
                                        <a href="/resources" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"/>
													<rect id="Rectangle-151" fill="#000000" opacity="0.3" x="4" y="4"
                                                          width="8" height="16"/>
													<path
                                                        d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z"
                                                        id="Combined-Shape" fill="#000000" fill-rule="nonzero"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                                            <span class="menu-text"
                                                  style="font : bold;font-size: 17px;">{{__('lang.HR')}}</span>
                                        </a>
                                    </li>
                                @endif
                                @if($UserRole->find(Auth::user()->role)->settings ==1 )

                                    <li class="menu-item @if(Request::segment(2) == 'settings')  menu-item-active @endif"
                                        aria-haspopup="true">
                                        <a href="/settings" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"/>
													<path
                                                        d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                        id="Combined-Shape" fill="#000000" opacity="0.3"/>
													<path
                                                        d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                        id="Combined-Shape" fill="#000000"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                                            <span class="menu-text"
                                                  style="font : bold;font-size: 17px;">{{__('lang.Settings')}}</span>
                                        </a>
                                    </li>
                                @endif
                                @if($UserRole->find(Auth::user()->role)->copanel ==1 )

                                    <li class="menu-item @if(Request::segment(2) == 'copanel')  menu-item-active @endif"
                                        aria-haspopup="true">
                                        <a href="/copanel" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"/>
													<path
                                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                        id="Combined-Shape" fill="#000000"/>
													<path
                                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                        id="Combined-Shape" fill="#000000" opacity="0.3"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                                            <span class="menu-text"
                                                  style="font : bold;font-size: 17px;">{{__('lang.Control')}}</span>
                                        </a>
                                    </li>
                                @endif

                                {{-- <li class="menu-section">
                                    <h4 class="menu-text">Custom</h4>
                                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
                                                    <path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-text">Pages</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                        <i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                <span class="menu-link">
                                                    <span class="menu-text">Pages</span>
                                                </span>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Login</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/login/login-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Login 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/login/login-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Login 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Login 3</span>
                                                                <span class="menu-label">
                                                                    <span class="label label-inline label-info">Wizard</span>
                                                                </span>
                                                                <i class="menu-arrow"></i>
                                                            </a>
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/login-3/signup.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Sign Up</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/login-3/signin.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Sign In</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/login-3/forgot.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Forgot Password</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Login 4</span>
                                                                <span class="menu-label">
                                                                    <span class="label label-inline label-info">Wizard</span>
                                                                </span>
                                                                <i class="menu-arrow"></i>
                                                            </a>
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/login-4/signup.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Sign Up</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/login-4/signin.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Sign In</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/login-4/forgot.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Forgot Password</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Classic</span>
                                                                <i class="menu-arrow"></i>
                                                            </a>
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/classic/login-1.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Login 1</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/classic/login-2.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Login 2</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/classic/login-3.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Login 3</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/classic/login-4.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Login 4</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/classic/login-5.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Login 5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/pages/login/classic/login-6.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Login 6</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Wizard</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/wizard/wizard-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Wizard 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/wizard/wizard-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Wizard 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/wizard/wizard-3.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Wizard 3</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/wizard/wizard-4.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Wizard 4</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/wizard/wizard-5.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Wizard 5</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/wizard/wizard-6.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Wizard 6</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Pricing Tables</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/pricing/pricing-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Pricing Tables 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/pricing/pricing-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Pricing Tables 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/pricing/pricing-3.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Pricing Tables 3</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/pricing/pricing-4.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Pricing Tables 4</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Invoices</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/invoices/invoice-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Invoice 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/invoices/invoice-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Invoice 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/invoices/invoice-3.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Invoice 3</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/invoices/invoice-4.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Invoice 4</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/invoices/invoice-5.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Invoice 5</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/invoices/invoice-6.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Invoice 6</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Error</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/error/error-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Error 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/error/error-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Error 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/error/error-3.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Error 3</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/error/error-4.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Error 4</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/error/error-5.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Error 5</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/pages/error/error-6.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Error 6</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li> --}}
                            </ul>
                            <!--end::Menu Nav-->
                        </div>
                        <!--end::Menu Container-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header header-fixed">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-stretch justify-content-between">
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Header Menu-->
                                <div id="kt_header_menu"
                                     class="header-menu header-menu-mobile header-menu-layout-default">
                                    <!--end::Header Nav-->
                                </div>
                                <!--end::Header Menu-->
                            </div>
                            <!--end::Header Menu Wrapper-->
                            <!--begin::Topbar-->
                            <div class="topbar">
                                <!--begin::Notifications-->
                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div
                                            class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path
                                                            d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                            fill="#000000" opacity="0.3"/>
														<path
                                                            d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                            fill="#000000"/>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                                            <span class="pulse-ring"></span>
                                        </div>
                                    </div>
                                    <!--end::Toggle-->
                                    <!--begin::Dropdown-->
                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                        <form>
                                            <!--begin::Header-->
                                            <div
                                                class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
                                                style="background-image: url({{asset('/dashboard/assets/media/misc/bg-1.jpg')}})">
                                                <!--begin::Title-->
                                                <h4 class="d-flex flex-center rounded-top">
                                                    <span class="text-white">???????? ??????????????????</span>
                                                    <span
                                                        class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23</span>
                                                </h4>
                                                <!--end::Title-->
                                                <!--begin::Tabs-->
                                                <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" data-toggle="tab"
                                                           href="#topbar_notifications_notifications">??????????????????</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab"
                                                           href="#topbar_notifications_events">??????????????????</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab"
                                                           href="#topbar_notifications_logs">?????????????? ????????????</a>
                                                    </li>
                                                </ul>
                                                <!--end::Tabs-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Content-->
                                            <div class="tab-content">
                                                <!--begin::Tabpane-->
                                                <div class="tab-pane active show p-8"
                                                     id="topbar_notifications_notifications" role="tabpanel">
                                                    <!--begin::Scroll-->
                                                    <div class="scroll pr-7 mr-n7" data-scroll="true">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-50 symbol-light mr-5">
																<span class="symbol-label ">
																	<span class="svg-icon svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1"
                                                                             class="kt-svg-icon">
																		  <g stroke="none" stroke-width="1" fill="none"
                                                                             fill-rule="evenodd">
																			  <rect id="bound" x="0" y="0" width="24"
                                                                                    height="24"/>
																			  <path
                                                                                  d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M18.1444251,10.8396467 L12,14.1481833 L5.85557487,10.8396467 C5.4908718,10.6432681 5.03602525,10.7797221 4.83964668,11.1444251 C4.6432681,11.5091282 4.77972206,11.9639747 5.14442513,12.1603533 L11.6444251,15.6603533 C11.8664074,15.7798822 12.1335926,15.7798822 12.3555749,15.6603533 L18.8555749,12.1603533 C19.2202779,11.9639747 19.3567319,11.5091282 19.1603533,11.1444251 C18.9639747,10.7797221 18.5091282,10.6432681 18.1444251,10.8396467 Z"
                                                                                  id="Combined-Shape" fill="#000000"/>
																			  <path
                                                                                  d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                                                                                  id="Shape" fill="#000000"
                                                                                  fill-rule="nonzero" opacity="0.3"
                                                                                  transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) "/>
																		  </g>
																		</svg>
																	  </span>
																</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Text-->
                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                <a href="/transactions/inbox"
                                                                   class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{__('lang.Transactionsmincoming')}}</a>
                                                            </div>
                                                            <!--end::Text-->
                                                            <span
                                                                class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">{{\App\Inbox::OrderBy('created_at','desc')->where('reciver_id',Auth::user()->id)->where('is_signature',null)->where('is_archive_reciver',null)->count()}}</span>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-50 symbol-light mr-5">
																<span class="symbol-label ">
																	<span class="svg-icon svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1"
                                                                             class="kt-svg-icon">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24"
                                                                                      height="24"/>
																				<path
                                                                                    d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M18.1444251,10.8396467 L12,14.1481833 L5.85557487,10.8396467 C5.4908718,10.6432681 5.03602525,10.7797221 4.83964668,11.1444251 C4.6432681,11.5091282 4.77972206,11.9639747 5.14442513,12.1603533 L11.6444251,15.6603533 C11.8664074,15.7798822 12.1335926,15.7798822 12.3555749,15.6603533 L18.8555749,12.1603533 C19.2202779,11.9639747 19.3567319,11.5091282 19.1603533,11.1444251 C18.9639747,10.7797221 18.5091282,10.6432681 18.1444251,10.8396467 Z"
                                                                                    id="Combined-Shape" fill="#000000"/>
																				<path
                                                                                    d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                                                                                    id="Shape" fill="#000000"
                                                                                    fill-rule="nonzero" opacity="0.3"
                                                                                    transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) "/>
																			</g>
																		</svg>
																	  </span>
																</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Text-->
                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                <a href="/transactions/outbox"
                                                                   class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{__('lang.TransactionsOutgoing')}}</a>
                                                            </div>
                                                            <!--end::Text-->
                                                            <span
                                                                class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">{{\App\Inbox::OrderBy('id','desc')->where('sender_id',Auth::user()->id)->where('is_archive_sender',null)->count()}}</span>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <!--<div class="d-flex align-items-center flex-wrap mb-8">-->
                                                        <!--begin::Symbol-->
                                                        <!--	<div class="symbol symbol-50 symbol-light mr-5">-->
                                                        <!--		<span class="symbol-label ">-->
                                                        <!--			<span class="svg-icon svg-icon-primary">-->
                                                        <!--				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">-->
                                                        <!--					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
                                                        <!--						<rect id="bound" x="0" y="0" width="24" height="24"/>-->
                                                        <!--						<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" id="Combined-Shape" fill="#000000"/>-->
                                                        <!--						<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" id="Path-85" fill="#000000" fill-rule="nonzero" opacity="0.3"/>-->
                                                        <!--					</g>-->
                                                        <!--				</svg>-->
                                                        <!--			  </span>-->
                                                        <!--		</span>-->
                                                        <!--	</div>-->
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <!--	<div class="d-flex flex-column flex-grow-1 mr-2">-->
                                                    <!--		<a href="/" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{__('lang.Transactionsdelay')}}</a>-->
                                                        <!--	</div>-->
                                                        <!--end::Text-->
                                                        <!--	<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder"></span>-->
                                                        <!--</div>-->
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-50 symbol-light mr-5">
																<span class="symbol-label ">
																	<span class="svg-icon svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1"
                                                                             class="kt-svg-icon">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24"
                                                                                      height="24"/>
																				<path
                                                                                    d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z"
                                                                                    id="Combined-Shape" fill="#000000"/>
																				<path
                                                                                    d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z"
                                                                                    id="Path-85" fill="#000000"
                                                                                    fill-rule="nonzero" opacity="0.3"/>
																			</g>
																		</svg>
																	  </span>
																</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Text-->
                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                <a href="/transactions/archiveinbox"
                                                                   class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{__('lang.TransactionsmSave')}}</a>
                                                            </div>
                                                            <!--end::Text-->
                                                            <span
                                                                class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">{{\App\Inbox::where('reciver_id',Auth::user()->id)->where('is_signature',null)->where('is_archive_reciver',1)->count()}}</span>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-50 symbol-light mr-5">
																<span class="symbol-label ">
																	<span class="svg-icon svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1"
                                                                             class="kt-svg-icon">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24"
                                                                                      height="24"/>
																				<path
                                                                                    d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                                                    id="Combined-Shape" fill="#000000"
                                                                                    opacity="0.3"/>
																				<path
                                                                                    d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                                                    id="Combined-Shape" fill="#000000"/>
																			</g>
																		</svg>
																	  </span>
																</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Text-->
                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                <a href="/transactions/archiveoutbox"
                                                                   class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{__('lang.Transactionsmexport')}}</a>
                                                            </div>
                                                            <!--end::Text-->
                                                            <span
                                                                class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">{{\App\Inbox::where('is_signature','!=',null)->count()}}</span>
                                                        </div>
                                                        <!--end::Item-->


                                                    </div>
                                                    <!--end::Scroll-->

                                                </div>
                                                <!--end::Tabpane-->
                                                <!--begin::Tabpane-->
                                                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                    <!--begin::Nav-->
                                                    <div class="navi navi-hover scroll my-4" data-scroll="true"
                                                         data-height="300" data-mobile-height="200">

                                                        <!--begin::Item-->
                                                        @inject('Users','App\User')

                                                        <a href="#" class="navi-item">
                                                            <div class="navi-link">
                                                                <div class="navi-text">
                                                                    <div
                                                                        class="font-weight-bold">{{__('lang.noti_expire')}}</div>
                                                                </div>
                                                                <span
                                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">{{$Users->where('date_national_id','<',\Carbon\Carbon::now()->addDays(60))->count()}}</span>
                                                            </div>
                                                        </a>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <a href="#" class="navi-item">
                                                            <div class="navi-link">
                                                                <div class="navi-text">
                                                                    <div
                                                                        class="font-weight-bold">{{__('lang.noti_jawaz')}}</div>
                                                                </div>
                                                                <span
                                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">2</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="navi-item">
                                                            <div class="navi-link">
                                                                <div class="navi-text">
                                                                    <div
                                                                        class="font-weight-bold">@if(Request::segment(1) == 'ar' )
                                                                            ???????????? ???????????????? ???????????????? @else  Expiring
                                                                            seasonal contracts  @endif </div>
                                                                </div>

                                                                <span
                                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">{{$Users->where('end_contract_date','<',\Carbon\Carbon::now()->addDays(60))->where('contract_duration',1)->where('contract_status',1)->count()}}</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="navi-item">
                                                            <div class="navi-link">
                                                                <div class="navi-text">
                                                                    <div
                                                                        class="font-weight-bold">@if(Request::segment(1) == 'ar' )
                                                                            ???????????? ???????????????? ?????????????? @else  Expiring
                                                                            Yearly contracts  @endif</div>
                                                                </div>
                                                                <span
                                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">{{$Users->where('end_contract_date','<',\Carbon\Carbon::now()->addDays(60))->where('contract_duration',2)->where('contract_status',1)->count()}}</span>
                                                            </div>
                                                        </a>
                                                    {{--														<!--end::Item-->--}}
                                                    {{--														<!--begin::Item-->--}}
                                                    {{--														<a href="#" class="navi-item">--}}
                                                    {{--															<div class="navi-link">--}}
                                                    {{--																<div class="navi-text">--}}
                                                    {{--																	<div class="font-weight-bold">{{__('lang.noti_regcar')}}</div>--}}
                                                    {{--																</div>--}}
                                                    {{--																<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">3</span>--}}
                                                    {{--															</div>--}}
                                                    {{--														</a>--}}
                                                    {{--														<!--end::Item-->--}}
                                                    {{--														<!--begin::Item-->--}}
                                                    {{--														<a href="#" class="navi-item">--}}
                                                    {{--															<div class="navi-link">--}}
                                                    {{--																<div class="navi-text">--}}
                                                    {{--																	<div class="font-weight-bold">{{__('lang.noti_insurace')}}</div>--}}
                                                    {{--																</div>--}}
                                                    {{--																<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">5</span>--}}
                                                    {{--															</div>--}}
                                                    {{--														</a>--}}
                                                    <!--end::Item-->

                                                    </div>
                                                    <!--end::Nav-->
                                                </div>
                                                <!--end::Tabpane-->
                                                <!--begin::Tabpane-->
                                                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                    <!--begin::Nav-->
                                                    <div class="navi navi-hover scroll my-4" data-scroll="true"
                                                         data-height="300" data-mobile-height="200">

                                                        @inject('Log','App\Log')
                                                        @foreach($Log->where('user_id',Auth::user()->id)->where('description','like','%'.'???????????? ????????????'.'%')->limit(10)->get() as $data)
                                                            <a href="#" class="navi-item">
                                                                <div class="navi-link">
                                                                    <div class="navi-text">
                                                                        <div class="font-weight-bold">
                                                                            {{$data->description}}</div>
                                                                    </div>
                                                                    <span
                                                                        class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">{{$data->ip_address}}</span>
                                                                </div>
                                                            </a>
                                                    @endforeach<!--end::Nav-->
                                                    </div>
                                                </div>
                                                <!--end::Tabpane-->
                                            </div>
                                            <!--end::Content-->
                                        </form>
                                    </div>
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Notifications-->

                                <!--begin::Languages-->
                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                            @if(Request::segment(1) == 'ar')
                                                <img class="h-20px w-20px rounded-sm"
                                                     src="{{asset('/dashboard/assets/media/flags/008-saudi-arabia.svg')}}"
                                                     alt=""/>
                                            @else
                                                <img class="h-20px w-20px rounded-sm"
                                                     src="{{asset('/dashboard/assets/media/flags/020-flag.svg')}}"
                                                     alt=""/>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end::Toggle-->
                                    <!--begin::Dropdown-->
                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Nav-->
                                        <ul class="navi navi-hover py-4">

                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                @if(($localeCode!=Request::segment(1)) )
                                                    <li class="navi-item">
                                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                           class="navi-link">
                                                            @if($properties['native'] == '??????????????')
                                                                <span class="symbol symbol-20 mr-3"><img
                                                                        src="{{asset('/dashboard/assets/media/flags/008-saudi-arabia.svg')}}"
                                                                        alt=""/></span>
                                                            @else
                                                                <span class="symbol symbol-20 mr-3"><img
                                                                        src="{{asset('/dashboard/assets/media/flags/020-flag.svg')}}"
                                                                        alt=""/></span>
                                                            @endif
                                                            <span class="navi-text">{{ $properties['native'] }}</span>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Languages-->
                                <!--begin::User-->
                                <div class="topbar-item">
                                    <div
                                        class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                        id="kt_quick_user_toggle">
                                        <span
                                            class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                        <span
                                            class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->name}}</span>
                                        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
										</span>
                                    </div>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                        <!--begin::Entry-->

                    @yield('content')

                    <!--end::Entry-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Footer-->
                    <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                        <!--begin::Container-->
                        <div
                            class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted font-weight-bold mr-2"></span>

                                <a href="http://uram.com/" target="_blank" class="text-dark-75 text-hover-primary">??
                                    URAMIT</a>
                                2021 - ALL RIGHTS RESERVED UIT 2021

                            </div>
                            <!--end::Copyright-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->

        <!-- begin::User Panel-->
        <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
            <!--begin::Header-->
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
                <h3 class="font-weight-bold m-0">@if(Request::segment(1) == "ar") ???????????? ??????????????  @else User
                    Profile @endif
                    <small class="text-muted font-size-sm ml-2"></small></h3>
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="offcanvas-content pr-5 mr-n5">
                <!--begin::Header-->
                <div class="d-flex align-items-center mt-5">
                    <div class="symbol symbol-100 mr-5">
                        <div class="symbol-label"
                             style="background-image:url('{{asset('/Upload/User/'.Auth::user()->img)}}')"></div>
                        <i class="symbol-badge bg-success"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="text-muted mt-1">{{Auth::user()->name}}</div>
                        <div class="navi mt-2">
                            <a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
								    @inject('job','App\Job)
									<span
                                        class="navi-text text-muted text-hover-primary">@if($job->find(Auth::user()->mainJob_id)){{$job->find(Auth::user()->mainJob_id)->name}} @endif</span>
								</span>
                            </a>
                            <a href="/logout"
                               class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">@if(Request::segment(1) == 'ar')
                                    ?????????? ???????????? @else sign out @endif </a>
                        </div>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mt-8 mb-5"></div>
                <!--end::Separator-->
                <!--begin::Nav-->
                <div class="navi navi-spacer-x-0 p-0">
                    <!--begin::Item-->
                    <a href="/Profile" class="navi-item">
                        <div class="navi-link">
                            <div class="symbol symbol-40 bg-light mr-3">
                                <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<path
                                                    d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                    fill="#000000"/>
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"/>
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold"> {{trans('lang.profile')}}</div>
                                <div class="text-muted">???????? ???????? ???????????? ?? ??????????????????
                                    {{--								<span class="label label-light-danger label-inline font-weight-bold"></span>--}}
                                </div>
                            </div>
                        </div>
                    </a>
                    <!--end:Item-->
                    <!--end:Item-->
                </div>
                <!--end::Nav-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-7"></div>
                <!--end::Separator-->
                <!--begin::Notifications-->
                <div>
                    <!--begin:Heading-->
                    <h5 class="mb-5">Calendar</h5>
                    <!--end:Heading-->
                    <!--begin::Item-->
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">

                        <div class="card card-custom">
                            <div class="card-header">

                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                        {{__('lang.createEvent')}}
                                    </button>
                                </div>
                            </div>
                            <div id="kt_calendar"></div>
                        </div>

                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Notifications-->
            </div>
            <!--end::Content-->
        </div>
        <!-- end::User Panel-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('lang.createEvent')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/store_event" method="post">

                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label> {{__('lang.title')}}</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> {{__('lang.Date')}}</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> {{__('lang.time')}}</label>
                                <input type="time" name="time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> {{__('lang.description')}}</label>
                                <textarea name="description" class="form-control" rows="6"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{__('lang.Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('lang.save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24"/>
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
						<path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000" fill-rule="nonzero"/>
					</g>
				</svg>
                <!--end::Svg Icon-->
			</span>
        </div>
        <!--end::Scrolltop-->
        <script>var KTAppSettings = {"breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400},
                "colors": {
                    "theme": {
                        "base": {
                            "white": "#ffffff",
                            "primary": "#3699FF",
                            "secondary": "#E5EAEE",
                            "success": "#1BC5BD",
                            "info": "#8950FC",
                            "warning": "#FFA800",
                            "danger": "#F64E60",
                            "light": "#E4E6EF",
                            "dark": "#181C32"
                        },
                        "light": {
                            "white": "#ffffff",
                            "primary": "#E1F0FF",
                            "secondary": "#EBEDF3",
                            "success": "#C9F7F5",
                            "info": "#EEE5FF",
                            "warning": "#FFF4DE",
                            "danger": "#FFE2E5",
                            "light": "#F3F6F9",
                            "dark": "#D6D6E0"
                        },
                        "inverse": {
                            "white": "#ffffff",
                            "primary": "#ffffff",
                            "secondary": "#3F4254",
                            "success": "#ffffff",
                            "info": "#ffffff",
                            "warning": "#ffffff",
                            "danger": "#ffffff",
                            "light": "#464E5F",
                            "dark": "#ffffff"
                        }
                    },
                    "gray": {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#EBEDF3",
                        "gray-300": "#E4E6EF",
                        "gray-400": "#D1D3E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#7E8299",
                        "gray-700": "#5E6278",
                        "gray-800": "#3F4254",
                        "gray-900": "#181C32"
                    }
                },
                "font-family": "Poppins"
            };</script>
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="{{asset('/dashboard/assets/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{asset('/dashboard/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
        <script src="{{asset('/dashboard/assets/js/scripts.bundle.js')}}"></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Vendors(used by this page)-->
        <script src="{{asset('/dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
        <!--end::Page Vendors-->
        <!--begin::Page Scripts(used by this page)-->
        <script src="{{asset('/dashboard/assets/js/pages/widgets.js')}}"></script>
        <script>
            var KTCalendarBasic = function () {

                return {
                    //main function to initiate the module
                    init: function () {
                        var todayDate = moment().startOf('day');
                        var YM = todayDate.format('YYYY-MM');
                        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                        var TODAY = todayDate.format('YYYY-MM-DD');
                        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                        var calendarEl = document.getElementById('kt_calendar');
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list'],
                            themeSystem: 'bootstrap',

                            isRTL: KTUtil.isRTL(),

                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'dayGridMonth,timeGridWeek,timeGridDay'
                            },

                            height: 250,
                            contentHeight: 230,
                            aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                            nowIndicator: true,
                            now: TODAY + 'T09:25:00', // just for demo

                            views: {
                                dayGridMonth: {buttonText: 'month'},
                                timeGridWeek: {buttonText: 'week'},
                                timeGridDay: {buttonText: 'day'}
                            },

                            defaultView: 'dayGridMonth',
                            defaultDate: TODAY,

                            editable: true,
                            eventLimit: true, // allow "more" link when too many events
                            navLinks: true,
                            events: [
                                    @inject('events','App\Event')
                                    @foreach($events->where('user_id',Auth::user()->id)->get() as $event)
                                {
                                    title: '{{$event->title}}',
                                    start: '{{$event->date}} {{$event->time}}',
                                    description: '{{$event->description}}',
                                    className: "fc-event-danger fc-event-solid-warning"
                                },
                                @endforeach

                            ],

                            eventRender: function (info) {
                                var element = $(info.el);

                                if (info.event.extendedProps && info.event.extendedProps.description) {
                                    if (element.hasClass('fc-day-grid-event')) {
                                        element.data('content', info.event.extendedProps.description);
                                        element.data('placement', 'top');
                                        KTApp.initPopover(element);
                                    } else if (element.hasClass('fc-time-grid-event')) {
                                        element.find('.fc-title').append('<br>' + info.event.extendedProps.description);
                                    } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                        element.find('.fc-list-item-title').append('&lt;div class="fc-description"&gt;' + info.event.extendedProps.description + '&lt;/div&gt;');
                                    }
                                }
                            }
                        });

                        calendar.render();
                    }
                };
            }();

            jQuery(document).ready(function () {
                KTCalendarBasic.init();
            });
        </script>

        @yield('js')
        <!--end::Page Scripts -->
        </body>
        @include('Admin.error')
        <!-- end::Body -->
        </html>
