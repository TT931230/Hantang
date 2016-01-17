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
        
            <div class="newborder">
                <div class="homeborder1">
                    <div class="homewrapper1">
                        <div class="callbacks_container">
                            <ul class="rslides" id="carousel1">
                                {imagearea1}
                                <li><img src='{source_location}' alt=""></li>
                                {/imagearea1}
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                
                
               
                   <div class="musicsearch">
                        <div class="musictype">
                            <div class="musictypetitle">{seasontype}</div>
                            <div class="musictypedetails">
                                {seasondetails}
                                <span class="musictypedetail">{source_location}</span>
                                {/seasondetails}
                            </div>
                            </div>
                    
                        <div class="musictype">
                            <div class="musictypetitle">{displaytype}</div>
                            <div class="musictypedetails">
                                {displaydetails}
                                <span class="musictypedetail">{source_location}</span>
                                {/displaydetails}
                            </div>
                        </div>                                               
                    </div>
                    
                    
                <div class="dashline">
                </div>
                
           
        </div>
    </div>
</div>
