<?php

  namespace Core\HTML;



  class BootstrapForm extends Form{   


      /**
       * Modifier la méthode qui ajoute des balises html
       * @param  $html  Balise html
       * @return string
       */
      protected function surround($html){
          return "<div class=\"form-group\">$html</div>";
      }



      /**
       * Afficher les champs du formulaires
       * @param  $name  string
       * @param  $label
       * @param  $options array
       * @return [string
       */
      public function input($name, $label, $options = []){
          //stocker le type de champs
          $type = isset($options['type']) ? $options['type'] : 'text';

          $label = '<label>' . $label . '</label>';

          $input = '<input type="'. $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control" />';

          return $this->surround($label . $input);
      }



      /**
       * Modifier la méthode qui affiche le bouton submit du formulaires
       * @return string
       */
      public function submit(){
          return $this->surround('<button type="submit" class="btn btn-success" >Envoyer</button>');
      }

  }




 ?>
