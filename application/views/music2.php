<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:21
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="musicsearch" style="display: {musicdisarea2}">
    <div class="musictype1">
        <div class="musictypetitle1">{displayseason}</div>
        <div class="musictypedetails1">
            {seasondetails}
            <span class="musictypedetail1" onclick="$searchrelatedvideo('{id}')">{keyword}</span>
            {/seasondetails}
        </div>
    </div>

    <div class="musictype2">
        <div class="musictypetitle2">{displaytype}</div>
        <div class="musictypedetails2">
            {displaydetails}
            <span class="musictypedetail2" onclick="$searchrelatedvideo('{id}')">{keyword}</span>
            {/displaydetails}
        </div>
    </div>
</div>