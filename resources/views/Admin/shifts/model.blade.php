<form method="post" action="/Update_shifts">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">



            <div class="form-group">
                <strong>{{trans('lang.shiftname')}}</strong>
                {{ Form::text('name',$Shift->name,["class"=>"form-control",'required' ]) }}
                <input class="form-control" type="hidden" name="id" value="{{$Shift->id}}">
            </div>


            <div class="form-group">
                <strong>{{trans('lang.delay')}}</strong>
                {{ Form::text('delayallowed',$Shift->delayallowed ,["class"=>"form-control" ]) }}
            </div>

            <div class="form-group">
                <strong>{{trans('lang.leave')}}</strong>
                {{ Form::text('leaveallowed',$Shift->leaveallowed ,["class"=>"form-control" ]) }}
            </div>



        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.Banks_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.Banks_Save')}}</button>
    </div>
</form>



