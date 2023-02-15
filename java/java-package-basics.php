<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Packages and Types | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,packages,built-in,user defined,compile">

    <meta name="Description" content="Packages used as containers for grouping different classes usually according to their functionality.two types of packages-Built in and User Defined Package.Advantage of Packages-Naming Conflict can be prevented,Classes can be properly organized,Visibility of classes can be controlled.">

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
                <h1>Packages in Java</h1>
                <p>Packages are basically used as containers for grouping different classes usually according to their functionality.</p>
                <br>
                <p>Advantage of <b>Packages</b> are:</p>
                <ul class="bullets">
                    <li>Classes in other packages can be <b>reused</b> by importing that package.</li>
                    <li><b>Naming Conflict</b> can be prevented. ie, different packages can have same class name without causing naming conflicts. </li>
                    <li>Classes can be <b>properly organized</b> based on their functionality with the help of packages.</li>
                    <li>Visibility of classes can be controlled with access specifiers which improves <b>Security &amp; Accessibility</b>.</li>
                </ul>
                <br>
                <h3>Types of Packages:</h3>
                <p>There are basically two types of packages:</p>
                <ul class="bullets">
                    <li>Built-in Packages</li>
                    <li>User Defined Packages</li>
                </ul>
                <br>
                <h3>Built-in Packages:</h3>
                <p>Java Built-in packages consists of classes that part of java API libraries.</p>
                <br>
                <p>These Packages are:</p>
                <ul class="bullets">
                    <li><b>java.lang - </b> is imported by default. They contain language support classes like primitive data types,strings,math,exception, threads etc.</li>
                    <li><b>java.util -</b> contains utility classes that supports data structures,Vectors, random numbes etc.</li>
                    <li><b>java.io -</b> to support input/output operations.</li>
                    <li><b>java.awt -</b> for graphical user interfaces.</li>
                    <li><b>java.net -</b> for networking operations.</li>
                    <li><b>java.applet -</b> for implementing applets.</li>
                </ul> <br>

                <h3>Creating Packages:</h3>
                <p><b>User Defined</b> packages can be created with the <span class="coral">package</span> keyword.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">
      package package_name;
  EX. package pack1;         </pre>

                <p>The syntax is <span class="coral">package</span> keyword followed by <b>package name</b>. The package name should follow the naming convention.</p>
                <br>

                <h3>Adding Classes to Packages:</h3>
                <p>While adding classes to the package then the package statement has to be the first statement before any class declaration.</p>
                <br>
                <p>Then we can add number of classes under the statement to add them all to that specific package.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  package pack1;
  class A{...}
  class B{...}        </pre>

                <p>Here, both the class A &amp; B will be added to the package <b>pack1.</b></p>
                <br><br>
                <h4>Program:</h4>
                <p>In this program we create a package &amp; also add a class to it.</p>
                <pre class="code prettyprint linenums=1">
package pack1;   //package statement

public class A{

    public void methodA(){
        System.out.println("Method from Pack1");
    }
}         </pre>

                <p>Here, class A will be added to <b>pack1</b>. You can see that we made class &amp; method as <b>public</b> in order to access them from outside the package.</p>
                <br><br>
                <h3><b>Compile with cmd:</b></h3>
                <p>To compile &amp; Create package using cmd use the following command in cmd.</p>
                <pre class="output">
     javac -d destination sourcefile.java
Ex.  javac -d . A.java        </pre>

                <br>

                <p>first <b>javac</b> followed by <b>-d</b> then the <b>destination</b> location where the package will be created, then java <b>sourcefile</b> name which eventually be compiled &amp; the class file will be stored inside the package.</p>
                <br>
                <p>The <b>dot(.)</b> in destination section represents the current directory.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-access-specifier.php" class="f-left">prev</a>
                    <a href="./java-importing-package.php" class="f-right">next</a>
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
