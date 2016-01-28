<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/27
 * Time: 19:30
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">职位列表</div>

<!--    <div class="row">
       <label class="col-lg-2">视频明细列表</label>
   </div> -->
<div id="caselistshow" class="cl-table">
    <table style="width:100%">
        <tr>
            <td class="">职位名称</td>
            <td class="">职位状态</td>
            <td class="">职位顺序</td>
            <td class="">部门名称</td>
            <td class="">编辑</td>
        </tr>
        {jobs}
        <tr>
            <td id="{id}" class="jl-name">{jobname}</td>
            <td id="{id}_status" class="jl-state">
                {status}
            </td>
            <td class="jl-seq">
                <input type="number" value="{sequence}" name="sequence" id="{id}_sequence" class="vl-imgseqinput">
            </td>
            <td id="{id}_department" class="jl-dname">
                {department}
            </td>
            <td id="{id}_edit" class="jl-edit">
                <a href="javascript:;" onclick="$updatejob('{id}') " class="cl-imgeditbtn">保存</a>
                <a href="javascript:;" onclick="$changejobstatus('{id}')" class="cl-imgeditbtn">隐藏/显示</a>
                <a href="javascript:;" onclick="$deletejob('{id}')" class="cl-imgeditbtn">删除</a>
            </td>
        </tr>
        {/jobs}
    </table>
</div>