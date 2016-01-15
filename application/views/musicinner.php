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
            <div class="subtitle">
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
                <div>
                    <div>
                        {source_remark}
                    </div>
                </div>
                <div>
                    {imagearea2}
                        <img src="{source_location}">
                    {/imagearea2}
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
                    {imagearea3}
                    <div class="relatedvideos">
                        <a href="{link_url}"><img src="{source_location}"></a>
                        <span>{source_name}</span>
                    </div>
                    {/imagearea3}
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