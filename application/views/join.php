<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/11
 * Time: 9:07
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="cover-container">
    <div class="clearfix newborder">
        <div class="inner">
        <div class="subtitle">
                   加入汉唐                                 
            </div>
            <div class="newborder">
                
                <div class="videoarea">
                    <video controls="controls" autoplay=true>
                        <source src="video/test.mp4" type="video/mp4" />
                        <source src="video/test.ogv" type="video/ogg" />
                        <source src="video/test.webm" type="video/webm" />
                    </video>
                </div>               
                </div>
                <div class="dashline">
                <div class="joininfo">
                    <nav>
                        <ul class="nav join-masthead-nav navcust">
                        {department}
                            <li>
                                <a href="#" class="join-dropdown join-dropdowncust" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{departmentname}</a>
                                <ul class="dropdown-menu dropdownmenucust dropdowndepart">
                                    {job}
                                        <li><a href="#" onclick="$departmentajax('{jobname}')">{jobname}</a></li>
                                    {/job}
                                </ul>
                            </li>
                        {/department}
                        </ul>
                    </nav></div>
                </div>
                <div class="dashline">
                    <div class="departmentdetailarea" id="departmentdetailarea">
                     text
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
