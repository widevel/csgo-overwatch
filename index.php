<?php
include('.' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'config.php');
?>
<title><?php echo $config->titlu; ?></title>

<style>
html{

/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#aebcbf+0,6e7774+50,0a0e0a+51,0a0809+100;Black+Gloss */
background: #aebcbf; /* Old browsers */
background: -moz-linear-gradient(-45deg, #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg, #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg, #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.bt1{
position: absolute;
background-color: #000;
padding: 20px;
color: white;
font-size: 20px;
border-radius: 5px;
font-size: 40px;
text-decoration: none;
left: 329px;
top: 400px;
}

.bt2{
position: absolute;
background-color: #fff;
padding: 20px;
color: black;
font-size: 20px;
border-radius: 5px;
font-size: 40px;
text-decoration: none;
right: 329px;
bottom: 400px;
}
</style>


<a class="bt1" href="competitive.php">Competitve Demos</a>