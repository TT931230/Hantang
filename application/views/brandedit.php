<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/25
 * Time: 11:06
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <table>
        <tr>
            <td>品牌名称</td>
            <td>品牌logo</td>
            <td>顺序</td>
            <td>logo缩略图</td>
            <td>编辑</td>
        </tr>
        {brands}
        <tr>
            <td id="{keyword_id}">{keyword}</td>
            <td id="{keyword_id}_logo">
                {selections}
            </td>
            <td id="{keyword_id}_sequence">
                {sequenceselections}
            </td>
            <td id="{keyword_id}_img">
                <img src="{imgurl}">
            </td>
            <td id="{keyword_id}_edit">
                <a href="javascript:;" onclick="$savebrand('{keyword_id}')">保存</a>
                <a href="javascript:;" onclick="$deletebrand('{keyword_id}')">删除</a>
            </td>
        </tr>
        {/brands}
    </table>
</div>