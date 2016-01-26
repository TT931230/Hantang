<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:17
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">视频审核列表</div>
<div class="hpm-div" style="width:100%;background-color: #ffffff">
    <div id="caselistshow">
        <table>
            <tr>
                <td>视频名称</td>
                <td>视频地址</td>
                <td>视频栏目</td>
                <td>视频语言</td>
                <td>顺序</td>
                <td>封面缩略图</td>
                <td>编辑</td>
            </tr>
            {examinevideolists}
            <tr>
                <td id="{imgid}">{source_name}</td>
                <td id="{imgid}_url">
                    {source_location}
                </td>
                <td id="{source_id}_first">
                    {first_level}
                </td>
                <td id="{source_id}_lang">
                    {language}
                </td>
                <td>
                    <input type="number" value="{sequence}" name="sequence" id="{source_id}_sequence">
                </td>
                <td id="{imgid}_img">
                    <img src="{linkimg}" style="width:96px;height: 54px;">
                </td>
                <td id="{imgid}_edit">
                    <a href="javascript:;" onclick="$submitvideo('{imgid}')">发布</a>
                </td>
            </tr>
            {/examinevideolists}
        </table>
    </div>
</div>
