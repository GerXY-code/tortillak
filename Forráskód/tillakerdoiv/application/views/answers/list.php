<h1>Kérdőív</h1>
<!--<//?php var_dump($answers)?>-->
<?php $i=1?>
<h2>Elég gyorsan kiérkezett a rendelt étel?</h2>
<?php foreach($answers as $a):?>
<?php if($a->id==1):?>
    <?php echo $i?><div><?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h2>Elégedett volt-e a felszolgáló kedvességével?</h2>
<?php foreach($answers as $a):?>
 <?php $i=1?>
<?php if($a->id==2):?>
    
    <?php echo $i?><div><?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h2>Ízlett-e az elfogyasztott étel?</h2>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==3):?>
   
    <?php echo $i?><div><?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h2>Megvolt-e elégedve a választékkal?</h2>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==4):?>
    
    <?php echo $i?><div><?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h2>Vissza fog-e térni ide a közeljövőben?</h2>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==5):?>
    
    <?php echo $i?><div><?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h2>Ajánlaná-e másnak az éttermünket?</h2>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==6):?>

    <?php echo $i?><div><?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h2>Ön szerint ételek terén miben kellene fejlődnie az éttermünknek?</h2>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==7):?>
  
    <?php echo $i?><div><?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>
<h2>Esetleg valamilyen ötlettel gazdagítaná-e tudásbázisunkat?</h2>
<?php $i=1?>
<?php foreach($answers as $a):?>
<?php if($a->id==8):?>
    
    <?php echo $i?><div><?=$a->valasz?></div>
    <?php $i++?>
    <br>
<?php endif;?>
<?php endforeach;?>

<a href='<?= base_url("Kerdoiv/fill"); ?>'>Kitöltöm a kérdőívet</a>