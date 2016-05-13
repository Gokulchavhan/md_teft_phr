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
                        <div class="col-sm-6">
                            <div id="eventCalendar1"></div>
                        </div>
                        <div class="col-sm-6">
                            <div id="eventCalendar3"></div>
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