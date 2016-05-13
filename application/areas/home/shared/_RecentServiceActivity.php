<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3"><span class="fa fa-calendar-plus-o"></span>&nbsp;Recent Service Activity
                <small class="pull-right">
                    <a href="<?php echo base_url('index.php/carerecord/serviceactivity') ?>" style="font-size: 80%">See All Service Activity&nbsp;<span class="fa fa-chevron-right" style="font-size: 80%"></span></a>
                </small>
            </h2>
            <hr>
        </div>
        <div class="content">
            <div class="col-sm-4">
                <h4>Service Plan</h4>
                <hr style="margin: 0">
            </div>
            <div class="col-sm-8">
                <div id="service-activity-calendar"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#service-activity-calendar').fullCalendar({
            //defaultView: 'basicWeek',
            height: 500,
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