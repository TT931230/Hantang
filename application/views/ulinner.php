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
                        <p>于心有愧</p>
                    </div>
                    <div>
                        <p>如果我听歌可眼红，何以对你好片不懂；自细做过多少美梦，慈悲的伟论，连乞丐喊穷心也痛；
                        竟怕放怀拥抱你，让你露欢容；追悔没用，转眼发现，你失踪...</p>
                    </div>
                </div>
                <div class="ulinnerc">

                    <div class="part2">
                        <div>
                            <img id="dload" alt="" src="../../bootstrap/images/dload.png"/><br/>
                        </div>
                        <div class="ul_des">下载</div>
                    </div>
                    <div class="part3">
                        <div>
                            <img id="phone" alt="" src="../../bootstrap/images/dload.png"/><br/>
                        </div>
                        <div class="ul_des">手机</div>
                    </div>
                </div>
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

            <div class="dashline">
                <div>

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