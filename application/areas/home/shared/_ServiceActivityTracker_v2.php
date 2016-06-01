<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3 primary-color"><span class="fa fa-calendar-plus-o"></span>&nbsp;Service Activity Tracker
                <small class="pull-right">
                    <a href="<?php echo base_url('index.php/carerecord/serviceactivity') ?>" style="font-size: 80%">View
                        All Service Activity<span class="fa fa-chevron-right"
                                                  style="font-size: 80%"></span></a>
                </small>
            </h2>
            <hr>
        </div>
        <div class="content">
            <!--            <div class="col-sm-12 col-lg-3 no-padding">-->
            <!--                <div class="col-xs-6 col-lg-12">-->
            <!--                    <div class="row section-block">-->
            <!--                        <h4>-->
            <!--                            <span class="secondary-color">Service Plan Summary</span><br>-->
            <!--                            <span class="h5 no-margin"><small><i>as of 03/15/2016</i></small></span>-->
            <!--                        </h4>-->
            <!--                        <hr style="margin: 0">-->
            <!--                        <div class="row">-->
            <!--                            <div class="col-sm-12">-->
            <!--                                <span class="value h4"><small>starts</small><br><span>03/15/2016</span></span>-->
            <!--                            </div>-->
            <!--                            <div class="col-sm-12">-->
            <!--                                <span class="value h4"><small>ends</small><br><span>03/14/2017</span></span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-xs-6 col-lg-12">-->
            <!--                    <div class="row section-block">-->
            <!--                        <h4 class="secondary-color">Weekly Services<br>-->
            <!--                            <span class="h5 no-margin"><small><i>maximum allowable</i></small></span>-->
            <!--                        </h4>-->
            <!--                        <hr style="margin: 0">-->
            <!--                        <div class="col-sm-12 no-padding">-->
            <!--                            <span class="value h3">20&nbsp;<small>hrs.</small></span>-->
            <!--                        </div>-->
            <!--                        <div class="col-sm-12 no-padding">-->
            <!--                            <span class="value h3">40&nbsp;<small>units</small></span>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="col-sm-6 col-lg-7 no-padding">
                <div id="service-activity-calendar"></div>
                <br><br>
            </div>
            <div class="col-sm-6 col-lg-5 no-padding">
                <div class="col-xs-12 col-sm-12">
                    <h4 class="text-center">
                        <strong class="orange-color">May 12 - May 18</strong><br>
                    </h4>
                    <hr style="margin-top: 0">
                    <div class="row section-block"  style="max-height: 550px; overflow-x: hidden; overflow-y: auto">
                        <h5 class="text-center">
                            <small><strong class="coolgray-color">Friday May 13</strong></small>
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
                            <small><strong class="coolgray-color">Thursday May 12</strong></small>
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
                            <small><strong class="coolgray-color">Wednesday May 11</strong></small>
                        </h5>
                        <hr style="margin-top: 0; border-color: #bbb;">
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-xs-2 col-sm-3 text-right"
                                 style="border-right: 3px solid lightgray; padding: 0 10px 0 0">
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
<?php echo $_completedflag_modal; ?>

<script type="text/javascript">
    $(document).ready(function () {

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        // page is now ready, initialize the calendar...

        var activityCalendar =$('#service-activity-calendar').fullCalendar({
            //defaultView: 'basicWeek',
            height: 500,
            header: {
                left: 'title',
                center: '',
                right: 'today prev next'
            },
            gotoDate : new Date(2016, 04, 15),
            titleFormat: 'MMMM yyyy',
            events: [
                {
                    id: '1',
                    title: 'Personal Assistance',
                    start: '2016-05-13'
                },
                {
                    id: '2',
                    title: 'Shared Attendant',
                    start: '2016-05-13'
                },
                {
                    id: '3',
                    title: 'Shared Attendant',
                    start: '2016-05-12'
                },
                {
                    id: '4',
                    title: 'Personal Assistance',
                    start: '2016-05-11'
                },
                {
                    id: '5',
                    title: 'Shared Attendant',
                    start: '2016-05-06'
                },
                {
                    id: '6',
                    title: 'Personal Assistance',
                    start: '2016-05-04'
                }, {
                    id: '7',
                    title: 'Shared Attendant',
                    start: '2016-05-03'
                }, {
                    id: '8',
                    title: 'Shared Attendant',
                    start: '2016-05-01'
                }
            ],
            selectHelper: true,
            dayClick: function(start, allDay, jsEvent, view) {

                $(this).parent().siblings().removeClass("start-week-highlight");
                $(this).parent().siblings().removeClass("end-week-highlight");
                $(this).parent().removeClass("start-week-highlight");
                $(this).parent().removeClass("end-week-highlight");

                console.log(this);

                if ($(this).hasClass("fc-thu") || $(this).hasClass("fc-fri") || $(this).hasClass("fc-sat")) {
                    $(this).parent().next().addClass("end-week-highlight");
                    $(this).parent().addClass("start-week-highlight");
                    console.log("start week");

                } else {
                    $(this).parent().prev().addClass("start-week-highlight");
                    $(this).parent().addClass("end-week-highlight");
                    console.log("end week");
                }

//                if(start < date && start.getDate() != date.getDate())
//                {
//                    alert("Cannot select past dates.");
//                    $(this).parent().removeClass("week-highlight");
//                    return;
//                }

                var now = date? new Date(start-1) : new Date();
                now.setHours(0,0,0,0);
                var monday = new Date(now);
                monday.setDate(monday.getDate() - monday.getDay() + 1);
                var sunday = new Date(now);
                sunday.setDate(sunday.getDate() - sunday.getDay() + 7);
//                activityCalendar.fullCalendar("renderEvent",
//                        {
//                            start: monday,
//                            end: sunday,
//                            allDay: allDay
//                        },
//                        true // make the event "stick"
//                    );
                //$(this).parent().removeClass("week-highlight");
            }

        });

    });
</script>