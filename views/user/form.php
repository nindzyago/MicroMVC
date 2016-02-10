<?php require_once('languages/'.$lang.'.php');?>

<div class="container">
  <div class="row-fluid">
    <div class="span12">
    <h1><?=$labelHeader?></h1>
    </div>
  </div>
  <div class="row-fluid">
  <div class="span6 offset6">
    <div id="maincontent" class="span8"> 
      
      <form id="registration-form" class="form-horizontal">
          <h1><small><?=$labelSubHeader?></small></h1>
          <br/>
          
          <div class="form-control-group">
            <label class="control-label" for="name"><?=$labelName?></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="name" id="name">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name"><?=$labelUsername?></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="username" id="username">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name"><?=$labelPassword?></label>
            <div class="controls">
              <input type="password" class="input-xlarge" name="password" id="password">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name"><?=$labelRetypePassword?></label>
            <div class="controls">
              <input type="password" class="input-xlarge" name="confirm_password" id="confirm_password">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="email"><?=$labelEmail?></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="email" id="email">
            </div>
          </div>
          <div class="form-control-group">
            <label class="control-label" for="message"><?=$labelAddress?></label>
            <div class="controls">
              <textarea class="input-xlarge" name="address" id="address" rows="3"></textarea>
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="message"><?=$labelPolicy?></label>
            <div class="controls">
             <input id="agree" class="checkbox" type="checkbox" name="agree">
            </div>
          </div>

          <input type="hidden" name="controller" value="user">
          <input type="hidden" name="action" value="register">

          <div class="form-actions">
            <button type="submit" class="btn btn-success btn-large"><?=$buttonRegister?></button>
            <button type="reset" class="btn"><?=$buttonCancel?></button>
          </div>
  
      </form>
    </div>
    <!-- .span -->
  </div>
  <!-- .row -->
</div>
<!-- .container --> 

<script src="/micromvc/assets/js/jquery-1.7.1.min.js"></script>
<script src="/micromvc/assets/js/jquery.validate.<?=$langCode?>.js"></script>
<script src="/micromvc/script.js"></script>

<script>
		addEventListener('load', prettyPrint, false);
		$(document).ready(function(){
		$('pre').addClass('prettyprint linenums');
			});
</script>

