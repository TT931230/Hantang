<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/11
 * Time: 9:50
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="cover-container">
    <div class="clearfix">
        <div class="inner">
            <div class="footerleftdiv">
                <div class="footertype"><img src="{footerlogo1}" alt=""></div>
                    <div class="footerdetials">
                        <div class="footerdetail">
                            <a href="javascript:;">
                            <span class="footerlogos" data-toggle="modal" data-target="#weixinModal">
                                 <img src="{weixin}" alt="">
                            </span></a>微信
                         </div>
                        <div class="footerdetail">
                         <a class="footerlogos"  href="http://i.youku.com/u/UMTczODA2ODE2MA==" target="_blank" style="text-decoration: none;">
                                  <img src="{youku}" alt="">
                        </a>优酷</div>
                    </div>
            </div>
            <div class="footerleftdiv">
                <div class="footertype"><img src="{footerlogo2}" alt=""></div>
                   <div class="footerdetials">
                       <div class="footerdetail">
                           <a href="javascript:;">
                        <span class="footerlogos" class="footerlogos" data-toggle="modal" data-target="#weixinModal"><img src="{weixin}" alt=""></span>
                      
                            </a>微信</div>
                  </div>
            </div>
            <div class="footerleftdiv3">
                <div class="footertype3"><img src="{footerlogo3}" alt=""></div>
                    <div id="footer_3" class="footerdetials3">
                        <div class="footerdetail3">
                            <a href="javascript:;">
                         <span class="footerlogos">
                            
                                 <img  data-toggle="modal" data-target="#weixinModal" src="{weixin}" alt="">
                            
                            </span></a>微信</div>
                        <div class="footerdetail3">
                         <a class="footerlogos" href="http://weibo.com/hantangyinyue?topnav=1&amp;wvr=6&amp;topsug=1" target="_blank" style="text-decoration: none;">
                           
                                  <img src="{weibo}" alt="">
                          
                            </a>微博</div>
                        <div class="footerdetail3">
                         <a class="footerlogos" href="http://site.douban.com/221186/" target="_blank" style="text-decoration: none;">
                            
                                 <img src="{douban}" alt="">
                           
                            </a>豆瓣小站</div>
                    </div>
            </div>
            <div class="footerleftdiv4">           
                <div class="footertype4"><img src="{footerlogo4}" alt=""></div>
                    <div id="footer_4" class="footerdetials4">
                        <div class="footerdetail4">
                            <a href="javascript:;">
                         <span class="footerlogos" class="footerlogos" data-toggle="modal" data-target="#weixinModal">
                          
                                <img src="{weixin}" alt="">
                           
                            </span></a>微信</div>
                        <div class="footerdetail4">
                         <a class="footerlogos" href="http://weibo.com/hantangyinyue?topnav=1&amp;wvr=6&amp;topsug=1" target="_blank" style="text-decoration: none;">
                           
                                <img src="{weibo}" alt="">
                            
                            </a>微博</div>
                        <div class="footerdetail4">
                         <a class="footerlogos" href="http://i.youku.com/u/UMTczODA2ODE2MA==" target="_blank" style="text-decoration: none;">
                           
                                 <img src="{youku}" alt="">
                        
                            </a>优酷</div>
                        <div class="footerdetail4">
                         <a class="footerlogos" href="http://v.qq.com/vplus/hedonist" target="_blank" style="text-decoration: none;">
                          
                                 <img src="{tengxun}" alt="">
                            
                            </a>腾讯视频</div>
                        <div class="footerdetail4">
                         <a  class="footerlogos"href="http://www.jianshu.com/users/e447b96581bd/latest_articles" target="_blank" style="text-decoration: none;">
                           
                                 <img src="{jianshu}" alt="">
                           
                            </a>简书</div>
                        <div class="footerdetail4">
                         <a  class="footerlogos"href="http://yuedu.163.com/news_reader/#/~/source?id=81ed83ba67fb49d78bc1b43c25d882ff_1&amp;cid=ab11d60e6ea049b8b61981ec3188" target="_blank" style="text-decoration: none;">
                            
                                 <img src="{wangyi}" alt="">
                           
                            </a>网易云阅读</div>
                    </div>
            </div>
            <div class="footerrightdiv">
                <div>© 2002-2011 by</div>
                <div>Shanghai Hantang Culture Development Co., Ltd.</div>
                <div>All Rights Reserved.</div>
                <div class="footerrightdiv2">
                <a href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action" style="color:#ff0000;text-decoration:none;border-bottom:none;">沪ICP备13044328号&nbsp;</a>
                <a href="legal" style="color:#ff0000;text-decoration:none;border-bottom:none;">|&nbsp;&nbsp;网站声明</a></div>
            </div>
        </div>
        <div class="modal fade" id="weixinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div >
                <div>
                    <div>
                        <div id="weixin2" style="width: 250px; height: 300px; position: fixed; z-index: 100; top: 25%; left: 40%; display: block; background: white;">
                            <div style="height: 30px">
                                <a href="javascript:void(0)" data-dismiss="modal"><img alt="" src="{guanbi}" style="float: right; padding-top: 13px; padding-right: 13px"></a>
                            </div>
                            <div>
                                <img alt="" src="{guanzhu}">
                                <div style="width: 200px; height: 1px; background-color: #CCC; margin-top: 15px;margin-left: 25px;"></div>
                                <img id="erwei" alt="" style="margin-top: 20px; width: 200px; height: 200px;" src="{erwei}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>