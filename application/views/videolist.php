<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row">
        <label class="col-lg-2">视频明细列表</label>
    </div>
    <div class="row"><label class="col-lg-2">视频标题</label>
        <input class="col-lg-2" type="text" id="source_name">
    </div>
    <div class="row">
        <button onclick="$queryVideo()" class="btn btn-default">查询</button>
    </div>
</div>