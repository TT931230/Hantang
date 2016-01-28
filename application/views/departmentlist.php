<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/27
 * Time: 19:30
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">部门列表</div>

<!--    <div class="row">
       <label class="col-lg-2">视频明细列表</label>
   </div> -->
<div id="caselistshow" class="cl-table">
    <table style="width:100%;">
        <tr>
            <td class="dptl-title1">部门名称</td>
            <td class="dptl-title2">部门状态</td>
            <td class="dptl-title3">部门顺序</td>
            <td class="dptl-title4">编辑</td>
        </tr>
        {departmentselect}
        <tr style="width:100%;">
            <td id="{id}" class="dptl-name">{department}</td>
            <td id="{id}_status" class="dptl-state">
                {status}
            </td>
            <td class="dptl-seq">
                <input type="number" value="{sequence}" name="sequence" id="{id}_sequence" class="vl-imgseqinput">
            </td>
            <td id="{id}_edit" class="dptl-edit">
                <a href="javascript:;" onclick="$updatedepartment('{id}') " class="cl-imgeditbtn">保存</a>
                <a href="javascript:;" onclick="$changedepartmentstatus('{id}')" class="cl-imgeditbtn">隐藏/显示</a>
                <a href="javascript:;" onclick="$deletedepartment('{id}')" class="cl-imgeditbtn">删除</a>
            </td>
        </tr>
        {/departmentselect}
    </table>
</div>
