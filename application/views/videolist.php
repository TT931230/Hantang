<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">视频列表</div>

<div>
    <!--   <div class="row">
           <label class="col-lg-2">图片明细列表</label>
       </div>
        -->
    <label>所属类别：</label>
    <select id="videolevel">
        <option value=""></option>
        <option value="ul">极致</option>
        <option value="awoe">问鼎世界</option>
        <option value="music">音乐年</option>
    </select>
    <label>视频名称：</label>
    <input type="text" id="videoname">
    <div class="row">
        <button onclick="$queryVideo()" class="btn btn-default">查询</button>
    </div>
    <div id="caselistshow" class="cl-table">
        <table>
            <tr>
                <td class="vl-title1">视频名称</td>
                <td class="vl-title2">视频地址</td>
                <td class="vl-title3">栏目</td>
                <td class="vl-title4">语言</td>
                <td class="vl-title5">顺序</td>
                <td class="vl-title6">封面缩略图</td>
                <td class="vl-title7">编辑</td>
            </tr>
            {videolists}
            <tr>
                <td id="{imgid}" class="vl-imgname">{source_name}</td>
                <td id="{imgid}_url" class="vl-imgadd">
                    {source_location}
                </td>
                <td id="{source_id}_first" class="vl-imgfirst">
                    {first_level}
                </td>
                <td id="{source_id}_lang" class="vl-imglang">
                    {language}
                </td>
                <td class="vl-imgseq">
                    <input type="number" value="{sequence}" name="sequence" id="{source_id}_sequence" class="vl-imgseqinput">
                </td>
                <td id="{imgid}_img" class="vl-imgmini">
                    <img src="{linkimg}" style="width:96px;height: 54px;">
                </td>
                <td id="{imgid}_edit" class="vl-imgedit">
                    <a href="javascript:;" onclick="$savesinglevideo('{imgid}') " class="cl-imgeditbtn">保存</a>
                    <a href="javascript:;" onclick="$deletesinglevideo('{source_id}')" class="cl-imgeditbtn">删除</a>
                </td>
            </tr>
            {/videolists}
        </table>
    </div>
