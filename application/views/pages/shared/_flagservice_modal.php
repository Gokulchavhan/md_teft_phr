<div class="modal fade" id="flagService" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Flag Service</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<label><b>Reason for Flagging:</b></label>
						<select class="form-control">
							<option></option>
							<optgroup label="Life and Safety">
								<option>Quality of Care concerns</option>
							</optgroup>
							<optgroup label="Provider Issues">
								<option >
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
						<textarea class="form-control"></textarea>
					</div>
				</div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <label><input type="checkbox"  /> Are you sure you want to continue? If yes, please note that by clicking on send, the flags will be sent to DHMH for review.</label>
                    </div>
                </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary btn-lg">Send</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->