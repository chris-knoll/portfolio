                        </div>
                        <!-- End #resp-tabs-container -->

                     </div><!-- End verticalTab -->

                  </div><!-- End flexy_content -->


               </div><!-- End row -->

            </div><!-- End col-md-12 -->

         </div><!-- End row -->

      </div><!-- End container -->

   </section>
   <!-- End Content -->

</div>
<!-- End wrapper -->


<!-- jquery | jQuery 1.11.0 -->
<!-- Credits: http://jquery.com -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- Js | bootstrap -->
<!-- Credits: http://getbootstrap.com/ -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Js | jquery.cycle -->
<!-- Credits: https://github.com/malsup/cycle2 -->
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>

<!-- jquery | rotate and portfolio -->
<!-- Credits: http://jquery.com -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/HeadImage.js"></script>

<!-- Js | easyResponsiveTabs -->
<!-- Credits: http://webtrendset.com/demo/easy-responsive-tabs/Index.html -->
<script type="text/javascript" src="js/easyResponsiveTabs.min.js"></script>

<!-- Js | mCustomScrollbar -->
<!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- jquery | prettyPhoto -->
<!-- Credits: http://www.no-margin-for-errors.com/ -->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<!-- Js | gmaps -->
<!-- Credits: http://maps.google.com/maps/api/js?sensor=true-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gmaps.min.js"></script>

<!-- Js | Js -->
<!-- Credits: http://themeforest.net/user/FlexyCodes -->
<script type="text/javascript" src="js/main.js"></script>

<!-- code js for image rotate -->
<script type="text/javascript">

var mouseX;
var mouseY;
var imageOne;

/* Calling the initialization function */
$(init);

/* The images need to re-initialize on load and on resize, or else the areas
* where each image is displayed will be wrong. */
$(window).load(init);
$(window).resize(init);

/* Setting the mousemove event caller */
$(window).mousemove(getMousePosition);

/* This function is called on document ready, on load and on resize
* and initiallizes all the images */
function init() {

/* Instanciate the mouse position variables */
mouseX = 0;
mouseY = 0;

/* Instanciate a HeadImage class for every image */
imageOne = new HeadImage("one");

}

/* This function is called on mouse move and gets the mouse position.
* It also calls the HeadImage function to display the correct image*/
function getMousePosition(event) {

/* Setting the mouse position variables */
mouseX = event.pageX;
mouseY = event.pageY;

/*Calling the setImageDirection function of the HeadImage class
* to display the correct image*/
imageOne.setImageDirection();

}

</script>


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</body>
</html>
