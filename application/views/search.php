<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/11
 * Time: 9:55
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="cover-container">
    <div class="inner newborder">
        <div class="radio-inline language">
            <a href="#" class="dropdown dropdowncust" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{language}</a>
            <ul class="dropdown-menu dropdownmenucust">
                <li><a href="#">中文</a></li>
                <li><a href="#">English</a></li>
                <li><a href="#">Français</a></li>
            </ul>
        </div>
        <div class="searcharea">
            <a href="#" class="dropdowncust" role="button" onclick="$use('class1content')"><i class="glyphicon glyphicon-search"></i> {search}</a>
        </div>
    </div>
</div>
<div id="class1content" style="display:none;" class="cover-container">=====
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class2content')"><i class="glyphicon glyphicon-search"></i> {brandname}</a>
    </div>
    <div id="class2content" style="display:none;" class="searchcontentarea">1</div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class3content')"><i class="glyphicon glyphicon-search"></i> {type}</a>
    </div>
    <div id="class3content" style="display:none;" class="searchcontentarea">2</div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class4content')"><i class="glyphicon glyphicon-search"></i> {keyword}</a>
    </div>
    <div id="class4content" style="display:none;" class="searchcontentarea">3</div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class5content')"><i class="glyphicon glyphicon-search"></i> {location}</a>
    </div>
    <div id="class5content" style="display:none;" class="searchcontentarea">4</div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class6content')"><i class="glyphicon glyphicon-search"></i> {time}</a>
    </div>
    <div id="class6content" style="display:none;" class="searchcontentarea">5</div>
</div>