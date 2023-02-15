<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Importing Packages,Static Import | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,import,package,create,compile,run,static">

    <meta name="Description" content="Packages are imported in java using the import keyword.Importing is necessary in order to use classes & methods from other packages, this actually the whole point of creating packages. Ex- import java.io.*;, Here, * is wild card means all the classes inside IO package is imported.">

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
                <h1>Importing Packages in Java</h1>
                <p>Packages are imported in java using the <span class="coral">import</span> keyword.</p>
                <p>Importing is necessary in order to use classes &amp; methods from other packages, this actually the whole point of creating packages.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  import java.io.*;         </pre>

                <p><b>import</b> has to be the first statement before any code.</p>
                <p>Here, "*" is wild card means all the classes inside <b>IO</b> package is imported.</p>
                <br>
                <h4>Program:</h4>
                <p>Creating User Defined Package:</p>
                <pre class="code prettyprint linenums=1">
package pack1;   //package statement

public class A{

    public void methodA(){
        System.out.println("Method from pack1");
    }
}            </pre>

                <p>Importing User Defined Package:</p>
                <pre class="code prettyprint linenums=1">
package pack2;
   
import pack1.*;   //importing all classes from pack1

public class B{
    public static void main(String[] args) {
        A obj = new A();
        obj.methodA();
    }
}        </pre>
                <h4>Compile &amp; Run using CMD :</h4>
                <pre class="output">
javac -d . A.java //compiles &amp; creates packages
javac -d . B.java //of class A &amp; B

java pack2.B      //Running the program     </pre>
                <p>To run the program we have to use the command: <span class="coral">java pack2.B</span></p>
                <p>first <b>java</b> followed by <b>package_name</b> containing the class then <b>dot(.)</b> then the class name.</p>
                <br>

                <h4>Output:</h4>
                <pre class="output">
  Method from pack1           </pre>

                <p>Here, first we created class A which is inside package <b>pack1</b>.</p>
                <p>Then we've <b>imported</b> all classes from pack1 using <span class="coral">pack1.*;</span>.</p>
                <p>Then created object of class A &amp; using that object called <b>methodA()</b> which prited "Method from pack1".</p>
                <br>
                <h2>Static Import In Java:</h2>
                <p>Static import is a feature, where if imported statically then don't need to access the static members using class name.</p>
                <p>Static import allows direct use of static members of the specified class.</p>
                <h4>Syntax:</h4>
                <pre class="output">
     import static package_name.class_name.*; 
        
Ex.  import static java.lang.System.*;    </pre>
                <br>

                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
import static java.lang.System.*;  //static import
import static java.lang.Math.*;    

class A{
    public static void main(String[] args) {
        out.println("Static Import");
        out.println(sqrt(25));
    }
}            </pre>
                <h4>Output:</h4>
                <pre class="output">
  Static Import
  Square Root of 25 is : 5.0       </pre>
                <br>

                <p>Here, we don't have to use <span class="coral">System.out.println()</span> or <span class="coral">Math.sqrt()</span> to access those static methods, because we imported those classes using <b>static import</b>.</p>
                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-package-basics.php" class="f-left">prev</a>
                    <a href="./java-interface-basics.php" class="f-right">next</a>
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
