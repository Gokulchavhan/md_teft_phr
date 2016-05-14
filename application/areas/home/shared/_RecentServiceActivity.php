<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3 primary-color"><span class="fa fa-calendar-plus-o"></span>&nbsp;My Services
                <small class="pull-right">
                    <a href="<?php echo base_url('index.php/carerecord/serviceactivity') ?>" style="font-size: 80%">Advanced Service Search&nbsp;<span class="fa fa-chevron-right" style="font-size: 80%"></span></a>
                </small>
            </h2>
            <hr>
        </div>
        <div class="content">
            <div class="col-sm-3">
                <div class="col-xs-6 col-sm-12">
                    <h4>
                        <span class="secondary-color">Service Plan Summary</span><br>
                        <span class="h5"><small><i>as of 03/15/2016</i></small></span>
                    </h4>
                    <hr style="margin: 0">
                    <div class="row">
                        <div class="col-sm-12">
                                <span class="value h4"><small>starts</small><br><span>03/15/2016</span></span>
                        </div>
                        <div class="col-sm-12">
                                <span class="value h4"><small>ends</small><br><span>03/14/2017</span></span>
                        </div>
                        <br>
                        <br>
                    </div>
                    <br>
                </div>
                <div class="col-xs-4 col-sm-12">
                    <h4 class="secondary-color">Weekly Services<br>
                        <span class="h5"><small><i>maximum allowable</i></small></span>
                    </h4>
                    <hr style="margin: 0">
                    <div class="col-sm-12 no-padding">
                            <span class="value h3">20&nbsp;<small>hrs.</small></span>
                    </div>
                    <div class="col-sm-12 no-padding">
                            <span class="value h3">40&nbsp;<small>units</small></span>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-sm-5">
                <div id="service-activity-calendar"></div>
            </div>
            <div class="col-sm-4">
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
<script type="text/javascript">
    $(document).ready(function () {
        $('#service-activity-calendar').fullCalendar({
            //defaultView: 'basicWeek',
            height: 500,
            titleFormat: 'MMMM yyyy',
            events: [
                {
                    id: '1',
                    title: '',
                    start: '2016-05-08T08:30:00'
                },
                {
                    id: '2',
                    title: '',
                    start: '2016-05-08'
                },
                {
                    id: '3',
                    title: '',
                    start: '2016-05-09'
                },
                {
                    id: '4',
                    title: '',
                    start: '2016-05-09'
                },
                {
                    id: '5',
                    title: '',
                    start: '2016-05-10'
                },
                {
                    id: '6',
                    title: '',
                    start: '2016-05-11'
                }, {
                    id: '7',
                    title: '',
                    start: '2016-05-13'
                }, {
                    id: '8',
                    title: '',
                    start: '2016-05-13'
                }
            ]

        });
    });
    $(document).ready(function () {
        $('#service-activity-calendar2').fullCalendar({
            defaultView: 'basicDay',
            height: 20,
            header: '',
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
</script>