<!-- Three columns of text below the carousel -->
<div class="row">

    <!-- Side Navigation -->
    <?php echo $_sidenavigation; ?>
    <div class="col-sm-12 col-md-3 affix affixed-side-content no-padding" style="top: 250px;">
        <div class="col-sm-6 col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>
                        <span class="secondary-color">Plan of Service Summary</span><br>
                        <span class="h5 no-margin"><small><i>as of 03/15/2016</i></small></span>
                    </h4>
                    <hr style="margin: 0">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="value h4"><small>starts</small><br><span>03/15/2016</span></span>
                        </div>
                        <div class="col-sm-12">
                            <span class="value h4"><small>ends</small><br><span>03/14/2017</span></span>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4 class="secondary-color">Weekly Services<br>
                        <span class="h5 no-margin"><small><i>maximum allowable</i></small></span>
                    </h4>
                    <hr style="margin: 0">
                    <div class="col-sm-12 no-padding">
                        <span class="value h3">20&nbsp;<small>hrs.</small></span>
                    </div>
                    <div class="col-sm-12 no-padding">
                        <span class="value h3">40&nbsp;<small>units</small></span>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

    <!-- Content -->
    <!-- Content -->
    <div class="col-md-9">
        <h1 style="margin-top:0px;">Service Activity</h1>
        <hr>
        <div class="col-xs-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading profilePanel" data-toggle="collapse" href="#collapseOne" role="button">
                        <h4 class="panel-title">
                            <a>
                                <span class="fa fa-chevron-down"></span>
                                Search
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form>
                                <fieldset>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Provider Agency</label>
                                            <select class="form-control">
                                                <option value="All">All</option>
                                                <option value="Telephone">Tru-Care Providers</option>
                                                <option value="Manual">Adult Day Care</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Provider Staff</label>
                                            <select class="form-control">
                                                <option value="All">All</option>
                                                <option value="Telephone">Candace Kind</option>
                                                <option value="Manual">Gladice Tuhelp</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Date of Service</label>
                                            <input class="form-control" type="text" id="serviceDate"/>

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Service Month</label>
                                            <select class="form-control">
                                                <option value="All">Select</option>
                                                <option value="All">January</option>
                                                <option value="Telephone">February</option>
                                                <option value="Telephone">March</option>
                                                <option value="Telephone">April</option>
                                                <option value="Telephone">May</option>
                                                <option value="Telephone">June</option>
                                                <option value="Telephone">July</option>
                                                <option value="Telephone">August</option>
                                                <option value="Telephone">September</option>
                                                <option value="Telephone">October</option>
                                                <option value="Telephone">November</option>
                                                <option value="Telephone">December</option>
                                            </select>
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
                                                <option value="Manual">Claim Rejected</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Flag Status</label>
                                            <select class="form-control">
                                                <option value="All">All</option>
                                                <option value="Flagged">Pending Review</option>
                                                <option value="Reviewed">Under Review</option>
                                                <option value="CompletedNoAction">Completed - No further action
                                                    required
                                                </option>
                                                <option value="CompletedReportable">Completed - Escalated to a
                                                    Reportable Event
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <br class="hidden-xs">
                                        <div class="checkbox">
                                            <label class="checkbox">
                                                <input type="checkbox" class="checkbox"> <span style="position: relative; bottom: 4px">Show Only Flagged Services</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <hr>
                                        <button type="button" class="btn btn-default btn-lg" onclick="clearSearch();">
                                            <span class="fa fa-remove"></span>&nbsp;Clear
                                        </button>
                                        &nbsp;&nbsp;
                                        <button type="button" class="btn btn-success btn-lg"
                                                onclick="searchServiceActivities();"><span class="fa fa-search"></span>&nbsp;Search
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="calendarContainer" class="row" style="margin-bottom: 30px;">
                        <div class="col-sm-12">
                            <div id="eventCalendar2"></div>
                        </div>
                    </div>
                    <div id="recentServiceActivity" class="row section-block">
                        <h3>
                            <span class="secondary-color">Recent Service Activity</span><br>
                        </h3>
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
                                <div class="col-sm-8">
                                    <p class="h5 no-margin bluesteel-color">Personal Assistance<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                        <br>
                                        <span style="font-size: 80%"><strong>New Service Activity</strong></span>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-right" style="padding-top: 10px;">
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
                                <div class="col-sm-8">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                        <br>
                                        <span style="font-size: 80%"><strong>New Service Activity</strong></span>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-right" style="padding-top: 10px;">
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
                                <div class="col-sm-8">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                        <br>
                                        <span style="font-size: 80%"><strong>Claim Rejected</strong></span>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-right" style="padding-top: 10px;">
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
                                <div class="col-sm-9">
                                    <p class="h5 no-margin bluesteel-color">
                                        <span class="fa fa-flag" style="color: #FF9800; padding-right: 6px"></span>Shared
                                        Attendant<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                        <br>
                                        <span
                                            style="font-size: 80%"><strong>Claim Paid</strong> - Flag Pending Review</span>
                                    </p>
                                </div>
                                <div class="col-sm-3 text-right" style="padding-top: 10px;">
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
                    <div id="searchResults" class="" style="display: none;">
                        <button class="btn btn-primary pull-right"><i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp; Print</button>
                        <h3>
                            <span class="secondary-color">Search Results</span><br>
                        </h3>
                        <hr style="margin-top: 0">
                        <h5 class="text-center">
                            <small><strong class="coolgray-color">August 3, 2016</strong></small>
                        </h5>
                        <hr style="margin-top: 0; border-color: #bbb;">


                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-xs-2 text-right">
                                <div><span style="font-weight: bold;">8:00 am</span></div>
                                <div><span style="font-weight: bold;">1:00 pm</span></div>
                            </div>
                            <div class="col-xs-10"
                                 style="padding-top: 5px; border-left: 3px solid lightgray; padding: 0 10px 0 0">
                                <div class="col-sm-8">
                                    <p class="h5 no-margin bluesteel-color">Personal Assistance<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                        <br>
                                        <span style="font-size: 80%"><strong>New Service Activity</strong></span>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-right" style="padding-top: 10px;">
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
                                <div class="col-sm-8">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                        <br>
                                        <span style="font-size: 80%"><strong>New Service Activity</strong></span>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-right" style="padding-top: 10px;">
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
                            <small><strong class="coolgray-color">August 14, 2016</strong></small>
                        </h5>
                        <hr style="margin-top: 0; border-color: #bbb;">


                        <div class="row" style="margin-bottom: 5px; padding: 5px 0;">
                            <div class="col-xs-2 text-right">
                                <div><span style="font-weight: bold;">8:15 am</span></div>
                                <div><span style="font-weight: bold;">10:00 am</span></div>
                            </div>
                            <div class="col-xs-10"
                                 style="padding-top: 5px; border-left: 3px solid lightgray; padding: 0 10px 0 0">
                                <div class="col-sm-8">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                        <br>
                                        <span style="font-size: 80%"><strong>Claim Rejected</strong></span>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-right" style="padding-top: 10px;">
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
                            <small><strong class="coolgray-color">August 29, 2016</strong></small>
                        </h5>
                        <hr style="margin-top: 0; border-color: #bbb;">


                        <div class="row" style="margin-bottom: 10px; padding: 5px 0;">
                            <div class="col-xs-2 text-right">
                                <div><span style="font-weight: bold;">7:45 am</span></div>
                                <div><span style="font-weight: bold;">1:10 pm</span></div>
                            </div>
                            <div class="col-xs-10"
                                 style="padding-top: 5px; border-left: 3px solid lightgray; padding: 0 10px 0 0">
                                <div class="col-sm-9">
                                    <p class="h5 no-margin bluesteel-color">
                                        <span class="fa fa-flag" style="color: #FF9800; padding-right: 6px"></span>Shared
                                        Attendant<br>
                                        <small>performed by:&nbsp;<strong>Candace Kind</strong>&nbsp;(Tru-Care
                                            Providers)
                                        </small>
                                        <br>
                                        <span style="font-size: 80%"><strong>Claim Paid</strong> - Flag Reviewed, No Action Required</span>
                                    </p>
                                </div>
                                <div class="col-sm-3 text-right" style="padding-top: 10px;">
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

            $("#serviceDate").datepicker();

            searchServiceActivities = function () {
                $('#calendarContainer, #recentServiceActivity').hide();
                $('#searchResults').show();
            };


            clearSearch = function () {
                $('#calendarContainer, #recentServiceActivity').show();
                $('#searchResults').hide();
            };


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