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
                <div id="left" style="background-color:#3D5C9A">
                    {imagearea11}
                    <img src='{source_location}' alt="">
                    {/imagearea11}
                </div>
                    <div id="right">
                        <div class="wrapper">
                            <div class="callbacks_container">
                                <ul class="rslides" id="carousel">
                                    {imagearea1}
                                    <li><a href="{link_url}"><img src='{source_location}' alt=""></a></li>
                                    {/imagearea1}
                                </ul>
                            </div>
                        </div>
                    </div>
             </div>
                
         <div class="ulsearch">
                        <div class="diftype">
                            <div class="ultypes">{yeartype}</div>
                            <div class="uldetails">
                                {yeardetails}
                                <a href="javascript:;" onclick="$searchrelatedvideo('{id}')" >
                                <span class="musictypedetail" >{keyword}</span>
                                </a>
                                {/yeardetails}
                            </div>
                        </div>
                        <div class="diftype">
                            <div class="ultypes">{locationtype}</div>
                            <div class="uldetails">
                                {locationdetails}
                                <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                                <span class="musictypedetail2" >{keyword}</span>
                                </a>
                                {/locationdetails}
                            </div>
                        </div>
                        <div class="diftype">
                            <div class="ultypes">{typetype}</div>
                            <div class="uldetails">
                                {typedetails}
                                <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">                              
                                <span class="musictypedetail" >{keyword}</span>
                                </a>
                                {/typedetails}
                            </div>
                        </div>
                        <div class="diftype">
	                            <div class="ultypes">{activetype}</div>
	                            <div class="uldetails">
	                                {activedetails}
	                                <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">   
                                    <span class="musictypedetail" >{keyword}</span>
                                    </a>
	                                {/activedetails}
	                            </div>
	                        </div>
	                        </div>
                <div class="dashline">
                 <div class="videoslug">
                    相关视频
                    </div>
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
