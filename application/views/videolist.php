<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row">
        <label class="col-lg-2">视频明细列表</label>
    </div>
    <div class="row"><label class="col-lg-2">视频标题</label>
        <input class="col-lg-2" type="text" id="source_name">
    </div>
    <div class="row">
        <button onclick="$queryVideo()" class="btn btn-default">查询</button>
    </div>
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
            {videolists}
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
                    <a href="javascript:;" onclick="$savesinglevideo('{imgid}')">保存</a>
                    <a href="javascript:;" onclick="$deletesinglevideo('{source_id}')">删除</a>
                </td>
            </tr>
            {/videolists}
        </table>
    </div>
</div>