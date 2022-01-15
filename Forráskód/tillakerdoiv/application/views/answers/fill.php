<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css'>
   <style>
      body {

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
<body>
   <div id="mainwrapper">
   <button onclick="myFunction()" class="btn btn-lg btn-dark">Sőtét mód Ki-Be kapcsolása</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
<?php echo form_open();?>

<h3>Elég gyorsan kiérkezett a rendelt étel?</h3>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '1', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '1', 'required' => 'required', 'id'=>'flexRadioDefault2', 'class'=>'form-check-input'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>


<h3>Elégedett volt-e a felszolgáló kedvességével?</h3>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '2', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '2', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>

<h3>Ízlett-e az elfogyasztott étel?</h3>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '3', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '3', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>
<h3>Megvolt-e elégedve a választékkal?</h3>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '4', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '4', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>
<h3>Vissza fog-e térni ide a közeljövőben?</h3>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '5', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '5', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>
<h3>Ajánlaná-e másnak az éttermünket?</h3>
<label>Igen</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '6', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('igen','igen',false),
            
           );
   ?>
<label>Nem</label>
   <?php 
       
       echo form_input(
             /*data p*/['type' => 'radio', 'name' => '6', 'required' => 'required', 'id'=>'flexRadioDefault1', 'class'=>'form-check-input'],  
             /*value p*/ set_value('nem','nem',false),
            
           );
   ?>
<h3>Ön szerint ételek terén miben kellene fejlődnie az éttermünknek?</h3>
<?php 
       
       echo form_textarea(
               ['name' => 'txt1', 'required' => 'required','class'=>'form-control','id'=>'exampleFormControlTextarea1' ,'rows'=>'3'],
               set_value('',''),
               ['placeholder' => 'Véleményét bővebben kifejtheti a fenti kérdéssel kapcsolatban']
       );
   ?>
<h3>Esetleg valamilyen ötlettel gazdagítaná-e tudásbázisunkat?</h3>
<?php 
       
       echo form_textarea(
               ['name' => 'txt2', 'required' => 'required','class'=>'form-control','id'=>'exampleFormControlTextarea1' ,'rows'=>'3'],
               set_value('',''),
               ['placeholder' => 'Véleményét bővebben kifejtheti a fenti kérdéssel kapcsolatban']
       );
   ?>
     <br>
     
<?php 
        echo form_button(
              ['type' => 'submit', 'name' => 'submit', 'class' => 'btn btn-lg btn-primary'],
               set_value('save','Válaszaim beküldése')
            );
    ?>
  
<?php echo form_close();?>
</body>

   </div>
