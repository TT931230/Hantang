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
                <li><a href="{url}/changelanguage/zn">中文</a></li>
                <li><a href="{url}/changelanguage/english">English</a></li>
                <li><a href="{url}/changelanguage/fr">Français</a></li>
            </ul>
        </div>
        <div class="searcharea">
            <a href="#" class="dropdowncust" role="button" onclick="$use('class1content')"><i class="glyphicon glyphicon-search"></i> {search}</a>
        </div>
    </div>
</div>
<div id="class1content" style="display:none;" class="cover-container">
    <div class="searchdetailarea" id="searchdetailarea">
        {seniorsearch}<input type="text" placeholder="{inputtip}" id="searchinput" name="searchcontent"><a href="#" class="searchdetail" id="searchcommit" role="button" onclick="">{commit}</a>
        <a href="#" class="dropdowncust" role="button" id="searchreset" onclick="$reset()"><i class="glyphicon glyphicon-search"></i> {reset}</a>
    </div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class2content')"><i class="glyphicon glyphicon-search"></i> {brandname}</a>
    </div>
    <div id="class2content" style="display:none;" class="searchcontentarea">
        {search_brandname}
        <span class="searchcontent">
                <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span>{content}</span>
        </span>
        {/search_brandname}
    </div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class3content')"><i class="glyphicon glyphicon-search"></i> {type}</a>
    </div>
    <div id="class3content" style="display:none;" class="searchcontentarea">
        {search_type}
        <span class="searchcontent">
                <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span>{content}</span>
        </span>
        {/search_type}
    </div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class4content')"><i class="glyphicon glyphicon-search"></i> {keyword}</a>
    </div>
    <div id="class4content" style="display:none;" class="searchcontentarea">
        {search_keyword}
        <span class="searchcontent">
                <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span>{content}</span>
        </span>
        {/search_keyword}
    </div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class5content')"><i class="glyphicon glyphicon-search"></i> {location}</a>
    </div>
    <div id="class5content" style="display:none;" class="searchcontentarea">
        {search_location}
        <span class="searchcontent">
                <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span>{content}</span>
        </span>
        {/search_location}
    </div>
    <div class="searchdetailarea">
        <a href="#" class="searchdetail" role="button" onclick="$use('class6content')"><i class="glyphicon glyphicon-search"></i> {time}</a>
    </div>
    <div id="class6content" style="display:none;" class="searchcontentarea">
        {search_time}
        <span class="searchcontent">
                <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span>{content}</span>
        </span>
        {/search_time}
    </div>
</div>