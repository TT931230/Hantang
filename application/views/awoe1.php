<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:16
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="newborder" style="display: {awoedisarea1}">
    <div id="left-awoe">
   <?php if($this->session->language == 'zn'){?>
        <img src="../../bootstrap/images/AWOE_Bnner_logo.jpg" alt="">
   <?php }else{?>
        <img src="../../bootstrap/images/AWOE_Bnner_logo_ENG.jpg" alt="">
   <?php }?>
    </div>
    <div id="right-awoe">
            <div class="awoecallbacks_container">
                <ul class="rslides" id="carousel">
                    {imagearea1}
                    <li><a href="{link_url}"><img src='{source_location}' alt=""></a></li>
                    {/imagearea1}
                </ul>
            </div>
    </div>
</div>