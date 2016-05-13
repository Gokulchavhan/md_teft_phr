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
                            <legend>Find a Service</legend>
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
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="eventCalendar2"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-xs-6 col-sm-12">
                            <h4>
                                <span class="secondary-color">Recent Service Activity</span><br>
                            </h4>
                            <hr style="margin-top: 0">
                            <h5 class="text-center"><strong>Yesterday</strong></h5>
                            <hr style="margin-top: 0">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-xs-3 text-right" style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
                                    <div><span style="font-weight: bold; font-size: 80%">1:15pm</span></div>
                                    <div><span style="font-weight: bold; font-size: 80%">7:00pm</span></div>
                                </div>
                                <div class="col-xs-8" style="padding-top: 5px;">
                                    <p class="h5 no-margin">Shared Attendant</p>
                                    <div>
                                        <a href="#">Details</a>&nbsp;&nbsp;
                                        <a href="#">Flag</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-xs-3 text-right" style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
                                    <div><span style="font-weight: bold; font-size: 80%">8:00am</span></div>
                                    <div><span style="font-weight: bold; font-size: 80%">1:00pm</span></div>
                                </div>
                                <div class="col-xs-8" style="padding-top: 5px;">
                                    <p class="h5 no-margin">Personal Assistance</p>
                                    <div>
                                        <a href="#">Details</a>&nbsp;&nbsp;
                                        <a href="#">Flag</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5 class="text-center"><strong>Thursday</strong></h5>
                            <hr style="margin-top: 0">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-xs-3 text-right" style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
                                    <div><span style="font-weight: bold; font-size: 80%">8:15pm</span></div>
                                    <div><span style="font-weight: bold; font-size: 80%">10:00am</span></div>
                                </div>
                                <div class="col-xs-8" style="padding-top: 5px;">
                                    <p class="h5 no-margin">Shared Attendant</p>
                                    <div>
                                        <a href="#">Details</a>&nbsp;&nbsp;
                                        <a href="#">Flag</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5 class="text-center"><strong>Wednesday</strong></h5>
                            <hr style="margin-top: 0">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-xs-3 text-right" style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
                                    <div><span style="font-weight: bold; font-size: 80%">7:45am</span></div>
                                    <div><span style="font-weight: bold; font-size: 80%">1:10pm</span></div>
                                </div>
                                <div class="col-xs-8" style="padding-top: 5px;">
                                    <p class="h5 no-margin">Shared Attendant</p>
                                    <div>
                                        <a href="#">Details</a>&nbsp;&nbsp;
                                        <a href="#">Flag</a>
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
                titleFormat :'MMMM yyyy \'(prev)\'',
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
                    right: 'today prev next'
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
                titleFormat :'MMMM yyyy \'(next)\'',
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