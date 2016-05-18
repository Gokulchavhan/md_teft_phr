<div class="modal fade" id="flaggedService" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Flagged Service<p class="lead" style="margin-bottom: 0; width: auto; position: relative; top: 0"> flagged on 05/17/2016</p></h4>
                <hr style="margin: 0">
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <label><b>Reason for Flagging:</b></label>
                        <select disabled="disabled" class="form-control">
                            <option></option>
                            <optgroup label="Life and Safety">
                                <option>Quality of Care concerns</option>
                            </optgroup>
                            <optgroup label="Provider Issues">
                                <option selected>
                                    Provider did not show up/clock in/out time is inaccurate
                                </option>
                                <option >
                                    Provider took the OTP
                                </option>
                                <option >
                                    Wrong staff listed on the service
                                </option>
                                <option >
                                    Wrong agency listed on the service
                                </option>
                                <option >
                                    Clarification about missing time
                                </option>
                            </optgroup>
                            <optgroup label="POS Issues">
                                <option>
                                    Hospitalized during service time
                                </option>
                                <option>
                                    Question about why service was adjusted
                                </option>
                            </optgroup>
                            <option><b>Other (please describe in comments)</b></option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <label><b>Comments/Additional Information</b></label>
                        <textarea disabled="disabled" class="form-control">Provider showed up 7 hours late!!!</textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <hr style="margin-top: 0; margin-bottom: 15px">
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
</div><!-- /.modal -->