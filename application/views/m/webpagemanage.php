<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 21:36
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">模块管理</div>
<div>
    <!--   <div class="row">
           <label class="col-lg-2">图片明细列表</label>
       </div>
        -->
    <label>所属页面：</label>
    <select id="pagelevel">
        <option value=""></option>
        <option value="home">首页</option>
        <option value="about">关于汉唐</option>
        <option value="platform">播出平台</option>
        <option value="partner">合作伙伴</option>
        <option value="ul">极致</option>
        <option value="awoe">问鼎世界</option>
        <option value="music">音乐年</option>
        <option value="join">加入汉唐</option>
    </select>
    <label>模块名称：</label>
    <input type="text" id="pagename">
    <div class="row">
        <button onclick="$queryPage()" class="btn btn-default">查询</button>
    </div>
    <div id="caselistshow" class="cl-table">
        <table>
            <tr>
                <td>模块名称</td>
                <td>所属页面</td>
                <td>状态</td>
                <td>顺序</td>
                <td>更新时间</td>
                <td>所属页面内容数</td>
                <td>编辑</td>
            </tr>
            {arealists}
            <tr>
                <td class="cl-imgname">
                    {name}
                </td>
                <td class="cl-imgadd">
                    {page}
                </td>
                <td class="cl-imgtype">
                    {status}
                </td>
                <td class="cl-imgseq">
                    <input type="number" value="{sequence}" name="sequence" id="{id}_sequence" class="cl-imgseqinput">
                </td>
                <td class="cl-imgmini">
                    {update_time}
                </td>
                <td class="cl-imgmini">
                    {count}
                </td>
                <td class="cl-imgedit">
                    <a href="javascript:;" onclick="$updatearea('{id}')" class="cl-imgeditbtn">保存</a>
                    <a href="javascript:;" onclick="$changeareastatus('{id}')" class="cl-imgeditbtn">显示/隐藏</a>
                    <a href="javascript:;" onclick="$deletearea('{id}')" class="cl-imgeditbtn">删除</a>
                </td>
            </tr>
            {/arealists}
        </table>
    </div>
</div>