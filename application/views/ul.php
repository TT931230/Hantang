<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/11
 * Time: 9:06
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

 <!-- <link rel="stylesheet" href="bootstrap/css/style.css"> -->

<script type="text/javascript" src="bootstrap/jquery/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="bootstrap/js/responsiveslides.min.js"></script>

<script type="text/javascript">
// You can also use "$(window).load(function() {"
$(function () {

  // Slideshow 4
  $("#slider4").responsiveSlides({
	auto: false,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });

});
</script>
<div class="cover-container">
    <div class="clearfix newborder">
        <div class="inner">
            <div class="newborder">
                hhh
            </div>
            
        </div>
        
            <div class="inner">
            <div class="newborder">
               
                <div id="left"><img src="bootstrap/images/test.png" hight="100px"></img></div>
                <div id="right">
               <div class="wrapper">
	                <div class="callbacks_container">
		                <ul class="rslides" id="slider4">
			               <li><img src="bootstrap/images/1.jpg" alt=""></li>
			               <li><img src="bootstrap/images/2.jpg" alt=""></li>
			               <li><img src="bootstrap/images/3.jpg" alt=""></li>
		               </ul>
	               </div>
	           </div>
                </div>
               
            </div>
            </div>
    </div>
</div>
