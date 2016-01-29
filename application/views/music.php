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
            <div class="newborder" style="display: {musicdisarea1}">
                <div class="homeborder1">
                    <div class="homewrapper1">
                        <div class="musiccallbacks_container">
                            <ul class="rslides" id="carousel1">
                                {imagearea1}
                                <li><a href="{link_url}"><img src="{source_location}"></a></li>
                                {/imagearea1}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="musicsearch" style="display: {musicdisarea2}">
                <div class="musictype3">
                    <div class="musictypetitle3">{displayseason}</div>
                    <div class="musictypedetails3">
                        {seasondetails}
                        <span class="musictypedetail3" onclick="$searchrelatedvideo('{id}')">{keyword}</span>
                        {/seasondetails}
                    </div>
                </div>

                <div class="musictype3">
                    <div class="musictypetitle3">{displaytype}</div>
                    <div class="musictypedetails3">
                        {displaydetails}
                        <span class="musictypedetail4" onclick="$searchrelatedvideo('{id}')">{keyword}</span>
                        {/displaydetails}
                    </div>
                </div>
            </div>
            <div class="dashline" style="display: {musicdisarea3}">
                <div class="videoslug">
                    相关视频
                </div>

                <div class="dashline">

                    <div class="relatedvideoarea" id="relatedvideoarea">
                        {relatedvideo}
                        <div class="relatedvideos">
                            <a href='{link_url}'><img src='/bootstrap/images/play.png' style="display:block;position: absolute;opacity:0.9;"><img src='{source_location}'></a>
                            <div class="relavideostitle">
                                {source_name}
                            </div>
                        </div>
                        {/relatedvideo}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
