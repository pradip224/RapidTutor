<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Constructors, Default Constructors | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,constructor,default">

    <meta name="Description" content="Constructors used to initialise the instance variables of an object,they are very useful to initialise members while creating the object.it's name same as class name and no return type not even void,constructor which does not take any arguments that is called default constructor.">

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
                <h1>Constructors in Java</h1>
                <p>Constructors are used to initialise the instance variables of an object.</p>
                <p>Sometimes it is very tendious to initialise all the variables of an object so the constructor is very useful to initialise them while creating the object.</p>
                <p>Constructors are mostly same as methods but with some restrictions like:</p>
                <br>
                <h4>Properties:</h4>
                <ul class="bullets">
                    <li>Constructor name must be same as class name.</li>
                    <li>It has no return type not even void</li>
                </ul>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
      Box(parameter_list){
        ...  <span class="comment">//body of Constructor</span>
      }       </pre>

                <p>Here, Box is a constructor which has a parameter_list and then inside the braces has the code to be executed while invoked.</p>
                <br>
                <h3>Default Constructor:</h3>
                <p>By default java provides a constructor which does not take any arguments that is called default constructor.</p>
                <br>
                <h4>Program:</h4>
                <p>In this program, we'll print a message every time new instance of the class is created.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  Test(){
    System.out.println("Default Constructor Invoked");
  }
  public static void main(String[] args) {
      Test t = new Test();
  }
}         </pre>
                <h4>Output:</h4>
                <pre class="output">
    Default Constructor Invoked       </pre>

                <p>Here, while creating a new object of class <span class="coral">Test</span> the default constructor is called automatically and prints the output to the console.</p>
                <br>
                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-what-is-object.php" class="f-left">prev</a>
                    <a href="./java-parameterized-constructor.php" class="f-right">next</a>
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
