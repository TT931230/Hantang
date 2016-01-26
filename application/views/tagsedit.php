<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">品牌管理</div>
<div class="te-div">
<!--    <div class="row"><label class="col-lg-2">品牌管理</label></div>-->
    <div class="row">
        <label class="col-lg-2 te-title">品牌名称</label>
        <input class="col-lg-2" type="text" id="keyword">
    </div>
    <div id="caselistshow">
        <table>
            <tr>
                <td>标签名称</td>
                <td>标签栏目</td>
                <td>标签语言</td>
                <td>顺序</td>
                <td>标签类型</td>
                <td>编辑</td>
            </tr>
            {keywordlists}
            <tr>
                <td id="{id}">{keyword}</td>
                <td id="{id}_first">
                    {first_level}
                </td>
                <td id="{id}_lang">
                    {language}
                </td>
                <td>
                    <input type="number" value="{sequence}" name="sequence" id="{id}_sequence">
                </td>
                <td id="{id}_type">
                    {type}
                </td>
                <td id="{id}_edit">
                    <a href="javascript:;" onclick="$savesinglekeyword('{id}')">保存</a>
                    <a href="javascript:;" onclick="$deletesinglekeyword('{id}')">删除</a>
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