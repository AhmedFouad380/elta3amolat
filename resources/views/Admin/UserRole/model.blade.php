<form method="post" action="/Update_UserRole">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.Nationality_Name')}}</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control" type="text" name="name" value="{{$data->name}}" required>
                    <input class="form-control" type="hidden" name="id" value="{{$data->id}}" required>
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox-inline">
                    <label class="checkbox" style="font-size: 20px;">
                        <input type="checkbox" onclick="transactionsFunction1()" @if($data->transactions == 1) checked
                               @endif id="transactions" name="transactions" value="1"/>
                        <span></span>{{__('lang.Transactions')}}</label>
                </div>
            </div>
            <div class="form-group" id="transactionsBody1"
                 @if($data->transactions == 0)  style="display: none;" @endif >
                <label>المحتويات </label>
                <div class="checkbox-list">
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_Inbox == 1) checked
                               @endif name="transactions_Inbox" value="1"/>
                        <span></span>{{__('lang.Transactionsmincoming')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_OutBox == 1) checked
                               @endif name="transactions_OutBox" value="1"/>
                        <span></span> {{__('lang.TransactionsOutgoing')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_create_in == 1) checked
                               @endif name="transactions_create_in" value="1"/>
                        <span></span>{{__('lang.TransactionsmCreate')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_create_out == 1) checked
                               @endif name="transactions_create_out" value="1"/>
                        <span></span> {{__('lang.Transactionsmoutbound')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_report == 1) checked
                               @endif name="transactions_report" value="1"/>
                        <span></span> {{__('lang.Transactionsmreports')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_archive == 1) checked
                               @endif name="transactions_archive" value="1"/>
                        <span></span>{{__('lang.TransactionsmSave')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_archive_out == 1) checked
                               @endif name="transactions_archive_out" value="1"/>
                        <span></span> {{__('lang.Transactionsmexport')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_search == 1) checked
                               @endif name="transactions_search" value="1"/>
                        <span></span>{{__('lang.TransactionsmSearch')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" @if($data->transactions_advancedsearch == 1) checked
                               @endif name="transactions_advancedsearch" value="1"/>
                        <span></span> {{__('lang.TransactionsmSecret')}} </label>


                </div>
            </div>
            <div class="form-group">
                <div class="checkbox-inline">
                    <label class="checkbox" style="font-size: 20px;">
                        <input type="checkbox" onclick="resourcesFunction1()" @if($data->resources == 1) checked
                               @endif name="resources" value="1"/>
                        <span></span>{{__('lang.HR')}}</label>
                </div>
            </div>
            <div class="form-group" id="resourcesBody1" @if($data->resources == 0) style="display: none;" @endif >
                <label>المحتويات </label>
                <div class="checkbox-list">
                    <label class="checkbox">
                        <input type="checkbox" name="resources_category" @if($data->resources_category == 1) checked
                               @endif  value="1"/>
                        <span></span> {{__('lang.HRList')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="resources_jobs" @if($data->resources_jobs == 1) checked
                               @endif value="1"/>
                        <span></span> {{__('lang.HRSettings')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="resources_users" @if($data->resources_users == 1) checked
                               @endif value="1"/>
                        <span></span> {{__('lang.HRStaff')}}</label>

                    <label class="checkbox">
                        <input type="checkbox" name="bounses" @if($data->bounses == 1) checked @endif value="1"/>
                        <span></span> {{__('lang.Bounses')}}
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="system_vacations" @if($data->system_vacations == 1) checked @endif value="1"/>
                        <span></span> {{__('lang.systemVacation')}}
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="shifts" @if($data->shifts == 1) checked @endif value="1"/>
                        <span></span> {{__('lang.shifts')}}
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="reports" @if($data->reports == 1) checked @endif value="1"/>
                        <span></span> {{__('lang.Reports')}}
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox-inline">
                    <label class="checkbox" style="font-size: 20px;">
                        <input type="checkbox" onclick="settingsFunction1()" @if($data->settings == 1) checked
                               @endif   name="settings" value="1"/>
                        <span></span>{{__('lang.Settings')}} </label>
                </div>
            </div>
            <div class="form-group" id="settingsBody1" @if($data->settings == 0) style="display: none;" @endif>
                <label>المحتويات </label>
                <div class="checkbox-list">
                    <label class="checkbox">
                        <input type="checkbox" name="settings_categoryUnits"
                               @if($data->settings_categoryUnits == 1) checked @endif  value="1"/>
                        <span></span> {{__('lang.UnitsSettings')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="settings_jopType" @if($data->settings_jopType == 1) checked
                               @endif  value="1"/>
                        <span></span> {{__('lang.Settingsjobs')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="settings_banks" @if($data->settings_banks == 1) checked
                               @endif  value="1"/>
                        <span></span> {{__('lang.BankSettings')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="settings_nationality" @if($data->settings_nationality == 1) checked
                               @endif  value="1"/>
                        <span></span> {{__('lang.SettingsNationalities')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="settings_attachmentCategory"
                               @if($data->settings_attachmentCategory == 1) checked @endif  value="1"/>
                        <span></span> {{__('lang.SettingsAttachment')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="settings_inboxProcessType"
                               @if($data->settings_inboxProcessType == 1) checked @endif  value="1"/>
                        <span></span> {{__('lang.Settingsmail')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="settings_inboxType" @if($data->settings_inboxType == 1) checked
                               @endif  value="1"/>
                        <span></span> {{__('lang.MailSettings')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="settings_InboxGroup" @if($data->settings_InboxGroup == 1) checked
                               @endif  value="1"/>
                        <span></span> {{__('lang.MaSettings')}}</label>
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox-inline">
                    <label class="checkbox" style="font-size: 20px;">
                        <input type="checkbox" onclick="copanelFunction1()" @if($data->copanel == 1) checked
                               @endif name="copanel" value="1"/>
                        <span></span>{{__('lang.Control')}} </label>
                </div>
            </div>
            <div class="form-group" id="copanelBody1" @if($data->copanel == 0) style="display: none;" @endif>
                <label> </label>
                <div class="checkbox-list">
                    <label class="checkbox">
                        <input type="checkbox" name="copanel_roles" @if($data->copanel_roles == 1) checked
                               @endif value="1"/>
                        <span></span> {{__('lang.Control_Permissions')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="copanel_setting" @if($data->copanel_setting == 1) checked
                               @endif value="1"/>
                        <span></span> {{__('lang.Control_master')}}</label>
                    <label class="checkbox">
                        <input type="checkbox" name="copanel_logs" @if($data->copanel_logs == 1) checked
                               @endif value="1"/>
                        <span></span> {{__('lang.Control_Language')}}</label>

                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.Nationality_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.Nationality_Save')}}</button>
    </div>
</form>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.

    function transactionsFunction1() {
        var x = document.getElementById("transactionsBody1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function resourcesFunction1() {
        var x = document.getElementById("resourcesBody1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function copanelFunction1() {
        var x = document.getElementById("copanelBody1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function settingsFunction1() {
        var x = document.getElementById("settingsBody1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

</script>
