<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">标签管理</div>
<div class="te-div">
    <label>所属类别：</label>
    <select id="keywordlevel">
        <option value=""></option>
        <option value="ul">极致</option>
        <option value="awoe">问鼎世界</option>
        <option value="search">搜索</option>
        <option value="music">音乐年</option>
        <option value="brandname">合作伙伴</option>
    </select>
    <label>图片名称：</label>
    <input type="text" id="keywordname">
    <div class="row">
        <button onclick="$queryKeyword()" class="btn btn-default">查询</button>
    </div>
<!--    <div class="row"><label class="col-lg-2">品牌管理</label></div>-->
    <div id="caselistshow" class="caselistshow">
        <table>
            <tr>
                <td class="vl-check">
                    <input type="checkbox" name="test" value="" onclick="if(this.checked==true) { checkAll(); } else { clearAll(); }">全选
                </td>
                <td class="hpm-tags1">标签名称</td>
                <td class="hpm-tags2">标签栏目</td>
                <td class="hpm-tags3">标签语言</td>
                <td class="hpm-tags4">标签状态</td>
                <td class="hpm-tags5">顺序</td>
                <td class="hpm-tags6">标签类型</td>
                <td class="hpm-tags7">
                    <a href="javascript:;" onclick="$saveselectedkeyword()">保存所选</a>
                </td>
                <td class="hpm-tags8">
                    <a href="javascript:;" onclick="$deleteselectedkeyword()">删除所选</a>
                </td>
                <td class="hpm-tags9">
                    <a href="javascript:;" onclick="$changeselectedkeyword()">隐/显 所选</a>
                </td>
            </tr>
            {keywordlists}
            <tr>
                <td id="hpm-check" class="vl-check"><input type="checkbox" name="check" value=""></td>
                <td id="{id}" class="hpm-tags1">{keyword}</td>
                <td id="{id}_first" class="hpm-tags2">{first_level}</td>
                <td id="{id}_lang" class="hpm-tags3">{language}</td>
                <td id="{id}_sta" class="hpm-tags4">{status}</td>
                <td class="hpm-tags5">
                    <input type="number" value="{sequence}" name="sequence" id="{id}_sequence">
                </td>
                <td id="{id}_type" class="hpm-tags6">{type}</td>
                <td id="{id}_edit1" class="hpm-tags7">
                    <a href="javascript:;" onclick="$savekeywordchanges('{id}')">保存</a>
                </td>
                <td id="{id}_edit2" class="hpm-tags8">
                    <a href="javascript:;" onclick="$deletesinglekeyword('{id}')">删除</a>
                </td>
                <td id="{id}_edit3" class="hpm-tags9">
                    <a href="javascript:;" onclick="$changekeywordstatus('{id}')">隐藏/显示</a>
                </td>
            </tr>
            {/keywordlists}
        </table>
    </div>
    <div class="te-savebtn">
    <div class="row">
        <button onclick="$queryLogo()" class="btn btn-default">查询</button>
    </div>
    </div>
</div>