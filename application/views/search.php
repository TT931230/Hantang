<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/11
 * Time: 9:55
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="searchallarea">
    <div class="cover-container showsearcharea">
        <div class="inner newborder showsearcharea1">
            <div class="radio-inline language">
                <span class="dropdown dropdowncust" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{language}</span>
                <ul class="dropdown-menu dropdownmenucust" id="choseLan">
                    <li class="dropdowncustspan"><span onclick="$changelanguage('{url}','zn')">中文</span></li>
                    <li class="dropdowncustspan"><span onclick="$changelanguage('{url}','en')">English</span></li>
                    <li class="dropdowncustspan"><span onclick="$changelanguage('{url}','fr')">Français</span></li>
                </ul>
            </div>
            <div class="searcharea">
                <span class="dropdowncust" role="button" onclick="$use('class1content','')"><i class="glyphicon glyphicon-search"></i> {search}</span>
            </div>
        </div>
    </div>
    <div id="class1content" style="display:none;" class="cover-container showsearcharea">
        <div class="searchdetailarea">
            <span id="searchMsg">{seniorsearch}&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input type="text" placeholder="{inputtip}" id="searchinput" name="searchcontent">
            <span id="searchTool" class="glyphicon glyphicon-search"></span>
            <span class="searchdetail" id="searchcommit" role="button" onclick="$searchresult()">&nbsp;&nbsp;&nbsp;&nbsp;{commit}</span>
            <span class="resetsearch" role="button" id="searchreset" onclick="$reset()"><i class="glyphicon glyphicon-repeat"></i> <span id="rearch_reset">{reset}</span></span>

            <div id="searchdetailarea"></div>
        </div>

        <div class="searchdetailarea" id="searchBrandName">
               <span class="searchdetail" role="button" onclick="$use('class2content','righToDown1','searchAToZ')"><i class=""></i> {brandname}
                    <span id="righToDown1" class="glyphicon glyphicon-chevron-right"></span>
            </span>
            <div style="padding: 10px 0px;display: none;" id="searchAToZ">
                <span role="button"><i style="float:left;font-size: 15px;font-style: normal">A</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">B</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">C</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">D</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">E</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">F</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">G</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">H</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">I</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">J</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">K</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">L</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">M</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">N</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">O</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">P</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">Q</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">R</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">S</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">T</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">U</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">V</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">W</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">X</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">Y</i></span>
                <span role="button"><i style="float:left;margin-left: 31px;font-size: 15px;font-style: normal">Z</i></span>
            </div>
        </div>
        <div id="class2content" style="display:none;" class="searchcontentarea">
            {search_brandname}
            <span class="searchcontent">
                    <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span class="searchItem">{content}</span>
            </span>
            {/search_brandname}
        </div>
        <div class="searchdetailarea">
            <span class="searchdetail" role="button" onclick="$use('class3content','righToDown2')"><i class=""></i> {type}
            <span id="righToDown2" class="glyphicon glyphicon-chevron-right"></span>
            </span>
        </div>
        <div id="class3content" style="display:none;" class="searchcontentarea">
            {search_type}
            <span class="searchcontent">
                    <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span class="searchItem">{content}</span>
            </span>
            {/search_type}
        </div>
        <div class="searchdetailarea">
            <span class="searchdetail" role="button" onclick="$use('class4content','righToDown3')"><i class=""></i> {keyword}
            <span id="righToDown3" class="glyphicon glyphicon-chevron-right"></span>
            </span>
        </div>
        <div id="class4content" style="display:none;" class="searchcontentarea">
            {search_keyword}
            <span class="searchcontent">
                    <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span class="searchItem">{content}</span>
            </span>
            {/search_keyword}
        </div>
        <div class="searchdetailarea">
            <span class="searchdetail" role="button" onclick="$use('class5content','righToDown4')"><i class=""></i> {location}
            <span id="righToDown4" class="glyphicon glyphicon-chevron-right"></span>
            </span>
        </div>
        <div id="class5content" style="display:none;" class="searchcontentarea">
            {search_location}
            <span class="searchcontent">
                    <input type="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span class="searchItem">{content}</span>
            </span>
            {/search_location}
        </div>
        <div class="searchdetailarea">
            <span class="searchdetail" role="button" onclick="$use('class6content','righToDown5')"><i class=""></i> {time}
            <span id="righToDown5" class="glyphicon glyphicon-chevron-right"></span>
            </span>
        </div>
        <div id="class6content" style="display:none;" class="searchcontentarea">
            {search_time}
            <span class="searchcontent">
                    <input typFe="checkbox" id="{oid}" value="{content}" onclick="$searchcontent({oid})"/><span class="searchItem">{content}</span>
            </span>
            {/search_time}
        </div>
        <div id="searchresults" class="searchresults">
        </div>
    </div>
    
</div>
<div id="bg" class="searchbg"></div>

