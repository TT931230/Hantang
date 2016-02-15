<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:16
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">音乐年列表</div>
<div id="caselistshow" class="cl-table">
    <table>
        <tr>
            <td class="vl-title1">演出名称</td>
            <td class="vl-title2">表演者</td>
            <td class="vl-title3">演出时间</td>
            <td class="vl-title4">语言</td>
            <td class="vl-title5">顺序</td>
            <td class="vl-title6">封面缩略图</td>
            <td class="vl-title7">编辑</td>
        </tr>
        {musiclists}
        <tr>
            <td id="{imgid}" class="vl-imgname">{source_name}</td>
            <td id="{imgid}_shower" class="vl-imgadd">
                {shower}
            </td>
            <td id="{source_id}_season" class="vl-imgfirst">
                {season}
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
        {/musiclists}
    </table>
</div>