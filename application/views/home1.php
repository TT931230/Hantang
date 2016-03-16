<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 9:28
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="homeborder1" style="display: {homedisarea1};">
    <div class="homewrapper1" style="display: block;overflow: hidden;position: relative;">
        <div class="videolist" style="width:1280px;height:610px;margin-left: 10px;">
            {videoarea}
            <div id="videolist{sequence}" style="overflow: hidden;left: 9999px;position: absolute;">
                <video src="{source_location}" id="video{sequence}" style="width: 1280px;height:auto;"></video>
            </div>
            {/videoarea}

        </div>
        <div id="process1" style=" margin-left: -8px;margin-bottom:18px;border-style:solid; border-width:0px;height: 7px;width:1290px;border-color:#e4e4e4;background-color: #e8e8e8">
            <div class="processdev" style=" background-color: #D1D2D4;height: 7px;float:left;">
                <div id="process2" style=" background-color: #A7A8AC;height: 7px;float:left;">
                </div>
            </div>
            <div style="height: 7px;width: 3px;background-color: white;float:left;"></div>
            <div class="processdev" style=" background-color: #D1D2D4;height: 7px;float:left;">
                <div id="process3" style=" background-color: #A7A8AC;height: 7px;float:left;">
                </div>
            </div>
            <div style="height: 7px;width: 3px;background-color: white;float:left;"></div>
            <div class="processdev" style=" background-color: #D1D2D4;height: 7px;float:left;">
                <div id="process4" style=" background-color: #A7A8AC;height: 7px;float:left;">
                </div>
            </div>
        </div>
    </div>
</div>