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
        <div class="newborder showsearcharea1">
            <div class="radio-inline language">
                <span class="dropdown dropdowncust"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >{language}</span>
                <ul class="dropdown-menu dropdownmenucustLan" id="choseLan">
                    <li class="dropdowncustspan"><span onclick="$changelanguage('{url}','zn')">中文</span></li>
                    <li class="dropdowncustspan"><span onclick="$changelanguage('{url}','en')">English</span></li>
                    <li class="dropdowncustspan"><span onclick="$changelanguage('{url}','fr')">Français</span></li>
                </ul>
            </div>
            <div class="searcharea">
                <span class="dropdowncust" style="margin-right:30px;" role="button" onclick="$use('class1content','')">
                    <i class="glyphicon glyphicon-search"></i> {search}
                </span>
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

        <div class="searchdetailarea">
               <span class="searchdetail" role="button" onclick="$use('class2content','righToDown1','searchAToZ')"><i class=""></i> {brandname}
                    <span id="righToDown1" class="glyphicon glyphicon-chevron-right"></span>
            </span>
            <div class="searchAZ" id="searchAToZ">
                <a href="javascript:;" onclick="$searchbrandname('A')"><span role="button"><i class="searchAZli">A</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('B')"><span role="button"><i class="searchAZli">B</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('C')"><span role="button"><i class="searchAZli">C</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('D')"><span role="button"><i class="searchAZli">D</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('E')"><span role="button"><i class="searchAZli">E</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('F')"><span role="button"><i class="searchAZli">F</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('G')"><span role="button"><i class="searchAZli">G</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('H')"><span role="button"><i class="searchAZli">H</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('I')"><span role="button"><i class="searchAZli">I</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('J')"><span role="button"><i class="searchAZli">J</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('K')"><span role="button"><i class="searchAZli">K</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('L')"><span role="button"><i class="searchAZli">L</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('M')"><span role="button"><i class="searchAZli">M</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('N')"><span role="button"><i class="searchAZli">N</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('O')"><span role="button"><i class="searchAZli">O</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('P')"><span role="button"><i class="searchAZli">P</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('Q')"><span role="button"><i class="searchAZli">Q</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('R')"><span role="button"><i class="searchAZli">R</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('S')"><span role="button"><i class="searchAZli">S</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('T')"><span role="button"><i class="searchAZli">T</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('U')"><span role="button"><i class="searchAZli">U</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('V')"><span role="button"><i class="searchAZli">V</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('W')"><span role="button"><i class="searchAZli">W</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('X')"><span role="button"><i class="searchAZli">X</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('Y')"><span role="button"><i class="searchAZli">Y</i></span></a>
                <a href="javascript:;" onclick="$searchbrandname('Z')"><span role="button"><i class="searchAZli">Z</i></span></a>
            </div>
        </div>
        <div id="class2content"  class="searchcontentarea-brand">
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
        <div class="searchdetailarea" >
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
        <div style="background: #fff;
                    border-bottom: 1px solid #c4c4c4 ">
            <div style="margin-top: 10px;
                        width: 100%;
                        height: 30px;margin-bottom: 10px;">
                <span style="float:left;margin-top: 10px;margin-left: 15px;">收索结果</span>
                <span style="cursor: pointer;" onclick="$hideSearchItem('class1content')">
                      <span  class="glyphicon glyphicon-chevron-up"
                             style="float:right;margin-left: 10px;margin-right: 15px;margin-top: 10px;"></span>
                      <span style="float:right;margin-top: 10px;" >隐藏收索</span>
                </span>
            </div>
        </div>
        <div id="searchresults" class="searchresults">

        </div>
    </div>
    
</div>
<div id="bg" class="searchbg"></div>
</div>
<a href="javascript:void(0)">
    <img id="top_str" alt="" src="http://www.acmedynasty.com/cn/images/top_str.png"/>
    <img id="to_top" alt="" src="http://static.acmedynasty.com/images/top.png"/>  </a>
<a href="javascript:void(0)">
    <img id="info_str" alt="" src="http://static.acmedynasty.com/cn/images/bottom_str.png"/>
    <img id="show_info" alt="" src="http://static.acmedynasty.com/images/bottom.png"/>  </a>
<div id="footer_flow" class="footer_flow">
    <div id="mask">
        <div class="closePop"></div>
        <div class="popContent">
        </div>
    </div>
</div>
