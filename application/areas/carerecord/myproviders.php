<!-- Three columns of text below the carousel -->
<div class="row">

    <!-- Side Navigation -->
    <?php echo $_sidenavigation; ?>

    <!-- Content -->
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="col-sm-12">
            <div class="row">
                <h1>My Services and Claims</h1>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form>
                        <fieldset>
                            <legend>Find a Service</legend>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Agency Name</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Staff Name</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Service Date</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Service Month</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Service Initiation Source</label>
                                    <select class="form-control">
                                        <option value="All">All</option>
                                        <option value="Telephone">Telephone</option>
                                        <option value="Manual">Manual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Claim Status</label>
                                    <select class="form-control">
                                        <option value="All">All</option>
                                        <option value="In Process">In Process</option>
                                        <option value="Telephone">Paid</option>
                                        <option value="Manual">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Flag Status</label>
                                    <select class="form-control">
                                        <option value="All">All</option>
                                        <option value="Flagged">Flagged</option>
                                        <option value="Reviewed">Reviewed</option>
                                        <option value="CompletedNoAction">Completed - No further action required</option>
                                        <option value="CompletedReportable">Completed - Entered into RE process</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p class="lead">Results</p>
                <hr />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <span class="serviceTime">yesterday</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="serviceName">Profe <span class="lead">administered by John Doe between 12:00 PM and 3:00 PM</span></p>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-7">
                                    <address>
                                    <div class="col-xs-6"><strong>Hours:</strong> 3</div>
                                    <div class="col-xs-6"><strong>Units:</strong> 17</div>
                                    </address>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-7">
                                    <address>
                                    <div class="col-xs-6"><strong>Claim Type:</strong> Original</div>
                                    <div class="col-xs-6"><strong>Claim Status:</strong> Paid</div>
                                    </address>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="col-xs-6">
                                        <button type="button" class="btn btn-primary btn-block">View</button>
                                    </div>
                                    <div class="col-xs-6">
                                        <button type="button" class="btn btn-primary btn-block">Flag</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div><!-- /.row -->


<!-- Modals -->

<!-- Modal - Remove -->
<?php echo $_removeconfirmation_modal; ?>

<!-- Modal - View Provider -->
<?php echo $_view_provider_modal; ?>

<!-- Modal - Share service information -->
<?php echo $_shareserviceinfo_modal; ?>

<!-- Modal - Send Message -->
<?php echo $_sendmessage_modal; ?>