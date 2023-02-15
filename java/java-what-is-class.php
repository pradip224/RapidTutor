<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java - What Is Class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,class,field,method">

    <meta name="Description" content="Class can be thought of as a template for object which is happens to be a new data type.A simple class contains field and method,the method works on the data elements.Java is a true object oriented programming language so everything in java must be encapsulated inside a class">

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
                <h1>What is class &#63;</h1>
                <p>Java is a true object oriented programming language so everything in java must be encapsulated inside a class.</p>
                <p>A simple class in java contains field and methods and the method works on the data elements.</p>
                <br>
                <p>Class can be thought of as a template for object which is happens to be a new data type.</p>
                <br>
                <h3>A simple Class:</h3>
                <pre class="output">
class Simple{
    type instance_var1;
    type instance_var2;
    
return_type Method_name(para_list){
              <span class="comment">//method_body</span>
              }      
     }  </pre>


                <p>A class is declared with <span class="coral">class</span> keyword followed by name of the class.</p>
                <p>The class name can be any valid name except the reserved keywords.</p>
                <p>In java the class name should follow the <span class="coral">Camel</span> notation.</p>
                <br>
                <br>
                <h3>Declaring Fields:</h3>

                <p>Fields are declared with <span class="coral">data_type</span> followed by a valid <span class="coral">identifier</span> name.</p>
                <pre class="code prettyprint linenums=1">
class Box{
    double length;
    double breadth;
    double height;
}                </pre>
                <br>


                <h3>Declaring Methods:</h3>
                <p>Methods are consist of <span class="coral">return_type</span> followed by <span class="coral">method_name</span> &amp; inside parenthesis the <span class="coral">parameter_list</span> &amp; then the <span class="coral">method_body</span> inside the curly braces.</p>
                <br>
                <pre class="code prettyprint linenums=1">
class Greet{
  void displayGreeting(){
      System.out.println("Good Morning Everyone");
  }    
}          </pre>


                <p>Methods are used to perform some task or used to operate on the data elements &amp; produce results.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-data-input-stream.php" class="f-left">prev</a>
                    <a href="./java-what-is-object.php" class="f-right">next</a>
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
