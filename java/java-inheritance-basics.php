<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Inheritance, Diamond Problem | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,inheritance,super,class,sub,extends,multilevel,hierarchical,multiple,diamond,problem">

    <meta name="Description" content="Inheritance is one of the fundamental properties of object oriented programming languages,allows to create hierarchy between classes.With Inheritance one class can inherit or acquire the properties of the parent class.Types of inheritance-Single,Multilevel,Hierarchical,Multiple.">

    <?php include '../modules/head-links.php'; ?>



</head>

<body>

    <!--    SIDE-NAV   -->
    <?php include './j-module/side-nav.php'; ?>


    <!--    OPAQUE  -->
    <?php include '../modules/opaque.php'; ?>


    <!--    TOP-NAV-FIXED-->
    <?php include '../modules/top-nav.php'; ?>



    <!--MAIN-WRAPPER-->
    <div class="main-wrapper">


        <!--        BRAND-TOP         -->
        <?php include '../modules/brand-top.php'; ?>




        <!--WRAPPER-->
        <div class="wrapper">


            <!--MAIN-->

            <div class="main">
                <br>
                <h1>What is Inheritance &#63;</h1>
                <br>
                <p><span class="bold">Inheritance</span> is one of the fundamental properties of object oriented programming languages. It allows to create the hierarchy between classes.</p>
                <br>
                <p>With Inheritance one class can inherit or acquire the instance variables &amp; methods of the Inherited class.</p>
                <p>The class being inherited is called <span class="coral">super class</span> and the class inheriting the super class called <span class="coral">sub class</span>.</p>
                <br>
                <br>

                <p>The Inheritance is done with the keyword <span class="coral">extends</span>.</p>
                <pre class="output">
    class A extends B{...}      </pre>
                <p> Here, class A inherits the members of Class B. so, A called subclass &amp; B is called super class.</p>
                <br>
                <br>


                <h2>Types of Inheritance:</h2>
                <p>There are basically four types of inheritance in java. They are</p>
                <ul class="bullets">
                    <li>Single </li>
                    <li>Multilevel </li>
                    <li>Hierarchical </li>
                    <li>Multiple </li>
                </ul>
                <br>
                <br>
                <h3><b>Single Inheritance:</b></h3>
                <p>The simplest version of inheritance is single inheritance. It consists of only one super class and one subclass.</p>

                <img src="../images/java-single-inheritance.png" alt="single Inheritance">
                <h4>Syntax:</h4>
                <pre class="output">
  class A{...}
  class B extends A{...}     </pre>
                <p>Here, <b>class B</b> extends properties of <b>class A</b>.</p>
                <br>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{    //super class
  void display(){     //super class method
      System.out.println("super method");
  }
}
class B extends A{
  public static void main(String[] args) {
      B obj = new B();
      obj.display();
  }
}        </pre> <br>
                <h4>Output:</h4>
                <pre class="output">
  super method          </pre>

                <br>

                <p>Here, you can see the method <span class="coral">display()</span> is not part of <span class="coral">class B</span> but we can still be able to access the method using class B object because of the <span class="bold">Inheritance</span>.</p>
                <br>
                <br>
                <br>
                <h3><b>Multilevel Inheritance:</b></h3>
                <p>In <span class="bold">Multilevel Inheritance</span> several classes inherits one another in a straight chain like sequence. At every level the child inherits all the properties of its parents.</p>
                <br>
                <p>At every level one class can have only one direct child class.</p>
                <img src="../images/java-multilevel-inheritance.png" alt="multilevel">
                <h4>Syntax:</h4>
                <pre class="output">
  class A{...}
  class B extends A{...}
  class C extends B{...}      </pre>
                <br>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{    //Grand parent class
  void methodA(){     
      System.out.println("Class A method");
  }
}
class B extends A{ //parent class
   void methodB(){
       System.out.println("Class B method");
   }
}
class C extends B{  //child class
  public static void main(String[] args) {
      C obj = new C();
      obj.methodA();
      obj.methodB();
  }
}        </pre> <br>
                <h4>Output:</h4>
                <pre class="output">
  Class A method
  Class B method    </pre> <br>

                <p>Here, class A,B &amp; C extends one another in a chain like sequence one after another. At the end C inherits all the properties from both class A &amp; B.</p>
                <br>
                <p>So, thats why we can access the methods from both the classes by using the child object.</p>
                <br>
                <br>
                <br>
                <h3><b>Hierarchical Inheritance:</b></h3>
                <p>In <span class="bold">Hierarchical Inheritance</span> one parent class can have multiple child classes which creates a hierarchy of classes.</p><br>
                <p>Here, several classes acquire properties of a single parent class.</p>
                <img src="../images/java-hierarchical-inheritance.png" alt="Hierarchical"><br>
                <h4>Syntax:</h4>
                <pre class="output">
  class A{...}
  class B extends A{...}
  class C extends A{...}
  class D extends A{...}      </pre>
                <br>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{    
    void methodA(){     
        System.out.println("Class A method");
    }
}
class B extends A{ 
    void methodB(){
        System.out.println("Class B method");
    }
}
class C extends A{  
   void methodC(){
       System.out.println("Class C method");
   }
}
class D extends A{
    void methodD(){
        System.out.println("Class D method");
    }
    public static void main(String[] args) {
        B obB = new B();
        C obC = new C();
        D obD = new D();
        obB.methodA();
        obC.methodA();
        obD.methodA();
    }
}          </pre><br>

                <h4>Output:</h4>
                <pre class="output">
  Class A method
  Class A method
  Class A method      </pre><br>
                <p>Here, class B,C &amp; D inherited the properties of class A.</p>
                <p>so, we can access the <span class="coral">methodA()</span> using the objects of class B,C &amp; D.</p>
                <br>
                <br>
                <br>

                <h3><b>Multiple Inheritance:</b></h3>

                <p><span class="bold">Multiple Inheritance</span> is the concept where one class can inherit several parent class.</p>
                <img src="../images/java-multiple-inheritance.png" alt="Multiple Inheritance">

                <h2><b>Java does not suppport Multiple Inheritance</b></h2>

                <br>
                <br>
                <br>
                <h2><b>Diamond Problem:</b></h2><br>
                <p><b>Diamond Problem</b> occurs when both the parent classes have method with same signature. Then if we create child object &amp; try to invoke the parent method, there exists ambiguity about which method to call.</p><br>
                <p>It given compile time error.</p><br>
                <img src="../images/java-diamond-problem.png" alt="Diamond Problem">
                <br><br><br>
                <p>The whole problem structure shapes like a diamond ,thats why it is called <b>Diamond Problem.</b> </p>
                <br>
                <br>
                <h2>Solution:</h2><br>
                <p>In order to have <b>Multiple Inheritance</b> in java, there are concept of <span class="coral">interface</span> is introduced which lets more than one interface to be implemented.</p>
                <br>
                <p>The concept of interface we will learn in the next chapter.</p>
                <br>
                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-inner-class.php" class="f-left">prev</a>
                    <a href="./java-super-keyword.php" class="f-right">next</a>
                </div>

                <div class="main-bottom">
                </div>

            </div>



            <!--RIGHT-SIDE-->
            <div class="right-side">Right Side</div>
        </div>


        <!--        FOOTER-->
        <?php include '../modules/footer.php'; ?>



    </div>



</body>

</html>
