<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:16
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">权限管理</div>
<div class="hpm-div">
    <div id="caselistshow" class="cl-table">
        <table>
            <tr>
                <td class="vl-title1">用户名</td>
                <td class="vl-title2">拥有权限</td>
                <td class="vl-title7">编辑</td>
            </tr>
            {userlists}
            <tr>
                <td class="vl-imgname">{user_name}</td>
                <td class="vl-imgadd">
                    {privilige}
                </td>
                <td class="vl-imgedit">
                    <a href="javascript:;" onclick="$deleteuser('{id}')" class="cl-imgeditbtn">删除</a>
                </td>
            </tr>
            {/userlists}
        </table>
    </div>
</div>