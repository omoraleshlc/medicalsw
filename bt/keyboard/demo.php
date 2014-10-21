<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />
<title>Serkan Karaarslan - Software Engineer</title>
 <!--<link rel="stylesheet" href="jsKeyboard.css" type="text/css" media="screen"/>
 <script type="text/javascript" src="jsKeyboard.js"></script>-->
  <link rel="stylesheet" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/jsKeyboard.css" type="text/css" media="screen"/>
 <script type="text/javascript" src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/jsKeyboard.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

 <script type="text/javascript">
     $(function () {
         jsKeyboard.init("virtualKeyboard");
         $("#txtContent").val(initText);
     });
     
     function focusIt(t) {
        // define where the cursor is to write character clicked.
         jsKeyboard.currentElement = $(t);
         jsKeyboard.show();
     }

     function showKeyboard(id) {
         clean($("#" + id));
         jsKeyboard.currentElement = $("#"+id);
         jsKeyboard.show();
     }
     var isCleaned = false;
     function clean(t) {
         if (!isCleaned) {
             $(t).text("");
             isCleaned = true;
         }
     }
     



 </script>

</head>
<body>
<div>


<div id="requestForm">
<div id="header">
    <div id="title">Your Request</div><div id="keyboardIcon" onclick="showKeyboard('txtContent');"><img src="image/keyboardicon.png" alt=""/></div>
</div>
<textarea rows="6" cols="60"  id="txtContent" class="content" onfocus="jsKeyboard.focus(this);clean(this);"/></textarea>

</div>
    
    <input type="text" name="banco" onfocus="jsKeyboard.focus(this);clean(this);"></input>    

<div id="feedback"></div>

<div id="virtualKeyboard">
</div>
</div> 

</body>
</html>