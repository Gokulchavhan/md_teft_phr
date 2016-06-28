<div class="panel panel-default">
    <div class="panel-body">
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
            <div class="col-lg-12 no-padding">
                <button class="btn btn-primary pull-right visible-xs" data-toggle="modal" data-target="#editEmail">View All Services</button>
                <div id="service-activity-calendar"></div>
                <br><br>
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
            defaultView: 'agendaWeek',
            height: 500,
            header: {
                left: 'title',
                center: '',
                right: 'today prev next'
            },
            gotoDate : new Date(2016, 04, 15),
            titleFormat: 'MMMM yyyy',
            timeFormat: 'h:mmt {- h:mmt}',
            events: [
                {
                    id: '1',
                    title: 'Personal Assistance',
                    start: '2016-06-20T13:33:27-04:00',
                    end: '2016-06-20T70:33:27-04:00',

                    allDay: false
                },
                {
                    id: '2',
                    title: 'Shared Attendant',
                    start: '2016-06-22T11:33:27-04:00',
                    end: '2016-06-22T20:33:27-04:00',
                    allDay: false
                },
                {
                    id: '3',
                    title: 'Shared Attendant',
                    start: '2016-06-20T11:33:27-04:00',
                    end: '2016-06-20T12:30:27-04:00',

                    allDay: false
                },
                {
                    id: '4',
                    title: 'Personal Assistance',
                    start: '2016-06-21T11:33:27-04:00',
                    end: '2016-06-21T20:33:27-04:00',

                    allDay: false
                },

                {
                    id: '6',
                    title: 'Personal Assistance',
                    start: '2016-06-21T15:33:27-04:00',
                    end: '2016-06-21T17:33:27-04:00',

                    allDay: false
                }, {
                    id: '7',
                    title: 'Shared Attendant',
                    start: '2016-06-23T18:23:27-04:00',

                    end: '2016-06-23T20:33:27-04:00',
                    allDay: false
                }, {
                    id: '8',
                    title: 'Shared Attendant',

                    end: '2016-06-24T22:33:27-04:00',
                    start: '2016-06-24T20:35:28-04:00',
                    allDay: false
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