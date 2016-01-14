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
<script type="text/javascript" src="bootstrap/jquery/carousel.js"></script>
<script type="text/javascript" src="bootstrap/js/responsiveslides.min.js"></script>

<div class="cover-container">
    <div class="clearfix newborder">
        <div class="inner">
            <div class="newborder">
                <div id="left" style="background-color:#0F366A">
                    {imagearea11}
                    <img src={source_location} alt="">
                    {/imagearea11}
                </div>
                    <div id="right">
                        <div class="wrapper">
                            <div class="callbacks_container">
                                <ul class="rslides" id="carousel">
                                    {imagearea1}
                                    <li><img src={source_location} alt=""></li>
                                    {/imagearea1}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newborder">
                    <div>
                        <div class="diftype">
                            <div>{yeartype}</div>
                            <div>
                                {yeardetails}
                                <span>{source_location}</span>
                                {/yeardetails}
                            </div>
                        </div>
                        <div class="diftype">
                            <div>{locationtype}</div>
                            <div>
                                {locationdetails}
                                <span>{source_location}</span>
                                {/locationdetails}
                            </div>
                        </div>
                        <div class="diftype">
                            <div>{typetype}</div>
                            <div>
                                {typedetails}
                                <span>{source_location}</span>
                                {/typedetails}
                            </div>
                        </div>
                        <div class="diftype">
                            <div>{activetype}</div>
                            <div>
                                {activedetails}
                                <span>{source_location}</span>
                                {/activedetails}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashline">
                    xiangguanshiping
                </div>
                <div class="dashline">
                    vedio
                </div>
            </div>
        </div>
    </div>
</div>