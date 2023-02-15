<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Abstract Method &amp; Classes | RapidTutor</title>

    <meta name="Description" content="Abstract class must be inherited to provide implementation of its abstract methods,we can't create object of abstract class,Abstract methods are created with abstract keyword,they must always be inside abstract class.">

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,Abstract,Methods,Classes,properties">


    <?php include '../modules/head-links.php'; ?>



</head>

<body>
    <!--SIDE-NAV-->

    <?php include './j-module/side-nav.php'; ?>


    <!--OPAQUE-->

    <?php include '../modules/opaque.php'; ?>



    <!--TOP-NAV-FIXED-->

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
                <h1>Abstract Method &amp; Class in Java</h1>
                <p>In java abstract methods &amp; classes are created with <span class="coral">abstract</span> keyword.</p>
                <br>
                <h3>Abstract Class:</h3>
                <p>Abstract class is opposite of final class, as it must be inherited to provide implementation of its abstract methods or to access its fields &amp; methods using it's sub class object.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  abstract class A{...}       </pre>
                <br>
                <p>An abstract class in java has the following properties:</p>
                <ul class="bullets">
                    <li>It can't be instantiated or we can't create object of abstract class.</li>
                    <li>It is not necessarily have to contain abstract methods to be an abstract class but if there is one abstract method inside the class then the class has to be declared as <b>abstract class</b>.</li>
                    <li>The class inheriting abstract class must provide the implementation of all its abstract methods(it any) or that class also has to be declared as <b>abstract class</b>.</li>
                </ul>

                <br><br>

                <h3>Abstract Method:</h3>
                <p>Abstract methods are created with <span class="coral">abstract</span> keyword.</p>
                <br>
                <p>some properties of abstract methods are:</p>
                <ul class="bullets">
                    <li>abstract methods does not have any definition or implementation.</li>
                    <li>abstract methods must be always inside abstract class.</li>

                </ul>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
abstract return_type method(arg1,arg2,...); </pre>

                <p>abstract methods are created with abstract keyword followed by return_type then method_name and the parameter list closed with semicolon.</p>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
abstract class Shape{     //abstract class
    
  abstract void area();  //abstract method
}
class Rectangle extends Shape{
  int l,b;

  Rectangle(int x,int y){l=x; b=y;} //constructor

  void area(){   //defining abstract method
      System.out.println("Rectangle Area: "+(l*b));
  }
  public static void main(String[] args) {
      Rectangle r = new Rectangle(10, 20);
      Square s = new Square(10);
      r.area();
      s.area();
  }
}
class Square extends Shape{
  int side;

  Square(int x){side=x;} //constructor
    
  void area(){  //defining abstract method
    System.out.println("Square Area: "+(side*side));
    }
}        </pre>

                <h4>Output:</h4>
                <pre class="output">
  Rectangle Area: 200
  Square Area: 100          </pre>

                <br>


                <p>Here, we've made <span class="coral">class Shape</span> as <b>abstract</b> class and inside it have one abstract method <span class="coral">area()</span> with method signature only.</p>
                <p>Then, we have two classes <b>Rectangle</b> and <b>Square</b> which extends the abstract class <b>Shape</b> .so, they provided the definition of the area() method as per their requirement.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-final-keyword.php" class="f-left">prev</a>
                    <a href="./java-access-specifier.php" class="f-right">next</a>
                </div>

                <div class="main-bottom">
                </div>

            </div>



            <!--RIGHT-SIDE-->
            <div class="right-side">Right Side</div>
        </div>

        <!--FOOTER-->


        <?php include '../modules/footer.php'; ?>





    </div>



</body>

</html>
