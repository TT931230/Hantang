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
            <div class="awoeinner-subtitle">
                {awoelogo}
                <img src="{source_location}">
                {/awoelogo}
            </div>
           
                <div class="awoevideoarea">
                    <video controls="controls" autoplay=true>
                        {video}
                        <source src="{source_location}" type="{type}" />                       
                    </video>
                </div>
            
              <div class="subtitle">
                <div class="ulinnera">
                 <div class="ulinneracontent">
                    <div class="innertexttitle">
                        {source_name}
                    </div>
                    <div class="ulinnertext">
                        {source_remark}
                    </div>
                    </div>
                </div>
                {/video}
                <div class="ulinnerb">
                    <div id="share">
                        <div class="bdsharebuttonbox">
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        </div>
                    </div>
                    <div id="sharetext">分享给好友</div>
                </div>
            </div>
            <div class="videoslug">
                相关视频
            </div>

            <div class="dashline">

                <div class="relatedvideoarea" id="relatedvideoarea">
                    {relatedvideo1}
                    <div class="relatedvideos">
                        <a href='{link_url}'>
                        <img src='/bootstrap/images/play.png' class="playimg">
                        <img src='{source_location}'></a>
                        <div class="relavideostitle">
                            {source_name}
                        </div>
                    </div>
                    {/relatedvideo1}
                    {relatedvideo}
                    <div class="relatedvideos">
                        <a href='{link_url}'>
                        <img src='/bootstrap/images/play.png' class="playimg">
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