<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <h6>style of code</h6>
          <p>optimize code</p>
          <ul>
              <li>based of object</li>
              <li>every thing object</li>
              <li>more dynamic</li>
          </ul>
          <?php
          # CLASS & OBJECT

          # CLASS
          class ClassName
          {
              # class Properties
              private $name_private;                          
              public $name_public;                          
              protected $name_protected;         
              
              var $name_var;

              public $name;
              public $age;
              public $address;
              public $salary;
              
              # _default value 
              public $name_default=5;
              public $age_default=4;
              public $address_default=5;
              public $salary_default=111;

              # Methods  action
              public function method(){
                    echo "<br> address " . $this->address . " age " . $this->age . " name " . $this->name  . " salary " . $this->salary; 
              }
              public function method_arg($arg1=4,$arg2="445",$arg3=88){
                    echo "<br> arg1 " . $arg1 . " arg2 " . $arg2 . " arg3 " . $arg3; 
              }

              # Constants 
              const XXX="VALUE";
              public function method_self(){
                    echo "<br> const " . self::XXX . self::XXX; 
                    echo $this->name_default;
              }
              # Self  && this$
              # $THIS-> RETURN TO CLASS VARIABLE property object 
              # Self::  RETURN TO CLASS to just class
          }

          #OBJECT
          $data=new ClassName();

          $data->address=55;
          $data->age=55;
          $data->name=55;
          $data->salary=55;

          echo $data->address;

          echo $data->method();
          echo $data->method_self();
          echo $data->method_arg(55,66,77);

          echo $data::XXX;

          # Encapsulation :: to capsulation user not change any property change and used method to change property (save method) or print
          /*
          * to used wright
          */
          class ClassNameTwo
          {
              private $lock;
              public function changeLock($lo) {
              $this->lock=sha1($lo);
              }
              
              public function getLock() {
              return $this->lock;
              }
          }
          $Encapsulation=new ClassNameTwo();
          $Encapsulation->changeLock("karemlashi");
          echo $Encapsulation->getLock();

          # Inheritance 

          // super class 
          class ClassBase
          {
             
              public $one;
              public $two;
              public $three;
              public $four;
               
              public function one() {
              return $this->one;
              }
              
              public function two() {
              return $this->two;
              }
          }
            
          
          // sub class 
          class ClassChild extends ClassBase
          {
              
              public $five;
              public $six;
              
              public function five() {
              return $this->five;
              }
          }
          $inh=new ClassChild();
        
          #  Final 
          // NO OVERRIDE

          class ClassSuper
          {
             
              public $one;
              public $two;
              public $three;
              public $four;
               

              final public function five() {
              return $this->five;
              }
          }
            
          
          // sub class 
          # final class can not inherit
          final class ClassSub extends ClassSuper
          {
              
              public $five;
              public $six;
              
              
          }


          # Abstraction  
          /*
          * used t put rules 
          * معايير جوده
          * like design 
          * function no action 
          * can not create object [instantiate]
          * method 
          * property
          * just Inheritance
          * rules to get on 
          * force 
          */
          abstract class ClassAbstract
          {
              // keyword abstract
              public $base;
              abstract public function getRam(); 
              // no body
              // in Inheritance most be declare
               
              public function setRam(){

               } // no body
              
              
          }
        
          class ChildClassAbstract extends ClassAbstract
          {
            
            public function getRam(){

            }
              
          }
          
          $abstract_obj=new ChildClassAbstract();

          # Polymorphism pattern 
          /*
          * multi face to 
           */


           interface NoCode{

            public function item();
            /*
            * function most b used 
            */

           }
          class ClassPolymorphismBase implements NoCode
          {
              public $all;

              public function item() {
              
              }
          }
          
          class ClassPolymorphismSub
          {
              public $all;

              public function item() {
              
              }
          }
          

          class ClassVisibility 
          {
              # Visibility Markers
              // public      in any where 
              // private     in just class
              // protected   in any Inheritance class
          }
          
          // Construct

          class ClassMagic
          {
              public $one;
              public $two;
              public $three;
              

              public function __construct($num = null, $x=505.55,$xx="kareem")
              {
                  $this->one = $num;
                  $this->two = $x;
                  $this->three=$xx;
                  
              }


            public function __call($name, $arguments)
            {
                echo "<br> name $name";
                foreach ($arguments as  $value) {
                echo "<br> arguments $value";
                }
            }
            public function __get( $color)
            {
                echo "<br>" . $color . "is not found";
            }
            public function __set( $color,$val )
            {
                echo "<br>" . $color ." value " . $val . " is not found";
            }
            
            public function __clone()
            {
                $this->one=clone function(){$this->one();};

            }
            
          }

          $kare=new ClassMagic(11,222,"cccccccc");

          
          $kare->go(1,2,3,4); 
          $kare->color; 
          $kare->color=99; 
        
          $copy= $kare;          // link between two
          echo "<br>" . $copy->one;
          $copy3=clone  $kare;  // just copy
          $copy3->one=44;
          echo "<br>" . $copy3->one;
          echo "<br>" . $kare->one;

          class ClassStatic 
          {
              static public $x="kareem";
              public static function functionName()
              {
                  echo "<br> Static Static ". self::$x;
              }
          }

          ClassStatic::functionName();
          echo "<br> Static ". ClassStatic::$x;

          class ClassAllMethod
          {
              public  function functionName()
              {
                  echo "<br>  functionName ";
                  return $this;
              }
              public  function functionName2()
              {
                  echo "<br>  functionName2 ";
                  # # chaining                 
                  return $this;

              }
              public  function functionName3()
              {
                  echo "<br>  functionName3 ";
                    
                  # $this chaining                 
         
                  return $this;

              }
          }

          $all=new ClassAllMethod();
          $all->functionName()->functionName2()->functionName3();

          # single inheritance
          trait ClassTrait 
          {
              public $f1;
              
          }
        
          trait ClassTrait2
          {
              public $f2;
              
          }

                    
          trait ClassTrait3
          {
              public $f3;
              
          }
        
          trait ClassTrait4
          {
              public $f4;
              
          }
                    
          class ClassTraitAll
          {
              use ClassTrait;
              use ClassTrait2;
              use ClassTrait3;
              use ClassTrait4;
          }
                    
          class ClassTraitAll1
          {
              use ClassTrait, ClassTrait2,ClassTrait3, ClassTrait4;
          }

          $allTrait=new ClassTraitAll();

          $allTrait->f1=44;
          $allTrait->f2=44;
          $allTrait->f3=44;
          $allTrait->f4=44;

          trait fet{
              public function item() {
                echo "<br> 1";
              }
          }
          
          trait fet2{
              public function item() {
                echo "<br> 1";
              }
          }
          
        class allFet {
            use fet ,fet2{
                fet2::item as item2;
                fet::item insteadof fet2;
            }

        }
          
        $allFet1=new allFet();
        $allFet1->item();
        $allFet1->item2();

        //Namespace 
        /* 
        * no repeat  class name
        * no redeclare
        */



        require("./namespace.php");

        $all=new  sony\create;
        $all2=new  lg\create;
        $all3=new  apple\create;
        $all4=new  \all\one\new\create;

        class nameS extends  \sony\create{

        }


        class Grandpa 
        {
            public $arg;

            public function __construct($arg)
            {
                $this->arg=$arg;

            }

        }
        $Grandpa=new Grandpa(55);

        class Papa extends Grandpa
        {
            public $arg3;

            public function __construct($arg1,$arg2)
            {
                // call Grandpa's constructor
                parent::__construct($arg1);
                $this->arg3=$arg2;
            }
            public function item() {
                echo $this->arg ." . " . $this->arg3;
            
            }
        }

        $Papa=new Papa(55,22);
        $Papa->item();
          ?>

</body>
</html>