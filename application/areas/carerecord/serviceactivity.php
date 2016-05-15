<!-- Three columns of text below the carousel -->
<div class="row">

    <!-- Side Navigation -->
    <?php echo $_sidenavigation; ?>

    <!-- Content -->
    <!-- Content -->
    <div class="col-md-9">
        <h1 style="margin-top:0px;">Service Activity</h1>
        <hr>
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form>
                        <fieldset>
                            <h4>
                                <span class="secondary-color">Find a Service Activity</span><br>
                            </h4>
                            <hr style="margin-top: 0">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Agency Name</label>
                                    <input class="form-control" type="text"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Staff Name</label>
                                    <input class="form-control" type="text"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Service Date</label>
                                    <input class="form-control" type="text"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label>Service Month</label>
                                    <input class="form-control" type="text"/>
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
                                        <option value="CompletedNoAction">Completed - No further action required
                                        </option>
                                        <option value="CompletedReportable">Completed - Entered into RE process</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <hr>
                                <button type="button" class="btn btn-success btn-lg"><span class="fa fa-search"></span>&nbsp;Search
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="eventCalendar2"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row section-block">
                        <h4>
                            <span class="secondary-color">Recent Service Activity</span><br>
                        </h4>
                        <hr style="margin-top: 0">
                        <h5 class="text-center">
                            <small><strong class="coolgray-color">YESTERDAY</strong></small>
                        </h5>
                        <hr style="margin-top: 0; border-color: #bbb;">


                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-xs-2 text-right">
                                <div><span style="font-weight: bold;">8:00 am</span></div>
                                <div><span style="font-weight: bold;">1:00 pm</span></div>
                            </div>
                            <div class="col-xs-10"
                                 style="padding-top: 5px; border-left: 3px solid lightgray; padding: 0 10px 0 0">
                                <div class="col-xs-8">
                                    <p class="h5 no-margin bluesteel-color">Personal Assistance (New)<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                    </p>
                                </div>
                                <div class="col-xs-4 text-right" style="padding-top: 10px;">
                                    <span class="h4">
                                        4&nbsp;<small>hrs</small>&nbsp;&nbsp;0&nbsp;<small>min
                                    </span>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <hr style="margin: 5px 0 0 0; border-color: #aaa">
                                    <a href="#" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>&nbsp;&nbsp;
                                    <a href="#" data-toggle="modal" data-target="#flagService">Flag</a>
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin-bottom: 5px; background-color: #F5FAFF; padding: 5px 0;">
                            <div class="col-xs-2 text-right">
                                <div><span style="font-weight: bold;">1:15 pm</span></div>
                                <div><span style="font-weight: bold;">7:00 pm</span></div>
                            </div>
                            <div class="col-xs-10"
                                 style="padding-top: 5px; border-left: 3px solid lightgray; padding: 0 10px 0 0">
                                <div class="col-xs-8">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant (New)<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                    </p>
                                </div>
                                <div class="col-xs-4 text-right" style="padding-top: 10px;">
                                    <span class="h4">
                                        5&nbsp;<small>hrs</small>&nbsp;&nbsp;45&nbsp;<small>min</small>
                                    </span>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <hr style="margin: 5px 0 0 0; border-color: #aaa">
                                    <a href="#" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>&nbsp;&nbsp;
                                    <a href="#" data-toggle="modal" data-target="#flagService">Flag</a>
                                </div>
                            </div>
                        </div>

                        <br>
                        <h5 class="text-center">
                            <small><strong class="coolgray-color">THURSDAY</strong></small>
                        </h5>
                        <hr style="margin-top: 0; border-color: #bbb;">


                        <div class="row" style="margin-bottom: 5px; padding: 5px 0;">
                            <div class="col-xs-2 text-right">
                                <div><span style="font-weight: bold;">8:15 am</span></div>
                                <div><span style="font-weight: bold;">10:00 am</span></div>
                            </div>
                            <div class="col-xs-10"
                                 style="padding-top: 5px; border-left: 3px solid lightgray; padding: 0 10px 0 0">
                                <div class="col-xs-8">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant (Rejected)<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                    </p>
                                </div>
                                <div class="col-xs-4 text-right" style="padding-top: 10px;">
                                    <span class="h4">
                                        1&nbsp;<small>hrs</small>&nbsp;&nbsp;45&nbsp;<small>min</small>
                                    </span>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <hr style="margin: 5px 0 0 0; border-color: #aaa">
                                    <a href="#" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>


                        <br>
                        <h5 class="text-center">
                            <small><strong class="coolgray-color">WEDNESDAY</strong></small>
                        </h5>
                        <hr style="margin-top: 0; border-color: #bbb;">


                        <div class="row" style="margin-bottom: 10px; padding: 5px 0;">
                            <div class="col-xs-2 text-right">
                                <div><span style="font-weight: bold;">7:45 am</span></div>
                                <div><span style="font-weight: bold;">1:10 pm</span></div>
                            </div>
                            <div class="col-xs-10"
                                 style="padding-top: 5px; border-left: 3px solid lightgray; padding: 0 10px 0 0">
                                <div class="col-xs-8">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant (Paid)<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                    </p>
                                </div>
                                <div class="col-xs-4 text-right" style="padding-top: 10px;">
                                    <span class="h4">
                                        5&nbsp;<small>hrs</small>&nbsp;&nbsp;25&nbsp;<small>min</small>
                                    </span>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <hr style="margin: 5px 0 0 0; border-color: #aaa">
                                    <a href="#" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>&nbsp;&nbsp;
                                    <a href="#" data-toggle="modal" data-target="#flagService">Flagged</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->


    <!-- Modals -->

    <!-- Modal - Service Activity Details -->
    <?php echo $_serviceactivitydetails_modal; ?>

    <!-- Modal - Send Message -->
    <?php echo $_flagservice_modal; ?>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#eventCalendar1').fullCalendar({
                //defaultView: 'basicWeek',
                height: 300,
                header: {
                    left: 'title',
                    center: '',
                    right: ''
                },
                titleFormat: 'MMMM yyyy \'(prev)\'',
                events: [
                    {
                        id: '1',
                        title: 'Nurse Visit',
                        start: '2016-05-08'
                    },
                    {
                        id: '2',
                        title: 'Service Activity',
                        start: '2016-05-08'
                    },
                    {
                        id: '3',
                        title: 'Service Activity',
                        start: '2016-05-09'
                    },
                    {
                        id: '4',
                        title: 'Dr. Appointment',
                        start: '2016-05-09'
                    },
                    {
                        id: '5',
                        title: 'Dr. Appointment',
                        start: '2016-05-10'
                    },
                    {
                        id: '6',
                        title: 'Service Activity',
                        start: '2016-05-11'
                    }, {
                        id: '7',
                        title: 'Nurse Visit',
                        start: '2016-05-13'
                    }, {
                        id: '8',
                        title: 'Nurse Visit',
                        start: '2016-05-13'
                    }
                ]

            });
            $('#eventCalendar2').fullCalendar({
                //defaultView: 'basicWeek',
                height: 500,
                header: {
                    left: 'title',
                    center: '',
                    right: 'today prev next month agendaWeek agendaDay'
                },
                events: [
                    {
                        id: '1',
                        title: 'Nurse Visit',
                        start: '2016-05-08'
                    },
                    {
                        id: '2',
                        title: 'Service Activity',
                        start: '2016-05-08'
                    },
                    {
                        id: '3',
                        title: 'Service Activity',
                        start: '2016-05-09'
                    },
                    {
                        id: '4',
                        title: 'Dr. Appointment',
                        start: '2016-05-09'
                    },
                    {
                        id: '5',
                        title: 'Dr. Appointment',
                        start: '2016-05-10'
                    },
                    {
                        id: '6',
                        title: 'Service Activity',
                        start: '2016-05-11'
                    }, {
                        id: '7',
                        title: 'Nurse Visit',
                        start: '2016-05-13'
                    }, {
                        id: '8',
                        title: 'Nurse Visit',
                        start: '2016-05-13'
                    }
                ]

            });
            $('#eventCalendar3').fullCalendar({
                //defaultView: 'basicWeek',
                height: 400,
                header: {
                    left: 'title',
                    center: '',
                    right: ''
                },
                titleFormat: 'MMMM yyyy \'(next)\'',
                events: [
                    {
                        id: '1',
                        title: 'Nurse Visit',
                        start: '2016-05-08'
                    },
                    {
                        id: '2',
                        title: 'Service Activity',
                        start: '2016-05-08'
                    },
                    {
                        id: '3',
                        title: 'Service Activity',
                        start: '2016-05-09'
                    },
                    {
                        id: '4',
                        title: 'Dr. Appointment',
                        start: '2016-05-09'
                    },
                    {
                        id: '5',
                        title: 'Dr. Appointment',
                        start: '2016-05-10'
                    },
                    {
                        id: '6',
                        title: 'Service Activity',
                        start: '2016-05-11'
                    }, {
                        id: '7',
                        title: 'Nurse Visit',
                        start: '2016-05-13'
                    }, {
                        id: '8',
                        title: 'Nurse Visit',
                        start: '2016-05-13'
                    }
                ]

            });
        });
        $('#eventCalendar1').fullCalendar('prev');
        $('#eventCalendar3').fullCalendar('next');
    </script>