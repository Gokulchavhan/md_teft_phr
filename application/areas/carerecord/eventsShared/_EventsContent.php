<div class="col-md-12">
    <?php require "sections/_Calendar.php"; ?>
</div>

<?php $Script = "
    <script type='text/javascript'>

       $(document).ready(function(){
            $('#eventCalendar').fullCalendar({
                //defaultView: 'basicMonth',
                height: 400,
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
"?>