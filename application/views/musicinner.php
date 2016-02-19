<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/15
 * Time: 20:39
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="cover-container">
    <div class="clearfix newborder">
        <div class="inner">
            <div class="musicinner-subtitle">
            
                {musiclogo}
                <img src="{source_location}">
                {/musiclogo}
               
            </div>
          
                <div class="videoarea">
                    <video controls="controls" autoplay=true>
                        {video}
                        <source src="{source_location}" type="{type}" />

                    </video>
                </div>
           
        
            <div class="subtitle-music">
                <div class="musicinnera">

                    <div class="music-name" style="margin-bottom:10px;font-weight:500">
                    <table style="width:100%;text-align:left">
                    <tr>
                        <td style="width:13%;text-align:right;color:#000;font-weight:600;">演出名称：<td>
                        <td style="padding-right:40px;padding-left:10px;">{source_name}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="music-brief" style="margin-bottom:10px;font-weight:500">
                     <table style="width:100%;text-align:left;">
                       <tr>
                        <td valign="top" style="width:13%; padding-left:50px;color:#000;font-weight:600;">简介：</td>
                        <td style="padding-right:40px;padding-left:10px;">{source_remark}</td>
                        </tr>
                     </table>
                    </div>
                    <div class="music-time" style="margin-bottom:10px;font-weight:500">
                     <table style="width:100%;text-align:left;">
                     <tr>
                        <td style="width:13%;text-align:right;color:#000;font-weight:600;">演出时间：</td>
                        <td style="padding-right:40px;padding-left:10px;">{musictime}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="music-place" style="font-weight:500">
                       <table style="width:100%;text-align:left;">
                       <tr>
                        <td style="width:13%;text-align:right;color:#000;font-weight:600;">演出地点：</td>
                        <td style="padding-right:40px;padding-left:10px;">{musiclocation}</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="musicinnerc">
                    <img src="{imgurl}">
                </div>
                {/video}
               </div>  
            <div class="videoslug">
                相关视频
            </div>

            <div class="dashline">

                <div class="relatedvideoarea" id="relatedvideoarea">
                    {relatedvideo}
                    <div class="relatedvideos">
                        <a href='{link_url}'><img src='/bootstrap/images/play.png' style="display:block;position: absolute; "><img src='{source_location}'></a>
                        <div class="relavideostitle">
                            {source_name}
                        </div>
                    </div>
                    {/relatedvideo}
                </div>
           
        </div>
    </div>
</div>
<script>
    window._bd_share_config={
        "common":{
            "bdSnsKey":{},
            "bdText":"",
            "bdMini":"2",
            "bdMiniList":false,
            "bdPic":"",
            "bdStyle":"1",
            "bdSize":"32"
        },
        "share":{

        }
    };
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
