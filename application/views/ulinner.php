<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/15
 * Time: 20:38
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="cover-container">
    <div class="clearfix newborder">
        <div class="inner">
            <div class="ulinner-subtitle">
                {imagearea1}
                    <img src="{source_location}">
                {/imagearea1}
            </div>
            <div class="newborder">
                <div class="videoarea">
                    <video controls="controls" autoplay=true>
                        {video}
                        <source src="{source_location}" type="{type}" />

                    </video>
                </div>
            </div>
            <div class="subtitle">
                <div class="ulinnera">
                    <div>
                        {source_name}
                    </div>
                    <div>
                        {source_remark}
                    </div>
                </div>
                <div class="ulinnerb">
                    <div class="bdsharebuttonbox">
                        <a href="#" class="bds_more" data-cmd="more"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                    </div>
                </div>
            </div>
                        {/video}
            <div class="dashline">
                <div>
                    {relatedvideos}
                </div>
            </div>
            <div class="dashline">
                <div class="relatedvideoarea" id="relatedvideoarea">
<!--                    {imagearea2}-->
                        <div class="relatedvideos">
                            <a href="{link_url}"><img src="{source_location}"></a>
                            <span>{source_name}</span>
                        </div>
                    <div class="relatedvideos">
                        <a href="{link_url}"><img src="{source_location}"></a>
                        <span>{source_name}</span>
                    </div>
                    <div class="relatedvideos">
                        <a href="{link_url}"><img src="{source_location}"></a>
                        <span>{source_name}</span>
                    </div>
                    <div class="relatedvideos">
                        <a href="{link_url}"><img src="{source_location}"></a>
                        <span>{source_name}</span>
                    </div>
<!--                    {/imagearea2}-->
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