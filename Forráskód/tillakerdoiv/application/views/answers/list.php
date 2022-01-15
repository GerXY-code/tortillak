<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css'>       
<style>
body {
  padding: 25px;
  background-color: ghostwhite;
  color: black;
  font-size: 25px;
  font-family: 'Comic Sans MS';
}

.dark-mode {
  background-color: black;
  color: white;
}
#mainwrapper{
   margin-left:35%;
}
</style>
</head>
<div id="mainwrapper">
<body>
<button onclick="myFunction()" class="btn btn-lg btn-dark">Sőtét mód Ki-Be kapcsolása</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

<h1>Kérdőív</h1>
<!--<//?php var_dump($answers)?>-->
<?php $i=1?>
<h3>Elég gyorsan kiérkezett a rendelt étel?</h3>
<?php foreach($answers as $a):?>
<?php if($a->id==1):?>
    <div><?php echo $i?>: <?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h3>Elégedett volt-e a felszolgáló kedvességével?</h3>
<?php foreach($answers as $a):?>
 <?php $i=1?>
<?php if($a->id==2):?>
    
    <div><?php echo $i?>: <?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h3>Ízlett-e az elfogyasztott étel?</h3>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==3):?>
   
    <div><?php echo $i?>: <?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h3>Megvolt-e elégedve a választékkal?</h3>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==4):?>
    
    <div><?php echo $i?>: <?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h3>Vissza fog-e térni ide a közeljövőben?</h3>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==5):?>
    
    <div><?php echo $i?>: <?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h3>Ajánlaná-e másnak az éttermünket?</h3>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==6):?>

    <div><?php echo $i?>: <?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h3>Ön szerint ételek terén miben kellene fejlődnie az éttermünknek?</h3>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==7):?>
  
    <div><?php echo $i?>: <?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h3>Esetleg valamilyen ötlettel gazdagítaná-e tudásbázisunkat?</h3>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==8):?>
    
    <div><?php echo $i?>: <?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>

<a href='<?= base_url("Kerdoiv/fill"); ?>' class="btn btn-lg btn-primary">Kitöltöm a kérdőívet</a>
</body>

</div>
