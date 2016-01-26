<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/25
 * Time: 11:06
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div style="width:100%;background-color: #ffffff">
    <table>
        <tr>
            <td>品牌名称</td>
            <td>语言类型</td>
            <td>品牌logo</td>
            <td>顺序</td>
            <td>logo缩略图</td>
            <td>编辑</td>
        </tr>
        {brands}
        <tr>
            <td id="{keyword_id}">{keyword}</td>
            <td id="{keyword_id}_language">{language}</td>
            <td id="{keyword_id}_logo">
                {selections}
            </td>
            <td>
                <input type="number" value="{sequence}" name="sequence" id="{keyword_id}_sequence">
            </td>
            <td id="{source_id}_img">
                <img src="{imgurl}" style="width:96px;height: 54px;">
            </td>
            <td id="{keyword_id}_edit">
                <a href="javascript:;" onclick="$savebrand('{keyword_id}')">保存</a>
            </td>
        </tr>
        {/brands}
    </table>
</div>