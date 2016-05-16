<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3 primary-color"><span class="fa fa-calendar-plus-o"></span>&nbsp;My Service Activity
                <small class="pull-right">
                    <a href="<?php echo base_url('index.php/carerecord/serviceactivity') ?>" style="font-size: 80%">View All Service Activity<span class="fa fa-chevron-right"
                                                           style="font-size: 80%"></span></a>
                </small>
            </h2>
            <hr>
        </div>
        <div class="content">
            <div class="col-sm-12 col-lg-3 no-padding">
                <div class="col-xs-6 col-lg-12">
                    <div class="row section-block">
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
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-12">
                    <div class="row section-block">
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
                </div>
            </div>
            <div class="col-sm-6 col-lg-5 no-padding">
                <div id="service-activity-calendar"></div>
                <br><br>
            </div>
            <div class="col-sm-6 col-lg-4 no-padding">
                <div class="col-xs-12 col-sm-12">
                        <div class="row section-block">
                            <h4>
                                <span class="secondary-color">Recent Service Activity</span><br>
                            </h4>
                            <hr style="margin-top: 0">
                            <h5 class="text-center">
                                <small><strong class="coolgray-color">YESTERDAY</strong></small>
                            </h5>
                            <hr style="margin-top: 0; border-color: #bbb;">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-xs-2 col-sm-3 text-right"
                                     style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
                                    <div><span style="font-weight: bold; font-size: 80%">8:00 am</span></div>
                                    <div><span style="font-weight: bold; font-size: 80%">1:00 pm</span></div>
                                </div>
                                <div class="col-xs-10 col-sm-8" style="padding-top: 5px;">
                                    <p class="h5 no-margin bluesteel-color">Personal Assistance</p>
                                    <div>
                                        <a href="#" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>&nbsp;&nbsp;
                                        <a href="#" data-toggle="modal" data-target="#flagService">Flag</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px; background-color: #F5FAFF;">
                                <div class="col-xs-2 col-sm-3 text-right"
                                     style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
                                    <div><span style="font-weight: bold; font-size: 80%">1:15 pm</span></div>
                                    <div><span style="font-weight: bold; font-size: 80%">7:00 pm</span></div>
                                </div>
                                <div class="col-xs-10 col-sm-8" style="padding-top: 5px;">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant</p>
                                    <div>
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
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-xs-2 col-sm-3 text-right"
                                     style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
                                    <div><span style="font-weight: bold; font-size: 80%">8:15 am</span></div>
                                    <div><span style="font-weight: bold; font-size: 80%">10:00 am</span></div>
                                </div>
                                <div class="col-xs-10 col-sm-8" style="padding-top: 5px;">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant</p>
                                    <div>
                                        <a href="#" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>&nbsp;&nbsp;
                                        <a href="#" data-toggle="modal" data-target="#flagService">Flag</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5 class="text-center">
                                <small><strong class="coolgray-color">WEDNESDAY</strong></small>
                            </h5>
                            <hr style="margin-top: 0; border-color: #bbb;">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-xs-2 col-sm-3 text-right" style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
                                    <div><span style="font-weight: bold; font-size: 80%">7:45 am</span></div>
                                    <div><span style="font-weight: bold; font-size: 80%">1:10 pm</span></div>
                                </div>
                                <div class="col-xs-10 col-sm-8" style="padding-top: 5px;">
                                    <p class="h5 no-margin bluesteel-color">Shared Attendant</p>
                                    <div>
                                        <a href="#" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>&nbsp;&nbsp;
                                        <a href="#" data-toggle="modal" data-target="#flagService">Flag</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->

<!-- Modal - Service Activity Details -->
<?php echo $_serviceactivitydetails_modal; ?>

<!-- Modal - Send Message -->
<?php echo $_flagservice_modal; ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#service-activity-calendar').fullCalendar({
            //defaultView: 'basicWeek',
            height: 500,
            header: {
                left: 'title',
                center: '',
                right: 'today prev next'
            },
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