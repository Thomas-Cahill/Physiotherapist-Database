<?php
function inputElement($icon,$placeholder,$name,$value)
{
    $ele = "
           
           <div class=\"input-group mb-2\">
               <div class=\"input-group-prepend\">
                   <div class=\"input-group-text\">$icon</div>
                   <div>
                       <input type=\"text\" name='$name' value='$value' autocomplete=\"off\"  class=\"form-control\" id=\"inlineFormInputGroup\" placeholder='$placeholder'>
       </div>
    ";
    echo $ele;

}

function buttonElement($buttonid,$styleclass,$text,$name,$attr){
    $button="
    <button name='$name''$attr' class='$styleclass' id='$buttonid'>$text</button>"
        ;
    echo $button;
}