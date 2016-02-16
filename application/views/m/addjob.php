<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/27
 * Time: 19:30
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">新增职位</div>
<div class="hpm-div">
    <div class="ce-div">
        <div class="row">
            <label class="col-lg-2">职位名称</label>
            <input type="text" class="col-lg-2" id="jobname">
        </div>
    </div>
    <div class="ce-div">
        <div class="row">
            <label class="col-lg-2">所属部门</label>
            <select  class="col-lg-2" id="departmentname">
                {departmentselect}
                <option value="{id}">{department}</option>
                {/departmentselect}
            </select>
        </div>
    </div>
    <div class="ce-div">
        <div class="row">
            <label class="col-lg-2">岗位要求</label>
            <input type="textarea" style="width: 450px;height: 100px;" id="need">
        </div>
    </div>
    <div class="ce-div">
        <div class="row">
            <label class="col-lg-2">工作职责</label>
            <input type="textarea" style="width: 450px;height: 100px;" id="todo">
        </div>
    </div>
    <div class="ce-savebtn">
        <div class="row">
            <button onclick="$saveJob()">保存</button>
        </div>
    </div>
</div>