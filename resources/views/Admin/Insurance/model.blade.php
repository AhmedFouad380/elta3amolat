<form method="post" action="/Update_Insurance">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.Banks_Name')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control" type="text" name="name" value="{{$Bank->name}}">
                    <input class="form-control" type="hidden" name="id" value="{{$Bank->id}}">
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.Banks_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.Banks_Save')}}</button>
    </div>
</form>



