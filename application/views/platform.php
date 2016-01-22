<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css" />
<div class="cover-container">
    <div class="clearfix newborder">
        <div class="inner">
           <div class="aboutsubtitle">
            播出平台
           </div>
           <div class="videoarea">
                    <video controls="controls" autoplay=true>
                        {video}
                        <source src="{source_location}" type="{type}" />
                        {/video}
                    </video>
           </div>     

        <div class="plat-subtitle platform-sub">
            {imagearea2}
            <a href="{link_url}"><img src="{source_location}"></a>
            {/imagearea2}
        </div>
              
      
        
        <div class="plat-subtitle platform-sub">
            {imagearea3}
            <img src='{source_location}' alt="">
            {/imagearea3}
        </div>  


        
        </div> 
    </div>
</div>