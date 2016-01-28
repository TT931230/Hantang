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
    <table>
        <tr>
            <td class="vl-title1">职位名称</td>
            <td class="vl-title2">职位状态</td>
            <td class="vl-title3">职位顺序</td>
            <td class="vl-title4">部门名称</td>
            <td class="vl-title5">编辑</td>
        </tr>
        {jobs}
        <tr>
            <td id="{id}" class="vl-imgname">{jobname}</td>
            <td id="{id}_status" class="vl-imgadd">
                {status}
            </td>
            <td class="vl-imgseq">
                <input type="number" value="{sequence}" name="sequence" id="{id}_sequence" class="vl-imgseqinput">
            </td>
            <td id="{id}_department" class="vl-imgadd">
                {department}
            </td>
            <td id="{id}_edit" class="vl-imgadd">
                <a href="javascript:;" onclick="$updatejob('{id}') " class="cl-imgeditbtn">保存</a>
                <a href="javascript:;" onclick="$changejobstatus('{id}')" class="cl-imgeditbtn">隐藏/显示</a>
                <a href="javascript:;" onclick="$deletejob('{id}')" class="cl-imgeditbtn">删除</a>
            </td>
        </tr>
        {/jobs}
    </table>
</div>