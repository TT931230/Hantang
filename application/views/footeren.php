<?php
/**
 * Created by PhpStorm.
 * User: ZHY
 * Date: 2016/3/10
 * Time: 15:39
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
    <div class="clearfix">
        <div class="inner">
        <div class="footerarea"> 
            <div class="footerleftdiv1">
                <div class="footertype1"><img src="../../bootstrap/images/footer_logo1.png" alt=""></div>
                   <div class="footerdetials">
                       <div class="footerdetail">
                           <a href="javascript:;">
                               <span class="footerlogos"  data-toggle="modal" data-target="#ul-weixinModal">                        
                                    <img src="../../bootstrap/images/wechat.png" alt="">
                               </span>                                      
                               <span class="footertext">WeChat</span>
                            </a>
                        </div>
                        <div class="footerdetail">
                           <a href="javascript:;">
                               <span class="footerlogos"  data-toggle="modal" data-target="#ul-weixinModal">                        
                                    <img src="../../bootstrap/images/youku.png" alt="">
                               </span>                                      
                               <span class="footertext">Youku</span>
                           </a>
                        </div>
                        <div class="footerdetail">
                           <a href="javascript:;">
                               <span class="footerlogos"  data-toggle="modal" data-target="#ul-weixinModal">
                                     <img src="../../bootstrap/images/sina.png" alt="">
                               </span>                                      
                               <span class="footertext">Weibo</span>
                           </a>
                        </div>
                  </div>
            </div>
            <div class="footerleftdiv2">
                <div class="footertype2"><img src="../../bootstrap/images/footer_logo2.png" alt=""></div>
                   <div class="footerdetials2">
                       <div class="footerdetail2">
                           <a href="javascript:;">
                                <span class="footerlogos" data-toggle="modal" data-target="#ul-weixinModal">                       
                                    <img src="../../bootstrap/images/iqiyi.png" alt="">
                                </span>                                     
                                <span class="footertext">Iqiyi</span>
                           </a>
                        </div>
                  </div>
            </div>
            <div class="footerleftdiv3">
                <div class="footertype3"><img src="../../bootstrap/images/footer_logo3.png" alt=""></div>
                   <div id="footer_3" class="footerdetials3">
                        <div class="footerdetail3">
                            <a href="javascript:;">
                                 <span class="footerlogos">                                                           
                                     <img  data-toggle="modal" data-target="#music-weixinModal" src="../../bootstrap/images/wechat.png" alt=""> 
                                 </span>
                                 <span class="footertext">WeChat</span>
                            </a>
                        </div>
                        <div class="footerdetail3">
                             <a href="http://weibo.com/hantangyinyue?topnav=1&amp;wvr=6&amp;topsug=1" target="_blank">                          
                                  <span class="footerlogos">  
                                      <img src="../../bootstrap/images/sina.png" alt="">
                                  </span>
                                  <span class="footertext">Weibo</span>
                              </a>
                        </div>
                        <div class="footerdetail3">
                             <a href="http://site.douban.com/221186/" target="_blank" >
                                  <span class="footerlogos"> 
                                       <img src="../../bootstrap/images/douban.png" alt="">
                                  </span>
                                  <span class="footertext">Douban</span>
                             </a>
                        </div>
                    </div>
            </div>
            <div class="footerleftdiv4">           
                <div class="footertype4"><img src="../../bootstrap/images/footer_logo4.png" alt=""></div>
                    <div id="footer_4" class="footerdetials4">
                        <div class="footerdetail4">
                            <a href="javascript:;">
                                 <span class="footerlogos" data-toggle="modal" data-target="#hedonist-weixinModal">                        
                                        <img src="../../bootstrap/images/wechat.png" alt="">
                                 </span>
                                 <span class="footertext">WeChat</span>
                             </a>
                        </div>
                        <div class="footerdetail4">
                            <a href="http://weibo.com/hedonists?topnav=1&wvr=6&topsug=1&is_hot=1" target="_blank" style="text-decoration: none;">
                                 <span class="footerlogos"> 
                                        <img src="../../bootstrap/images/sina.png" alt="">
                                 </span>
                                 <span class="footertext">Weibo</span>
                            </a>
                        </div>
                        <div class="footerdetail4">
                            <a href="http://i.youku.com/u/UMTczODA2ODE2MA==" target="_blank" style="text-decoration: none;">
                                 <span class="footerlogos">
                                         <img src="../../bootstrap/images/youku.png" alt="">
                                 </span>
                                 <span class="footertext">Youku</span>
                            </a>
                        </div>
                        <div class="footerdetail4">
                            <a href="http://v.qq.com/vplus/hedonist" target="_blank" style="text-decoration: none;">
                                 <span class="footerlogos">
                                         <img src="../../bootstrap/images/vqq.png" alt="">
                                 </span>
                                 <span class="footertext">v.qq.com</span>
                            </a>
                        </div>
                    </div>
            </div>
            <div class="footerrightdiv">
                <div>© 2002-2016</div>
                <div><span>Shanghai Hantang Culture Development Co., Ltd.</span></div>
                <div>All Rights Reserved.</div>
                <div class="footerrightdiv2">
                <a href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action">沪ICP备13044328号&nbsp;</a>
                <a href="legal">|&nbsp;&nbsp;网站声明</a></div>
            </div>
        </div>
        <!-- ul QRcode -->
        <div class="modal fade" id="ul-weixinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div >
                <div>
                    <div>
                        <div id="weixin2" style="width: 250px; height: 300px; position: fixed; z-index: 100; top: 25%; left: 40%; display: block; background: white;">
                            <div style="height: 30px">
                                <a href="javascript:void(0)" data-dismiss="modal"><img alt="" src="\..\..\bootstrap\images\footer_close.png" style="float: right; padding-top: 13px; padding-right: 13px;"></a>
                            </div>
                            <div>
                                <img alt="" src="../../bootstrap/images/footer_pop_logo.png">
                                <div style="width: 200px; height: 1px; background-color: #CCC; margin-top: 15px;margin-left: 25px;"></div>
                                <img id="erwei" alt="" style="margin-top: 20px; width: 200px; height: 200px;" src="\..\..\bootstrap\images\footer_ul_qr.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <!-- music QRcode -->
          <div class="modal fade" id="music-weixinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div >
                <div>
                    <div>
                        <div id="weixin2" style="width: 250px; height: 300px; position: fixed; z-index: 100; top: 25%; left: 40%; display: block; background: white;">
                            <div style="height: 30px">
                                <a href="javascript:void(0)" data-dismiss="modal"><img alt="" src="\..\..\bootstrap\images\footer_close.png" style="float: right; padding-top: 13px; padding-right: 13px;"></a>
                            </div>
                            <div>
                                <img alt="" src="../../bootstrap/images/footer_pop_logo.png">
                                <div style="width: 200px; height: 1px; background-color: #CCC; margin-top: 15px;margin-left: 25px;"></div>
                                <img id="erwei" alt="" style="margin-top: 20px; width: 200px; height: 200px;" src="\..\..\bootstrap\images\footer_music_qr.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <!-- hedonist QRcode -->
          <div class="modal fade" id="hedonist-weixinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div >
                <div>
                    <div>
                        <div id="weixin2" style="width: 250px; height: 300px; position: fixed; z-index: 100; top: 25%; left: 40%; display: block; background: white;">
                            <div style="height: 30px">
                                <a href="javascript:void(0)" data-dismiss="modal"><img alt="" src="\..\..\bootstrap\images\footer_close.png" style="float: right; padding-top: 13px; padding-right: 13px;"></a>
                            </div>
                            <div>
                                <img alt="" src="../../bootstrap/images/footer_pop_logo.png">
                                <div style="width: 200px; height: 1px; background-color: #CCC; margin-top: 15px;margin-left: 25px;"></div>
                                <img id="erwei" alt="" style="margin-top: 20px; width: 200px; height: 200px;" src="\..\..\bootstrap\images\footer_hedonist_qr.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>