<footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 margin-bottom_30">
				   <img src="img/prime.png" width="160" height="70" alt="#" />
				</div>
               <div class="col-xl-6 white_fonts">
                    <div class="row">
					<div class="col-md-12 white_fonts margin-bottom_30">
					   <h3>Contact Us</h3>
					</div>
                        <div class="col-md-4">
                            <div class="full icon">
                                <img src="images/social1.png">
                            </div>
                            <div class="full white_fonts">
                                <p>17 B Medical Road Ikeja, Lagos.
                                    <br>Nigeria</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="full icon">
                                <img src="images/social2.png">
                            </div>
                            <div class="full white_fonts">
                                <p>consultation@gmail.com
                                    <br>consultation@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="full icon">
                                <img src="images/social3.png">
                            </div>
                            <div class="full white_fonts">
                                <p>08066402002
                                 <!--   <br>+7586656566</p>-->
                            </div>
                        </div>
						<div class="col-md-12">
						   <ul class="full social_icon margin-top_20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
						</div>
                    </div>
                </div>
				
				 <div class="col-xl-6 white_fonts">
				    <div class="row">
					   <div class="col-md-6">
					     <div class="footer_blog footer_menu">
						    <h3>Menus</h3>
						    <ul> 
							  <li><a href="index.php">Home</a></li>
							  <li><a href="about.php">About Us</a></li>
							  <li><a href="services.php">Services</a></li>
							  <li><a href="contact.php">Contact us</a></li>
							</ul>
						 </div>
						 <div class="footer_blog recent_post_footer">
						   <h3>Our Drive:</h3>
						   <p>Sincerity and Satisfaction of our Customer is our top Priority</p>
						 </div>
					   </div>
					   <div class="col-md-6">
					     <div class="footer_blog full">
						     <h3>Newsletter</h3>
							 <div class="newsletter_form">
							    <form action="index.php">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					   </div>
					</div>
				 </div>

            </div>
            
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">Copyright © 2021 Primcore Global. All Rights Reserved.</p>
                    <ul class="bottom_menu">
                        <li><a href="premierwebs.com.ng">Designed By Premierwebs Nigeria</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>
<div class="whatsapp">
<a href="https://api.whatsapp.com/send?phone=2348062979549" target="_blank">    
<h5><i class="fa fa-whatsapp fa-3x fa-spin" aria-hidden="true"></i></h5></a>
 </div>

</html>