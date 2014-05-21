<i><div id="javascript_countdown_time" style="font-size:16px"></div> </i>
<script type="text/javascript">
	var javascript_countdown = function () {
		var time_left = 10; //number of seconds for countdown
		var keep_counting = 1;
		var no_time_left_message = '';
		function countdown() {
			if(time_left < 2) {
				keep_counting = 0;
			}
			time_left = time_left - 1;
		}
		function add_leading_zero( n ) {
			if(n.toString().length < 2) {
				return '0' + n;
			} else {
				return n;
			}
		}
		function format_output() {
			var hours, minutes, seconds;
			seconds = time_left % 60;
			minutes = Math.floor(time_left / 60) % 60;
			hours = Math.floor(time_left / 3600);	
			seconds = add_leading_zero( seconds );
			minutes = add_leading_zero( minutes );
			hours = add_leading_zero( hours );
			//return hours + ':' + minutes + ':' + seconds; this is the dislpay code
			return 'Please wait untill...' + minutes + ':' + seconds;
		}
		function show_time_left() {
			document.getElementById('javascript_countdown_time').innerHTML = format_output();//time_left;
		}
		function no_time_left() {
			document.getElementById('javascript_countdown_time').innerHTML = no_time_left_message;
		}
		return {
			count: function () {
				countdown();
				show_time_left();
			},
			timer: function () {
				javascript_countdown.count();		
				if(keep_counting) {
					setTimeout("javascript_countdown.timer();", 1000);
				} else {
					no_time_left();
				}
			},
			init: function (n) {
				time_left = n;
				javascript_countdown.timer();
			}
		};
	}();
	// change the number to number of seconds
	javascript_countdown.init(1303);
</script>




