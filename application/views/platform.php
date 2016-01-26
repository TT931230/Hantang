<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css" />
<div class="cover-container">
    <div class="clearfix newborder">
        <div class="inner">
            <div class="aboutsubtitle">
                播出平台
            </div>
            <div class="videoarea"   style="display: {platformdisarea1}">
                <video controls="controls" autoplay=true>
                    {videoarea1}
                    <source src="{source_location}" type="{type}" />
                    {/videoarea1}
                </video>
            </div>

            <div class="plat-subtitle platform-sub" style="display: {platformdisarea2}">
                {imagearea2}
                <a href="{link_url}"><img src="{source_location}"></a>
                {/imagearea2}
            </div>
            <div class="plat-map">
                <img src="{ulmap}">
            </div>
            <div class="plat-subtitle platform-sub" style="display: {platformdisarea3}">
                {imagearea3}
                <img src='{source_location}' alt="">
                {/imagearea3}
            </div>
            <div class="plat-map">
                <img src="{awoemap}">
            </div>


        </div>
    </div>
</div>