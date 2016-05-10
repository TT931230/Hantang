<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:16
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="ulsearch" style="display: {awoedisarea2}">
 <div class="diftype1">
        <div class="ultypes">
            <div class="ultype-left1">年份</div>
            <div class="ultype-right1"></div>
        </div>
        <div class="uldetails">
            {yeardetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')" >
                <span class="ulyeardetail" >{keyword}</span>
            </a>
            {/yeardetails}
        </div>
    </div>
    <div class="diftype2">
        <div class="ultypes">
            <div class="ultype-left2">活动类型</div>
            <div class="ultype-right2"></div>
        </div>
        <div class="uldetails">
           {activedetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="ulactivedetail" >{keyword}</span>
            </a>
            {/activedetails}
        </div>
    </div>
    <div class="diftype3">
        <div class="ultypes">
        <div class="ultype-left3">品类</div>
        <div class="ultype-right3"></div>
        </div>
        <div class="uldetails3">
            {typedetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="ultypedetail" >{keyword}</span>
            </a>
            {/typedetails}
        </div>
    </div>
    <div class="diftype4">
        <div class="ultypes">
        <div class="ultype-left4">活动地点</div>
         <div class="ultype-right4"></div>
        </div>
        <div class="uldetails4">
            {locationdetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="ullocationdetail" >{keyword}</span>
            </a>
            {/locationdetails}
        </div>
    </div>
</div>
</div>