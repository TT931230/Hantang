<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:26
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="ulsearch" style="display: {uldisarea2}">
    <div class="diftype1">
        <div class="ultypes">
            <div class="ultype-left1">{yeartype}</div>
            <div class="ultype-right1"></div>
        </div>
        <div class="uldetails">
            {yeardetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')" >
                <span class="musictypedetail" >{keyword}</span>
            </a>
            {/yeardetails}
        </div>
    </div>
    <div class="diftype2">
        <div class="ultypes">
            <div class="ultype-left2">{typetype}</div>
            <div class="ultype-right2"></div>
        </div>
        <div class="uldetails">
            {typedetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="musictypedetail" >{keyword}</span>
            </a>
            {/typedetails}
        </div>
    </div>
    <div class="diftype3">
        <div class="ultypes">
        <div class="ultype-left3">{activetype}</div>
        <div class="ultype-right3"></div>
        </div>
        <div class="uldetails">
           {activedetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="musictypedetail" >{keyword}</span>
            </a>
            {/activedetails}
        </div>
    </div>
    <div class="diftype4">
        <div class="ultypes">
        <div class="ultype-left4">{locationtype}</div>
         <div class="ultype-right4"></div>
        </div>
        <div class="uldetails">
            {locationdetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="musictypedetail" >{keyword}</span>
            </a>
            {/locationdetails}
        </div>
    </div>
</div>
</div>