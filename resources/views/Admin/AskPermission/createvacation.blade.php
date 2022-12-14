@extends('layout.layout')

@section('title')
    {{__('lang.vacationrequest')}}
@endsection
@section('css')
    <link href="{{asset('hijri/css/bootstrap-datetimepicker.css')}}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->

                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('resources')}}" class="text-muted">{{trans('lang.HR')}}</a>
                        </li>
                        {{--                            <li class="breadcrumb-item">--}}
                        {{--                                <a href="" class="text-muted">Profile</a>--}}
                        {{--                            </li>--}}

                        <li class="breadcrumb-item">
                            <h5 class="text-dark font-weight-bold my-1 mr-5 ">{{trans('lang.vacationrequest')}}</h5>
                        </li>
                    </ul>

                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
        </div>
    </div>

    <!--begin::Container-->

    <br>
    <br>
    <br>
    {!! Form::open(['url' => ['vacationrequest'] , 'method'=>'post']) !!}
    {{ csrf_field() }}

    <div class="col-xl-12">
        <div class="kt-section__body">

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.from_date')}}</label>
                <div class="col-lg-6 col-xl-6">
{{--                     {{ Form::date('from_date',old('from_date'),["class"=>"form-control" , "required" ]) }}--}}
                    <input class="form-control hijri-date-input" type="text" value="" name="from_date"
                           required/>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.to_date')}}</label>
                <div class="col-lg-6 col-xl-6">
{{--                     {{ Form::date('to_date',old('to_date'),["class"=>"form-control" , "required" ]) }}--}}
                    <input class="form-control hijri-date-input" type="text" value="" name="to_date"
                           required/>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.reason')}}</label>
                <div class="col-lg-6 col-xl-6">
{{--                     {{ Form::text('reason',old('reason'),["class"=>"form-control" , "required" ]) }}--}}
                    <select name="reason" id="reason" class='form-control'>
                            <option value="?????????? ??????????">?????????? ??????????</option>
                            <option value="?????????? ????????">?????????? ????????</option>
                            <option value="?????????? ????????">?????????? ????????</option>
                            <option value="?????????? ??????????">?????????? ??????????</option>
                            <option value="?????????? ???????? ????????">?????????? ???????? ????????</option>
                            <option value="?????????? ????????????????">?????????? ????????????????</option>
                            <option value="?????????? ??????">?????????? ??????</option>
                            <option value="?????????? ??????????????">?????????? ??????????????</option>
                    </select>

                </div>
            </div>
            
            <div class="form-group row" >
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.available_holidays')}}</label>
                <div class="col-lg-6 col-xl-6" >
                    <input type="text" id="Holidays" class="form-control" disabled>
                    
                </div>
            </div>
            @php
                $job_id=auth()->user()->mainJob_id;
                $job = App\Job::where('id',$job_id)->first();

            if($job->job_role == 1){

            @endphp
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.for_employee')}}</label>
                <div class="col-lg-6 col-xl-6">
                    <input type="checkbox" id="myCheck" onclick="myFunction()">
                </div>
            </div>

            <div class="form-group row" id="text" style="display:none">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.employee')}}</label>
                <div class="col-lg-6 col-xl-6">
                    <select name="user_id" id="user_id" class='form-control'>
                        <option value="">{{trans('lang.selectEmp')}}</option>

                        @foreach($dept_employee as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>

                        @endforeach
                    </select>

                </div>
            </div>

            @php
                }
            @endphp


        </div>
    </div>
    <div style="text-align: center">
        {{ Form::submit(  __('lang.VacationRequest_Save') ,['class'=>'btn btn-primary ' ]) }}
        {{ Form::close() }}
    </div>






@section('js')
    <script src="{{asset('hijri/js/momentjs.js')}}"></script>
    <script src="{{asset('hijri/js/moment-with-locales.js')}}"></script>
    <script src="{{asset('hijri/js/moment-hijri.js')}}"></script>
    <script src="{{asset('hijri/js/bootstrap-hijri-datetimepicker.js')}}"></script>

    <!--begin::Page scripts(used by this page) -->
    <script type="text/javascript">
        $(document).ready(function() {
            var id={{Auth::user()->id}}
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('getHolidays')}}",
                data: {"id":id},
                success: function (data) {
                   $('#Holidays').val(data);
                }
            })
        })
            $("#user_id").click(function(){
            var id=$(this).val()
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('getHolidays')}}",
                data: {"id":id},
                success: function (data) {
                    $('#Holidays').val(data);

                }
            })
        })

        $(function () {

            initHijrDatePicker();

            //initHijrDatePickerDefault();

            $('.disable-date').hijriDatePicker({

                minDate: "2020-01-01",
                maxDate: "2021-01-01",
                viewMode: "years",
                hijri: true,
                debug: true
            });

        });

        function initHijrDatePicker() {

            $(".hijri-date-input").hijriDatePicker({
                locale: "ar-sa",
                format: "DD-MM-YYYY",
                hijriFormat: "iYYYY-iMM-iDD",
                dayViewHeaderFormat: "MMMM YYYY",
                hijriDayViewHeaderFormat: "iMMMM iYYYY",
                showSwitcher: true,
                allowInputToggle: true,
                showTodayButton: false,
                useCurrent: true,
                isRTL: false,
                viewMode: 'months',
                keepOpen: false,
                hijri: false,
                debug: true,
                showClear: true,
                showTodayButton: true,
                showClose: true
            });
        }

        function initHijrDatePickerDefault() {

            $(".hijri-date-input").hijriDatePicker();
        }


    </script>
    <script>
        function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("text");
            if (checkBox.checked == true){
                text.style.display = "";
            } else {
                text.style.display = "none";
            }
        }
    </script>
    @if( session()->has("message"))
        @if( $message == "Success")
            <script>
                Swal.fire({
                    icon: 'success',
                    title: "@if(Request::segment(1)=='ar')  ???????? @else Le succ??s @endif",
                    text: "@if(Request::segment(1)=='ar')  ?????? ?????????????? ??????????   @else compl??t?? avec succ??s @endif",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });

            </script>
        @elseif ( $message == "Failed")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{trans('word.Sorry')}}",
                    text: "{{trans('word.the operation failed')}}",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
    @endif
@endsection
@endsection
