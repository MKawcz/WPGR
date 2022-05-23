<?php
    trait ShowParent {
        public function getParent(){
            $className = __CLASS__;
            echo "$className";
        }
    }

    class User {
        use ShowParent;
    }

    class Ziomek {
        use ShowParent;
    }

    class Tata {
        use ShowParent;
    }

    $object = new User();
    $object->getParent();
?>