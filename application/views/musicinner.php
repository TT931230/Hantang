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
                       
                <img src="../../bootstrap/images/musicinner_logo.jpg" alt="">
               
            </div>
          
                <div class="videoareamusicinner">
                    <video controls="controls" autoplay=true>
                        {video}
                        <source src="{source_location}" type="{type}" />

                    </video>
                </div>
           
        
            <div class="subtitle-music">
            <table>
            <tr>
            <td style="width:65%;">
                <div class="musicinnera">

                    <div class="music-name">
                    <table style="width:100%;text-align:left">
                    <tr>
                        <td style="width:13%;text-align:right;color:#000;font-weight:600;">演出名称：<td>
                        <td style="padding-right:50px;padding-left:14px;">{source_name}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="music-brief">
                     <table style="width:100%;text-align:justify;">
                       <tr>
                        <td valign="top" style="text-align:right;width:13%;color:#000;font-weight:600;">简介：</td>
                        <td style="padding-right:54px;padding-left:14px;">{source_remark}</td>
                        </tr>
                     </table>
                    </div>
                    <div class="music-time">
                     <table style="width:100%;text-align:left;">
                     <tr>
                        <td style="width:13%;text-align:right;color:#000;font-weight:600;">演出时间：</td>
                        <td style="padding-right:50px;padding-left:14px;">{musictime}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="music-place">
                       <table style="width:100%;text-align:left;">
                       <tr>
                        <td style="width:13%;text-align:right;color:#000;font-weight:600;">演出地点：</td>
                        <td style="padding-right:50px;padding-left:14px;">{musiclocation}</td>
                        </tr>
                        </table>
                    </div>
                </div>
                </td>
                <td style="width:35%;" valign="top">
               
                <div class="musicinnerc">
                  <table>
                    <tr>
                    <div class="musicinnercimg">
                    <img src="{imgurl}">
                    </div>
                    </tr>
                    <tr>
                    <div class="musicinnerb">
                    <div id="share" class="musicinnerbshare">
                        <div class="bdsharebuttonbox">
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        </div>
                    </div>
                    <div id="sharetext">分享给好友</div>
                    </div>
                    </tr>
                  </table> 
                </div>
                 
   
                </td>
                {/video}
                </tr>
                </table>
               </div>  
            <div class="videoslug">
                相关视频
            </div>

            <div class="dashline">

                <div class="relatedvideoarea" id="relatedvideoarea">
                    {relatedvideo}
                    <div class="relatedvideos">
                        <a href='{link_url}'>
                        <img src='/bootstrap/images/play.png' class="playimg" >
                        <img src='{source_location}'></a>
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
