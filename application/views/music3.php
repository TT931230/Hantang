<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:21
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div  style="display: {musicdisarea3}">

    <div class="dashline">

        <div class="relatedvideoarea" id="relatedvideoarea">
            {relatedvideo}
            <div class="music-relatedvideos">
                <div class="music-relavideoinfo">

                    <div class="music-relavideostitle">
                        {source_name}
                    </div>
                    <div class="music-relavideoremark">
                        {source_remark}
                    </div>
                    <div class="music-relavideotime">
                        {update_time}
                    </div>
                    <div class="music-more">
                        <a href='{link_url}'><img src="/bootstrap/images/more.png" class="moreimg"></a>
                    </div>
                </div>
                <a href='{link_url}'><img src='{source_location}'></a>
            </div>
            {/relatedvideo}
        </div>
    </div>
</div>