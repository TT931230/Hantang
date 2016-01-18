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
<script type="text/javascript" src="bootstrap/jquery/carousel.js"></script>
<script type="text/javascript" src="bootstrap/js/responsiveslides.min.js"></script>


<div class="cover-container">
    <div class="clearfix newborder">
        <div class="inner">
            <div class="newborder">
                <div id="left" style="background-color:#541B2A">
                    {imagearea11}
                    <img src='{source_location}' alt="">
                    {/imagearea11}
                </div>
                <div id="right">
                    <div class="wrapper">
                        <div class="callbacks_container">
                            <ul class="rslides" id="carousel">
                                {imagearea1}
                                <li><img src='{source_location}' alt=""></li>
                                {/imagearea1}
                            </ul>
                        </div>
                    </div>
                </div>
             </div>
               
                 <div class="ulsearch">
                        <div class="diftype">
                            <div >{yeartype}</div>
                            <div>
                                {yeardetails}
                                    <span>{yeardetail}</span>
                                {/yeardetails}
                            </div>
                        </div>
                        <div class="diftype">
                            <div>{locationtype}</div>
                            <div>
                                {locationdetails}
                                <span>{locationdetail}</span>
                                {/locationdetails}
                            </div>
                        </div>
                        <div class="diftype">
                            <div>{typetype}</div>
                            <div>
                                {typedetails}
                                <span>{typedetail}</span>
                                {/typedetails}
                            </div>
                        </div>
                        <div class="diftype">
                            <div>{activetype}</div>
                            <div>
                                {activedetails}
                                <span>{activedetail}</span>
                                {/activedetails}
                            </div>
                        </div>
                        </div>
                  
              
             
                    <div class="videoslug">相关视频
                    </div>
              
                <div class="dashline">
                    <div class="relatedvideoarea" id="relatedvideoarea">
                        <!--                    {imagearea2}-->
                        <div class="relatedvideos">
                            <a href="{link_url}"><img src="{source_location}"></a>
                            <span>{source_name}</span>
                        </div>
                        <div class="relatedvideos">
                            <a href="{link_url}"><img src="{source_location}"></a>
                            <span>{source_name}</span>
                        </div>
                        <div class="relatedvideos">
                            <a href="{link_url}"><img src="{source_location}"></a>
                            <span>{source_name}</span>
                        </div>
                        <div class="relatedvideos">
                            <a href="{link_url}"><img src="{source_location}"></a>
                            <span>{source_name}</span>
                        </div>
                        <!--                    {/imagearea2}-->
                    </div>
                </div>
                
            </div>
        </div>
    </div>

