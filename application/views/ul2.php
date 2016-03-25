<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:26
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="ulsearch" style="display: {uldisarea2}">
    <div class="diftype">
        <div class="ultypes">{yeartype}</div>
        <div class="uldetails">
            {yeardetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')" >
                <span class="musictypedetail" >{keyword}</span>
            </a>
            {/yeardetails}
        </div>
    </div>
    <div class="diftype">
        <div class="ultypes">{locationtype}</div>
        <div class="uldetails">
            {locationdetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="musictypedetail" >{keyword}</span>
            </a>
            {/locationdetails}
        </div>
    </div>
    <div class="diftype">
        <div class="ultypes">{typetype}</div>
        <div class="uldetails">
            {typedetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="musictypedetail" >{keyword}</span>
            </a>
            {/typedetails}
        </div>
    </div>
    <div class="diftype">
        <div class="ultypes">{activetype}</div>
        <div class="uldetails-right">
            {activedetails}
            <a href="javascript:;" onclick="$searchrelatedvideo('{id}')">
                <span class="musictypedetail" >{keyword}</span>
            </a>
            {/activedetails}
        </div>
    </div>
</div>
</div>