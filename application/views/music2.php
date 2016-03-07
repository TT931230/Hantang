<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:21
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="musicsearch" style="display: {musicdisarea2}">
    <div class="musictype3">
        <div class="musictypetitle3">{displayseason}</div>
        <div class="musictypedetails3">
            {seasondetails}
            <span class="musictypedetail3" onclick="$searchrelatedvideo('{id}')">{keyword}</span>
            {/seasondetails}
        </div>
    </div>

    <div class="musictype4">
        <div class="musictypetitle4">{displaytype}</div>
        <div class="musictypedetails4">
            {displaydetails}
            <span class="musictypedetail4" onclick="$searchrelatedvideo('{id}')">{keyword}</span>
            {/displaydetails}
        </div>
    </div>
</div>