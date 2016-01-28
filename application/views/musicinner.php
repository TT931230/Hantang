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
           
        
            <div class="subtitle">
                <div class="ulinnera">

                    <div class="innertexttitle">
                        <label>演出名称：</label>{source_name}
                    </div>
                    <div class="innertext">
                        <label>简介：</label>{source_remark}
                    </div>
                    <div>
                        <label>演出时间：</label>{musictime}
                    </div>
                    <div>
                        <label>演出地点：</label>{musiclocation}
                    </div>
                </div>
                <div class="ulinnerc">
                    <img src="{imgurl}">
                </div>
                {/video}
                
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