<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 9:30
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- module 4 : music -->
<div style="display: {homedisarea4}">
    <div class="home-music-left" >
       
        <img src="../../bootstrap/images/home_music_left.jpg" alt="">
       
    </div>
    <div class="home-music-right">
            <div class="callbacks_container">
                <ul class="rslides" id="carousel4">
                    {imagearea4}
                    <li><a href="{link_url}">
                            <div class="home-img">
                                <img src="{source_location}">
                                <span class="home-img-text1">{source_remark}</span>
                                <span class="home-img-text2">{source_name}</span>
                                <span class="home-music-hover"></span>  
                            </div>
                       </a>
                     </li>
                    {/imagearea4}
                </ul>
            </div>
    </div>
</div>