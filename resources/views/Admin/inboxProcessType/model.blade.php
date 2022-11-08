

<form method="post" action="/Update_InboxProcessType">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.inboxProcessType_Name')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control" type="text" name="ar_name" value="{{$data->ar_name}}">
                    <input class="form-control" type="hidden" name="id" value="{{$data->id}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.inboxProcessType_Nameen')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control" type="text" name="en_name" value="{{$data->en_name}}">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.inboxProcessType_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.inboxProcessType_Save')}}</button>
    </div>
</form>






