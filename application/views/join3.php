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
                
<!--                    <a onclick="$jobajax('{id}')" class="join-dropdown join-dropdowncust dropdowndeparta" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{department}</a> 
                     <ul class="dropdown-menu dropdownmenucust dropdowndepart">  
                         <span class="dropdown-triangle"></span>  
                          {job} 
                          <li> 
                          <a class="job-dropdownli">{jobname}</a></li>                   
                         <a onclick="$departmentajax('{id}')" class="job-dropdownli">{jobname}</a></li>
                          <li class="dropdown-list-line"><span></span></li>  
                           {/job}  
                      </ul>    -->
                 
                <a onclick="$jobajax('{id}')" href="javascript:void(0);">{department}</a>
                                            
                </li>
            {/department}     

                
            </ul>
        </nav>
    </div> 
    <div class="job-detail-info">
      <div class="job-detail-title">
        <span class="jdt-title1">职位名称</span>
        <span class="jdt-title2">职位类别</span>
        <span class="jdt-title3">工作地点</span>
        <span class="jdt-title4">招聘数</span>
        <span class="jdt-title5">发布时间</span>
      </div>  
         <div class="jobdetailarea" id="jobdetailarea" "></div>

    </div> 
   <div class="departmentdetailarea" id="departmentdetailarea"></div> 
   </div>
    

    
    
    
    