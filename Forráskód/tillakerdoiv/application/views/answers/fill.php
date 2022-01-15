<?php echo form_open();?>

<h2>Elég gyorsan kiérkezett a rendelt étel?</h2>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '1', 'required' => 'required'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '1', 'required' => 'required'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>


<h2>Elégedett volt-e a felszolgáló kedvességével?</h2>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '2', 'required' => 'required'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '2', 'required' => 'required'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>

<h2>Ízlett-e az elfogyasztott étel?</h2>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '3', 'required' => 'required'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '3', 'required' => 'required'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>
<h2>Megvolt-e elégedve a választékkal?</h2>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '4', 'required' => 'required'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '4', 'required' => 'required'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>
<h2>Vissza fog-e térni ide a közeljövőben?</h2>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '5', 'required' => 'required'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '5', 'required' => 'required'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>
<h2>Ajánlaná-e másnak az éttermünket?</h2>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '6', 'required' => 'required'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '6', 'required' => 'required'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>
<h2>Ön szerint ételek terén miben kellene fejlődnie az éttermünknek?</h2>
<?php 
       
       echo form_textarea(
               ['name' => 'txt1', 'required' => 'required'],
               set_value('',''),
               ['placeholder' => 'Véleményét bővebben kifejtheti a fenti kérdéssel kapcsolatban']
       );
   ?>
<h2>Esetleg valamilyen ötlettel gazdagítaná-e tudásbázisunkat?</h2>
<?php 
       
       echo form_textarea(
               ['name' => 'txt2', 'required' => 'required'],
               set_value('',''),
               ['placeholder' => 'Véleményét bővebben kifejtheti a fenti kérdéssel kapcsolatban']
       );
   ?>
     <br>
<?php 
        echo form_button(
              ['type' => 'submit', 'name' => 'submit', 'class' => 'button'],
               set_value('save','Válaszaim beküldése')
            );
    ?>
  
<?php echo form_close();?>