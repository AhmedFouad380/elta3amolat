

<form method="post" action="/Update_inboxType">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.inboxType_Name')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control" type="text" name="ar_name" value="{{$data->ar_name}}">
                    <input class="form-control" type="hidden" name="id" value="{{$data->id}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.inboxType_Nameen')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control" type="text" name="en_name" value="{{$data->en_name}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.inboxType_Director')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control" type="checkbox" @if($data->role == 1) checked @endif name="role" value="1" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.inboxType_Assignment')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <select class="form-control" name="type">
                        @if($data->type == 1)
                            <option selected value="1"> {{__('lang.inboxType_tosave')}} </option>
                            <option value="2"> {{__('lang.inboxType_export')}}  </option>
                            <option value="3"> {{__('lang.inboxType_Other')}}  </option>
                        @elseif($data->type == 2 )
                            <option value="1"> {{__('lang.inboxType_tosave')}} </option>
                            <option selected value="2"> {{__('lang.inboxType_export')}}  </option>
                            <option value="3"> {{__('lang.inboxType_Other')}}  </option>
                        @elseif($data->type == 2 )
                            <option value="1"> {{__('lang.inboxType_tosave')}} </option>
                            <option value="2"> {{__('lang.inboxType_export')}}  </option>
                            <option  selected value="3"> {{__('lang.inboxType_Other')}}  </option>
                        @endif

                    </select>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.inboxType_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.inboxType_Save')}}</button>
    </div>
</form>






