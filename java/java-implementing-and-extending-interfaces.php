<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Implementing &amp; Extending Interfaces, Default Methods | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,interfaces,implementing,extending,default,method,static">

    <meta name="Description" content="Interfaces used for multiple inheritance in java,implements keyword is used to implement the interfaces.In java, we can't extend more than one class but can implement many interfaces along side the class extension.An interface can extend an already existing interface by the extends keyword.">

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
                <h1>Implementing Interfaces</h1>
                <p><span class="coral">implements</span> keyword is used to implement the interfaces.</p>
                <p>Interfaces are used for multiple inheritance in java.</p>
                <p>In java, we can't extend more than one class but can implement many interfaces along side the class extension.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  class A implements interface_name{
        ...
  }          </pre>
                <br>
                <p>We can extend one class &amp; implement interface at the same time.</p>
                <pre class="output">
  class A extends classB implements interfaceA{
        ...
  }          </pre>
                <br>
                <br>

                <p>Number of interfaces can be implemented by separating them with commas.</p>
                <pre class="output">
class A extends B implements interA,interB,interC{
        ...            
 }         </pre>
                <br>
                <br>
                <h4>Program:</h4>
                <p>In this program we create an interface, implement it to a class &amp; define its methods functionality and access them with objects.</p>
                <pre class="code prettyprint linenums=1">
interface InterA{   
   int x=10;       //interface field
   void display();     //abstract method
}

class Test implements InterA{

  //overriding interface method
  public void display(){   
      System.out.println("Interface field Value: "+x);
      System.out.println("Interface overridden method ");
  }

  public static void main(String[] args) {
      Test t = new Test();
      t.display();
  }
}        </pre>

                <h4>Output:</h4>
                <pre class="output">
  Interface field Value: 10
  Interface overridden method     </pre>

                <br>

                <p>Here, we've created interface <b>InterA</b>, which has one variable &amp; one abstract method.</p>
                <p>The interface is implemented by class <b>Test</b> which defined the functionality of <b>display()</b> method.</p>
                <p>Then, using the Test object <b>t</b> called the display() method.</p>
                <br>
                <br>
                <h2>Extending Interfaces:</h2>
                <p>An interface can extend an already existing interface by the <span class="coral">extends</span> keyword.</p>
                <p>The interface which extending the existing interface derives abstract methods &amp; fields from the existing interface. so, any class implementing the interface has to define all the methods from both the interfaces.</p>

                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  interface InterB extends InterA{
       ...
  }         </pre>

                <p>Here, interface <b>InterB</b> extends all the methods from interface <b>InterA</b>.</p><br>
                <br>
                <h4>Program:</h4>
                <p>In this program, we'll extend an interface from another interface.</p>
                <pre class="code prettyprint linenums=1">
interface InterA{    
     void methodA();     
}
interface InterB extends InterA{  //extending interface
    void methodB();
}

class Test implements InterB{

    //overriding both interface methods
    public void methodA(){   
        System.out.println("This is method A ");
    }

    public void methodB(){
        System.out.println("This is method B");
    }

    public static void main(String[] args) {
        Test t = new Test();
        t.methodA();
        t.methodB();
    }
}   </pre>
                <h4>Output:</h4>
                <pre class="output">
   This is method A
   This is method B       </pre>

                <p>Here, class <b>Test</b> has to define both the methods from interface <b>InterA</b> &amp; <b>InterB</b> because class Test has implemented the interface InterB which also extends another interface InterA.</p><br>
                <h2>Default Method in Interface:</h2>
                <br>
                <p>We know that interfaces can only have abstract methods but it is possible to have method body by declaring a method as default.</p>
                <p>To make a method default simply the keyword <span class="coral">default</span> is used.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  default void disp(){...}        </pre><br>
                <br>
                <h4>Program:</h4>
                <p>In this program, we'll create a default method inside interface.</p>
                <pre class="code prettyprint linenums=1">
interface A {
    default void disp(){  //default method
        System.out.println("default method in interface");
    }
}

class Test implements A{
    public static void main(String[] args) {
        new Test().disp();
    }
}           </pre>

                <h4>Output:</h4>
                <pre class="output">
  default method in interface       </pre>


                <p>Here, the interface <b>A</b> has a default method <b>disp()</b> with method body.</p>
                <br>
                <h2>Static method in Interface:</h2>
                <p>Interface can have static method with method body.</p>
                <p>static methods are created with <span class="coral">static</span> keyword.</p>
                <h4>Syntax:</h4>
                <pre class="output">
  static void disp(){...}         </pre>
                <br>

                <h4>Program:</h4>
                <p>In this example program we'll create a static method inside interface &amp; then access it with <b>"Interface_Name.method_name"</b> just like any static class memeber. </p>
                <pre class="code prettyprint linenums=1">
interface A {
    static void disp(){  //static method
        System.out.println("static method in interface");
    }
}

class Test implements A{
    public static void main(String[] args) {
        A.disp();
    }
}           </pre>

                <h4>Output:</h4>
                <pre class="output">
  static method in interface       </pre>

                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-interface-basics.php" class="f-left">prev</a>
                    <a href="./java-what-is-thread.php" class="f-right">next</a>
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
