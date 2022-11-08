

<form method="post" action="/Update_InboxGroup">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.InboxGroup_Name')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control" type="text" name="name" value="{{$data->name}}">
                    <input class="form-control" type="hidden" name="id" value="{{$data->id}}">
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.InboxGroup_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.InboxGroup_Save')}}</button>
    </div>
</form>






