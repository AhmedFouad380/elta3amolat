<form method="post" action="/Update_Bonuses">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">



            <div class="form-group">
                <strong>{{trans('lang.bonName')}}</strong>
                {{ Form::text('name',$Bonuses->name,["class"=>"form-control",'required' ]) }}
                <input class="form-control" type="hidden" name="id" value="{{$Bonuses->id}}">
            </div>

            <div class="form-group">
                <strong>{{trans('lang.overtime')}}</strong>
                {{ Form::number('overtime',$Bonuses->overtime,["class"=>"form-control" , 'step' => 'any' ,'max'=>'10' ,'required' ]) }}
            </div>

            <div class="form-group">
                <strong>{{trans('lang.late')}}</strong>
                {{ Form::number('late',$Bonuses->late,["class"=>"form-control" , 'step' => 'any','max'=>'10','required']   ) }}
            </div>

            <div class="form-group">
                <strong>{{trans('lang.early')}}</strong>
                {{ Form::number('early',$Bonuses->early,["class"=>"form-control" , 'step' => 'any' ,'max'=>'10','required']  ) }}
            </div>


            <div class="form-group">
                <strong>{{trans('lang.notsign')}}</strong>
                {{ Form::number('notsign',$Bonuses->notsign,["class"=>"form-control", 'step' => 'any' ,'max'=>'10','required']  ) }}
            </div>


            <div class="form-group">
                <strong>{{trans('lang.absence')}}</strong>
                {{ Form::number('absence',$Bonuses->absence,["class"=>"form-control", 'step' => 'any','max'=>'10' ,'required']) }}
            </div>


        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.Bonuses_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.Bonuses_Save')}}</button>
    </div>
</form>



