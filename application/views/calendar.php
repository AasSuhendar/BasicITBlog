<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calendar</title>
	<link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media="print"/>
	<!-- start: JAVASCRIPTS REQUIRED FOR calendar -->
	<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/lib/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/lib/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.min.js"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR calendar -->
	<script>
			$(document).ready(function() {
				var date = new Date();
                var d = date.getDate(),
                        m = date.getMonth(),
                        y = date.getFullYear();
				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next, today',
						center: 'title',
						right: 'month,basicWeek,basicDay'
					},
					// defaultDate: '2015-04-09',
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					events: [
						{
							title: 'All Day Event',
							start: '2015-04-01'
						},
						{
							title: 'Long Event',
							start: '2015-04-07',
							end: '2015-04-10'
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: '2015-04-09T16:00:00'
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: '2015-04-16T16:00:00'
						},
						{
							title: 'Conference',
							start: '2015-04-11',
							end: '2015-04-13'
						},
						{
							title: 'Meeting',
							start: '2015-04-12T10:30:00',
							end: '2015-04-12T12:30:00'
						},
						{
							title: 'Lunch',
							start: '2015-04-12T12:00:00'
						},
						{
							title: 'Meeting',
							start: '2015-04-12T14:30:00'
						},
						{
							title: 'Happy Hour',
							start: '2015-04-12T17:30:00'
						},
						{
							title: 'Dinner',
							start: '2015-04-12T20:00:00'
						},
						{
							title: 'Birthday Party',
							start: '2015-04-13T07:00:00'
						},
						{
							title: 'Click for Google',
							url: 'http://google.com/',
							start: '2015-04-28'
						}
					]
				});
				
			});
		</script>
</head>
<body>
	<div id="calendar">aa</div>
</body>
</html>