<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 9:28
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- module 1 : video -->
<div style="display: {homedisarea1};">
    <div  class="home-videoarea">
        <div class="videolist">
            {videoarea}
            <div id="videolist{sequence}" class="home-video">
                <video src="{source_location}" id="video{sequence}" ></video>
            </div>
            {/videoarea}            
        </div>
        <div id="process1">
            <div class="processdev">
                <div id="process2"></div>
            </div>
            <div class="processline"></div>
            <div class="processdev">
                <div id="process3"></div>
            </div>
            <div class="processline"></div>
            <div class="processdev">
                <div id="process4"></div>
            </div>
        </div>
    </div>
</div>