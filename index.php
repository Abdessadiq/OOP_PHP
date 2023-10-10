<?php 
    /**
     *  Class & Object
     *  - Class is a BluePrint that You can create Object From..
     *  - Object is the member in the main Application..
     * - Class Has properties..
     * - Variable inside class = [Property ]
     * - Variable outside class = [Variable ]
     * -Function Inside Class = [Mehtod ]
     * -Function Outside Class = [ Function ]
     * 
     * - [ Class ] = class keyword
     * - [ new ] =  new keyword
     * - [ -> ] = Object Operator
     * - [ $this ] = Pseudo Variable [ Refer To Object Properties]
     * -[::] = Scope Resolution Operator [ Paamayim Nekudotayim  ] = Double Colon
     * 
     *      Apple : 
     *       - Class : Apple Blueprint Design...
     *       - Object : Memebre That China made..
     *       - Application : Apple Store

     *   Web Application Registration : 
     *       - Class : Code to Add New Members...
     *       - Object : The membres..
     *       - Application : Web Application Registration.. 
     * 
     *  self vs const
     *  - self:
     *      - Refer to Current Class..
     *      - Access Static Members..
     *      - Not use ($) Because its Not Represent Variable but present class construction
     * - $this:
     *      - Refer to Current Object..
     *      -Acces Not static memebers 
     *      -use ($) Because It represent a variable

     */

     

     // Exemple For Class

     class AppleDevice {

        // Properties
        public $ram='1 GB';
        public $inch='4 Inch';
        public $space='16 GB';
        public $color='Silver';
        public $ownerName;
        

        // Constants
        const OWNERNAME = 5;

        // Methods
        public function getSpeficication(){
            echo 'This Iphone RAM Is : '.$this->ram.'<br>';
            echo 'This Iphone Inch Is : '.$this->inch. '<br>';
        }

        public function setOwnerName(){
            if(strlen($this->ownerName) < self::OWNERNAME){
                echo 'Owner Name Cant Be Less Than '.self::OWNERNAME.' Chars'. '<br>';
            }
            else{
                echo 'Your Name Has Been Set'. '<br>';
            }
        }
            public function setOwnerNameWithParam($ownerName){
            if(strlen($ownerName) < 3){
                echo 'Owner Name Cant Be Less Than 3 Chars'. '<br>';
            }
            else{
                echo 'Your Name Has Been Set'.'<br>';
                echo 'Your Name Is '.$ownerName.'<br>';
            }
        }

        // i can create method what i can do Like than Constructeur..
        public function changeSpec($ra,$in,$sp,$co){
            $this->ram=$ra;
            $this->inch=$in;
            $this->space=$sp;
            $this->color=$co;
        }

     }

    $iPhone6Plus = new AppleDevice();

    $iPhone6Plus->changeSpec("3 GB", "4.5 Inch", "32 GB", "Gold");
     echo $iPhone6Plus-> ram.'<br>';
    $iPhone6Plus -> ownerName = 'ABDESSADIQ';
    $iPhone6Plus -> setOwnerName();
    $iPhone6Plus -> setOwnerNameWithParam("Osa");
    $iPhone6Plus -> getSpeficication();
    // How To Acces to const of class

    echo AppleDevice::OWNERNAME;
    // OR 
    echo $iPhone6Plus::OWNERNAME;
    