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
            <input type="submit" class="btn" value="导入CSV">
    </form>
</div>