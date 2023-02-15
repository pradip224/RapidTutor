<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java try-catch Block | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,try,catch,block,exception,handling">

    <meta name="Description" content="Exception is handled by using try-catch block this avoids automatic termination of the program so,rest of the code will be executed.Write those lines of statements inside try block that might generate any kind of exceptions at run time,catch block follows immediately after try block">

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




        <!--  ***********     WRAPPER    **********  -->

        <div class="wrapper">


            <!--  ***********    MAIN     ********** -->


            <div class="main">
                <br>
                <h1><span class="coral">try</span> and <span class="coral">catch</span> block in Java</h1>
                <br>
                <p>We can handle exception in Java by using <span class="coral">try-catch</span> block.</p>
                <p>By handling the exception using <b>try-catch</b> clause we can avoid automatic termination of the program and the rest of the code will be executed.</p>
                <br>

                <h2><span class="coral">try</span> Block:</h2>
                <p>We write those lines of statements inside <span class="coral">try</span> block that might generate any kind of errors at run time.</p>
                <p>The try block works like a monitor that watches over possible error generating code.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">
  try{
  ... <span class="comment">//possible error generating code</span>
  }        </pre>
                <br>

                <h2><span class="coral">catch</span> Block:</h2>
                <p>The <b>catch</b> block should be followed immediately after the <b>try</b> block.</p>
                <p>Catch block just like a method. It takes Exception Object as parameter.</p>
                <p>It contains codes that are executed when a particular type of exception thrown matches with its parameter type.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">
   try{
   ... <span class="comment">//code to be monitored</span>
   }
   catch(Exception_type e){
   ... <span class="comment">//code executed when exception</span>
   }        </pre>
                <br><br>

                <h4>Ex.Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{

  public static void main(String[] args) {
      int a=10;

      try {   //code watched for exception
        int x = a/0;
        System.out.println("This code not executed");
      } 
      catch (Exception e) {   //exception Handled
         System.out.println("Exception Occured");
      }
        
  System.out.println("statement executed even after error");
  }
}        </pre>

                <h4>Output:</h4>
                <pre class="output">
  Exception Occured
  statement executed even after error </pre>
                <br>

                <p>Here, we intentionally put error generating code (<b>Divided By Zero</b>) inside the try block.</p>

                <p>so, the generated exception is handled by the <b>catch </b> block. which executed the statements inside the block and printed "Exception Occured".</p>
                <br>
                <p>If the errors were not handled by <b>try-catch</b> then the last statement won't have executed in normal scenario,
                    But in this case it is executed.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-fundamentals-of-exception.php" class="f-left">prev</a>
                    <a href="./java-multiple-catch-blocks.php" class="f-right">next</a>
                </div>

                <div class="main-bottom">
                </div>

            </div>



            <!-- *********    RIGHT-SIDE   ******** -->

            <div class="right-side">Right Side</div>
        </div>


        <!--        FOOTER-->
        <?php include '../modules/footer.php'; ?>




    </div>



</body>

</html>
