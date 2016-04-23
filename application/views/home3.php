<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 9:30
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- module 3 : awoe   -->
<div style="display: {homedisarea3}">
    <div class="home-awoe-left">
     
        <img src="../../bootstrap/images/home_awoe_left.jpg" alt="">
       
    </div>
    <div class="home-awoe-right">
            <div class="callbacks_container">
                <ul class="rslides" id="carousel3">
                    {imagearea3}
                    <li><a href="{link_url}">
                            <div class="home-img">
                                <img src="{source_location}">
                                <span class="home-img-text1">{brandname}</span>
                                <span class="home-img-text2">{imagename}</span>
                                <span class="home-awoe-hover"></span>  
                            </div>
                          </a>
                    </li>
                    {/imagearea3}
                </ul>
            </div>
    </div>
</div>