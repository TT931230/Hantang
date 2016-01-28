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
    <table>
        <tr>
            <td class="vl-title1">部门名称</td>
            <td class="vl-title2">部门状态</td>
            <td class="vl-title3">部门顺序</td>
            <td class="vl-title7">编辑</td>
        </tr>
        {departmentselect}
        <tr>
            <td id="{id}" class="vl-imgname">{department}</td>
            <td id="{id}_status" class="vl-imgadd">
                {status}
            </td>
            <td class="vl-imgseq">
                <input type="number" value="{sequence}" name="sequence" id="{id}_sequence" class="vl-imgseqinput">
            </td>
            <td id="{id}_edit" class="vl-imgedit">
                <a href="javascript:;" onclick="$updatedepartment('{id}') " class="cl-imgeditbtn">保存</a>
                <a href="javascript:;" onclick="$changedepartmentstatus('{id}')" class="cl-imgeditbtn">隐藏/显示</a>
                <a href="javascript:;" onclick="$deletedepartment('{id}')" class="cl-imgeditbtn">删除</a>
            </td>
        </tr>
        {/departmentselect}
    </table>
</div>
