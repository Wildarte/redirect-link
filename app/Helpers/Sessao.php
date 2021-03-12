<?php

class Sessao{


    public static function msg($nome, $texto = null, $classe = null){

        if(!empty($nome)): //se $nome for diferente de vazio
            if(!empty($texto) && empty($_SESSION[$nome])): //se $texto for diferente de vazio e $nome for vazio
                if(!empty($_SESSION[$nome])):
                    unset($_SESSION[$nome]);
                endif;

                $_SESSION[$nome] = $texto;
                $_SESSION[$nome.'classe'] = $classe;

                elseif(!empty($_SESSION[$nome]) && empty($texto)):

                    $classe = !empty($_SESSION[$nome.'classe']) ? $_SESSION[$nome.'classe'] : 'alert alert-success';

                    echo '<div class="'.$classe.'">'.$_SESSION[$nome].'</div>';

                    unset($_SESSION[$nome]);
                    unset($_SESSION[$nome.'classe']);

            endif;
        endif;

    }


}