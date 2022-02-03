<?php
//una clase abstracta es imposible de instanciar
    abstract class animal {

        

        public function comer(){
            echo "<p>animal comiendo</p>";
        }

        public function dormir(){
            echo "<p>animal mimiendo</p>";
        }

    }