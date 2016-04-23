<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:26
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="newborder" style="display: {uldisarea1}">
    <div id="left-ul">
        <?php if($this->session->language == 'zn'){?>
        <img src="../../bootstrap/images/UL_leftlogo.png" alt="">
         <?php }else{?>
        <img src="../../bootstrap/images/UL_leftlogo_ENG.png" alt="">
         <?php }?>
    </div>
    <div id="right-ul">
            <div class="ulcallbacks_container">
                <ul class="rslides" id="carousel">
                    {imagearea1}
                    <li><a href="{link_url}"><img src="{source_location}"></a></li>
                    {/imagearea1}
                </ul>
            </div>
    </div>
</div>