<?php
echo '
<style>
  html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
	background-color: #ff7600;
}

.parent {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    
    overflow: auto;
	background-attachment:fixed;
background-size: 800px;
	background-image:url(https://7-tv.github.io/assets/img/bc1.png);
	background-position:center;
	background-repeat:no-repeat;
}
</style>
<div class=\'parent\'></div>
';
?>
