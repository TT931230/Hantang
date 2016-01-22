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
            <div class="searchAZ" id="searchAToZ">
                <a href="javascript:;" onclick="$searchbrandname('A')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">A</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('B')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">B</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('C')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">C</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('D')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">D</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('E')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">E</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('F')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">F</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('G')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">G</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('H')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">H</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('I')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">I</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('J')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">J</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('K')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">K</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('L')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">L</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('M')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">M</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('N')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">N</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('O')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">O</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('P')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">P</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('Q')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">Q</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('R')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">R</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('S')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">S</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('T')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">T</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('U')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">U</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('V')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">V</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('W')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">W</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('X')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">X</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('Y')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">Y</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('Z')"><span role="button"><i style="float:left;font-size: 15px;font-style: normal">Z</i></span></a>
            </div>
        </div>
        <div id="class2content" style="display:none;" class="searchcontentarea">
        </div>
        <div class="searchdetailarea">
            <span class="searchdetail" role="button" onclick="$use('class3content','righToDown2')"><i class=""></i> {type}
            <span id="righToDown2" class="glyphicon glyphicon-chevron-right"></span>
            </span>
        </div>
        <div id="class3content" style="display:none;" class="searchcontentarea">
            {search_type}
            <span class="searchcontent">
                    <input type="checkbox" id="{id}" value="{keyword}" onclick="$searchcontent('{id}')"/><span class="searchItem">{keyword}</span>
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
                    <input type="checkbox" id="{id}" value="{keyword}" onclick="$searchcontent('{id}')"/><span class="searchItem">{keyword}</span>
            </span>
            {/search_keyword}
        </div>
        <div class="searchdetailarea" style="margin-top: 10px;height: 60px">
            <span class="searchdetail" role="button" onclick="$use('class5content','righToDown4','searchCountry')"><i class=""></i> {location}
            <span id="righToDown4" class="glyphicon glyphicon-chevron-right"></span>
            </span>
            <div class="searchAZ" id="searchCountry">
                {search_location}
                <a href="javascript:;" onclick="$searchcity('{id}')" id="'{id}'"><span role="button"><i style="float:left;font-size: 12px;font-style: normal">{keyword}</i></span></a>
                {/search_location}
            </div>
        </div>
        <div id="class5content" style="display:none;" class="searchcontentarea">
        </div>
        <div class="searchdetailarea">
            <span class="searchdetail" role="button" onclick="$use('class6content','righToDown5')"><i class=""></i> {time}
            <span id="righToDown5" class="glyphicon glyphicon-chevron-right"></span>
            </span>
        </div>
        <div id="class6content" style="display:none;" class="searchcontentarea">
            {search_time}
            <span class="searchcontent">
                    <input type="checkbox" id="{id}" value="{keyword}" onclick="$searchcontent('{id}')"/><span class="searchItem">{keyword}</span>
            </span>
            {/search_time}
        </div>
        <div style="">
            <div style="margin-top: 10px;
                        width: 100%;
                        height: 30px;margin-bottom: 10px;
                 background-color: #E8E8E8;">
                <span style="float:left;margin-top: 10px;margin-left: 15px;">收索结果</span>
                <span style="cursor: pointer;" onclick="$hideSearchItem('class1content')">
                      <span  class="glyphicon glyphicon-chevron-up"
                             style="float:right;margin-left: 10px;margin-right: 15px;margin-top: 10px;"></span>
                      <span style="float:right;margin-top: 10px;" >隐藏收索栏</span>
                </span>

            </div>
        </div>
        <div id="searchresults" class="searchresults">

        </div>
    </div>
    
</div>
<div id="bg" class="searchbg"></div>
</div>

<div id="flow">
    <a href="javascript:void(0)">
        <img id="top_str" alt="" src="http://www.acmedynasty.com/cn/images/top_str.png"/>
        <img id="to_top" alt="" src="http://static.acmedynasty.com/images/top.png"/>  </a>
    <a href="javascript:void(0)">
        <img id="info_str" alt="" src="http://static.acmedynasty.com/cn/images/bottom_str.png"/>
        <img id="show_info" alt="" src="http://static.acmedynasty.com/images/bottom.png"/>  </a>
    <div id="mask">
        <div class="closePop"></div>
        <div class="popContent">
        </div>
    </div>
</div>
