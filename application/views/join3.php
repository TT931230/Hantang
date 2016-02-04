<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/2/4
 * Time: 10:19
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="dashline" style="display: {joindisarea2}">
    <div class="joininfo">
        <nav>
            <ul class="nav join-masthead-nav navcust">
                {department}
                <li>
                    <a class="join-dropdown join-dropdowncust dropdowndeparta" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{department}</a>
                    <ul class="dropdown-menu dropdownmenucust dropdowndepart">
                        <span class="dropdown-triangle"></span>
                        {job}
                        <li><a onclick="$departmentajax('{id}')" class="job-dropdownli">{jobname}</a></li>
                        <li class="dropdown-list-line"><span></span></li>

                        {/job}
                    </ul>
                </li>
                {/department}
            </ul>
        </nav>
    </div>
</div>
<div class="dashline">
    <div class="departmentdetailarea" id="departmentdetailarea">
    </div>
</div>