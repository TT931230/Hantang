<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row">
        <label class="col-lg-2">图片明细列表</label>
    </div>
    <div class="row">
        <label class="col-lg-2">图片标题</label>
        <input class="col-lg-2" type="text" id="source_name">
    </div>
    <div class="row">
        <button onclick="$queryImage()" class="btn btn-default">查询</button>
    </div>
    <div id="caselistshow">
        <table>
            <tr>
                <td>图片名称</td>
                <td>图片地址</td>
                <td>图片类型</td>
                <td>顺序</td>
                <td>图片缩略图</td>
                <td>编辑</td>
            </tr>
            {imagelists}
            <tr>
                <td id="{source_id}">{source_name}</td>
                <td id="{source_id}_url">
                    {source_location}
                </td>
                <td id="{source_id}_type">
                    {imgtype}
                </td>
                <td id="{source_id}_sequence">
                    {sequence}
                </td>
                <td id="{source_id}_img">
                    <img src="{source_location}">
                </td>
                <td id="{source_id}_edit">
                    <a href="javascript:;" onclick="$savebrand('{source_id}')">保存</a>
                    <a href="javascript:;" onclick="$deletebrand('{source_id}')">删除</a>
                </td>
            </tr>
            {/imagelists}
        </table>
    </div>
</div>
