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
                {ullogo}
                    <img src="{source_location}">
                {/ullogo}
            </div>
           
                <div class="videoarea">
                    <video controls="controls" autoplay=true>
                        {video}
                        <source src="{source_location}" type="{type}" />

                    </video>
                </div>
            
            <div class="subtitle">
                <div class="ulinnera">
                    <div class="innertexttitle">
                        {source_name}
                    </div>
                    <div class="innertext">
                        {source_remark}
                    </div>
                </div>
                <div class="ulinnerc">

                        {/video}
                    <div class="part2">
                        <div>
                            <a href="{source_url}" download="{source_name}">
                                <img id="dload" alt="" src="../../bootstrap/images/dload.png"/>
                            </a>

                        </div>
                        <div class="ul_des">下载</div>
                    </div>
                    <div class="part3">
                        <div>
                            <img id="phone" alt="" src="../../bootstrap/images/dload.png"/>

                        </div>
                        <div class="ul_des">手机</div>
                    </div>
                </div>
                <div class="ulinnerb">
                    <div id="share">
                        <div class="bdsharebuttonbox">

                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微�></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微�></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        </div>
                    </div>
                    <div id="sharetext">分享给好�/div>
                </div>
            </div>

            <div class="videoslug">
                相关视频
            </div>

            <div class="dashline">

                <div class="relatedvideoarea" id="relatedvideoarea">
                    {relatedvideo}
                    <div class="relatedvideos">
                        <a href='{link_url}'><img src='{source_location}'></a>
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