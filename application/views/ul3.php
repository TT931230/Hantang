<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:26
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>




<div style="display: {uldisarea3}">
    <div class="videoslug">
        相关视频
    </div>
    
    <div class="dashline">

      <div class="relatedvideoarea" id="relatedvideoarea">
            {relatedvideo}           
            <div class="relatedvideos">
                <a href='{link_url}'>
                <img src='/bootstrap/images/play.png' class="playimg">
                <img src='{source_location}'>
                </a>
                <div class="relavideostitle">
                    {source_name}
                </div>
            </div>
            {/relatedvideo}
        </div>  
         
    </div>
    

    
</div>