<div class="modal fade" id="editEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">



		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit Login Account</h4>
				<hr style="margin: 0">
			</div>
			<div class="modal-body" style="padding-top: 0">

				<div class="row">
					<div class="col-xs-12">
						<label class="control-label col-xs-4"><strong>Username:</strong></label>
						<div class="col-sm-8"><span class="value" style="margin-top: 2px; display: block">CSmith</span></div>
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-xs-12">
						<label class="control-label col-sm-4 required">
							<strong>Email Address:</strong>
						</label>
                        <div class="col-xs-12 col-sm-8"><input type="text" required class="form-control" value="casmith@live.com">
                            <span class="sublabel">example@mail.com</span></div>
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-xs-12">
						<label class="control-label col-sm-4 required">
							<strong>Phone #:</strong>
						</label>
						<div class="col-xs-12 col-sm-8"><input type="text" required class="form-control" value="240-305-2412">
                            <span class="sublabel">123-456-7890</span></div>
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-xs-12">
						<label for="phoneType" class="col-sm-4 control-label required"><strong>Phone Type:</strong></label>
						<div class="col-sm-8 col-xs-12">
							<select required class="form-control methodOfCom" id="phoneType">
								<option></option>
								<option value="home">Home</option>
								<option value="cell">Cell</option>
								<option value="business">Business</option>
								<option value="other">Other</option>
							</select>
						</div>
					</div>
				</div>








				<div class="modal-footer" style="margin-top:0;">
					<hr style="margin: 0 -15px 23px -15px;">
					<button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>

</div><!-- /.modal -->