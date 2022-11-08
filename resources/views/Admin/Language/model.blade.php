<form method="post" action="/Update_Language" enctype="multipart/form-data">
    @csrf
    <div class="col-xl-6">
        <div class="kt-section__body">

            <div class="form-group">
                <label>{{__('lang.languages_Arablic')}}:</label>
                <input type="text" name="ar_name" value="{{$Language->ar_name}}" class="form-control form-control-solid"/>
            </div>

            <div class="form-group">
                <label>{{__('lang.languages_English')}}:</label>
                <input type="text" name="en_name" value="{{$Language->en_name}}" class="form-control form-control-solid"/>
            </div>

            <div class="form-group">
                <label>{{__('lang.languages_Screen')}}:</label>
                <input type="text" name="page_name" value="{{$Language->page_name}}" class="form-control form-control-solid"/>
            </div>
            <div class="form-group">
                <label>{{__('lang.languages_Slug')}}:</label>
                <input type="text" name="slug" value="{{$Language->slug}}" class="form-control form-control-solid"/>
            </div>

            <input type="hidden" name="id" value="{{$Language->id}}" />
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.logs_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.logs_Save')}}</button>
    </div>
</form>



