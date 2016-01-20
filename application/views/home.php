<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/11
 * Time: 9:06
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<script type="text/javascript" src="bootstrap/jquery/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="bootstrap/jquery/carousel_home.js"></script>
<script type="text/javascript" src="bootstrap/js/responsiveslides.min.js"></script>


 
<div class="cover-container">
	<div class="clearfix newborder">
		<div class="inner">
			<div class="homeborder1">
				<div class="homewrapper1">
					<div id="area1" class="musiccallbacks_container homeimagearea1">
						<ul class="rslides" id="carousel1">
						{imagearea1}
							<li><img src='{source_location}' alt=""></li>
						{/imagearea1}
						</ul>
					</div>
				</div>
			</div>
			<div class="homeborder">
				<div id="left" style="background-color:#A73D49">
					{imagearea11}
						<img src='{source_location}' alt="">
					{/imagearea11}
				</div>
				<div id="right">
					<div class="homewrapper2 homeimagearea2bg">
						<div class="callbacks_container homeimagearea2">
							<ul class="rslides" id="carousel2">
								{imagearea2}
								<li><img src='{source_location}' alt=""></li>
								{/imagearea2}
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="homeborder">
				<div id="left" style="background-color:#3D5C9A">
					{imagearea12}
					<img src='{source_location}' alt="">
					{/imagearea12}
				</div>
				<div id="right">
					<div class="homewrapper2 homeimagearea3bg">
						<div class="callbacks_container homeimagearea3">
							<ul class="rslides" id="carousel3">
								{imagearea3}
								<li><img src='{source_location}' alt=""></li>
								{/imagearea3}
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="homeborder">
				<div id="left-music" style="background-color:#EAEAEA">
					{imagearea13}
					<img src='{source_location}' alt="">
					{/imagearea13}
				</div>
				<div id="right">
					<div class="homewrapper2 homeimagearea4bg">
						<div class="callbacks_container homeimagearea4">
							<ul class="rslides" id="carousel4">
								{imagearea4}
								<li><img src='{source_location}' alt=""></li>
								{/imagearea4}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
