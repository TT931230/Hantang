<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 13:26
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <form role="form">
                <div class="form-group">
                    <label>Text Input</label>
                    <input class="form-control">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                    <label>Text Input with Placeholder</label>
                    <input class="form-control" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label>Static Control</label>
                    <p class="form-control-static">email@example.com</p>
                </div>
                <div class="form-group">
                    <label>File input</label>
                    <input type="file">
                </div>
                <div class="form-group">
                    <label>Text area</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Checkboxes</label>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">Checkbox 1
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">Checkbox 2
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">Checkbox 3
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Inline Checkboxes</label>
                    <label class="checkbox-inline">
                        <input type="checkbox">1
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox">2
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox">3
                    </label>
                </div>
                <div class="form-group">
                    <label>Radio Buttons</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Inline Radio Buttons</label>
                    <label class="radio-inline">
                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                    </label>
                </div>
                <div class="form-group">
                    <label>Selects</label>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Submit Button</button>
                <button type="reset" class="btn btn-default">Reset Button</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>