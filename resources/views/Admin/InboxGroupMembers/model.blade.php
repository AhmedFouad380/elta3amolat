

<form method="post" action="/Update_InboxGroupMembers">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.InboxGroupMembers_Name')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <select name="user_id" class="form-control">
                        @inject('member','App\User')

                        @foreach($member->all() as $dataa)
                            @if($dataa->id == $data->user_id)
                                <option selected value="{{$dataa->id}}">{{$dataa->name}}</option>
                            @else
                                <option value="{{$dataa->id}}">{{$dataa->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <input class="form-control" type="hidden" name="id" value="{{$data->id}}">

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.InboxGroupMembers_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.InboxGroupMembers_Save')}}</button>
    </div>
</form>






