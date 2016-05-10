<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 9:29
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- module 2: ul -->
<div style="display: {homedisarea2}">
    <div class="home-ul-left">
       
        <img src="../../bootstrap/images/home_ul_left.jpg" alt="">
       
    </div>
    <div class="home-ul-right">
            <div class="callbacks_container ">
                <ul class="rslides" id="carousel2">
                    {imagearea2}
                    <li><a href="{link_url}">
                            <div class="home-img">
                                <img src="{source_location}">
                                <span class="home-img-text1">{source_remark}</span>
                                <span class="home-img-text2">{source_name}</span>
                                <span class="home-ul-hover"></span>      
                            </div>
                         </a>
                    </li>
                    {/imagearea2}
                </ul>
       
            </div>
                   
    </div>
</div>