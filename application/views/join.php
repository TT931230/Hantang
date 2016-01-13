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
            <div class="newborder">
                <div class="imagearea">
                    <img src="bootstrap/images/1.jpg" alt="">
                </div>
                <div class="videoarea">
                    <video controls="controls" autoplay=true>
                        <source src="video/test.mp4" type="video/mp4" />
                        <source src="video/test.ogv" type="video/ogg" />
                        <source src="video/test.webm" type="video/webm" />
                    </video>
                </div>
                <div class="dashline ">
                    <nav>
                        <ul class="nav masthead-nav navcust">
                        {department}
                            <li>
                                <a href="#" class="dropdown dropdowncust" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{departmentname}</a>
                                <ul class="dropdown-menu dropdownmenucust dropdowndepart">
                                    {job}
                                        <li><a href="/join/detail/{jobname}">{jobname}</a></li>
                                    {/job}
                                </ul>
                            </li>
                        {/department}
                        </ul>
                        </nav>
                </div>
                <div class="dashline">
                    <div class="music_more">
                        <span>
                        </span>
                        <span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
