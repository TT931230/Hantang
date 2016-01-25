<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:14
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <form id="addform" action="PageManager/inserttags" method="post" enctype="multipart/form-data">
        <p>请选择要导入的CSV文件：<br/><input type="file" name="file">
        <p>请选择要导入的标签类型：<br/><select name="tagtype">
                <option value="seasondetails">演出季</option>
                <option value="displaydetails">演出类型</option>
                <option value="yeardetails">年份</option>
                <option value="locationdetails">国家及地区</option>
                <option value="typedetails">类型</option>
                <option value="activedetails">活动类型</option>
                <option value="brandname">品牌</option>
            </select>
            <br/>
            <input type="submit" class="btn" value="导入CSV">
    </form>
</div>