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
    <!--<input type="text" id="pagename">-->
    <select id="pagename">
        <option value=""></option>
        <option value="home1">首页1</option>
        <option value="home2">首页2</option>
        <option value="home3">首页3</option>
        <option value="home4">首页4</option>
        <option value="about1">关于汉唐1</option>
        <option value="about2">关于汉唐2</option>
        <option value="about3">关于汉唐3</option>

        <option value="platform1">播出平台1</option>
        <option value="platform2">播出平台2</option>
        <option value="platform3">播出平台3</option>
        <option value="platform4">播出平台4</option>
        <option value="platform5">播出平台5</option>
        <option value="platform6">播出平台6</option>
        <option value="partner1">合作伙伴1</option>
        <option value="partner2">合作伙伴2</option>
        <option value="partner3">合作伙伴3</option>

        <option value="ul1">极致1</option>
        <option value="ul2">极致2</option>
        <option value="ul3">极致3</option>
        <option value="awoe1">问鼎世界1</option>
        <option value="awoe2">问鼎世界2</option>
        <option value="awoe3">问鼎世界3</option>
        <option value="music1">音乐年1</option>
        <option value="music2">音乐年2</option>
        <option value="music3">音乐年3</option>
        <option value="join1">加入汉唐1</option>
        <option value="join2">加入汉唐2</option>
        <option value="join3">加入汉唐3</option>
    </select>
    <div class="row">
        <button onclick="$queryPage()" class="btn btn-default" style="margin-left: 23px;">查询</button>
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