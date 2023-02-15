<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Nested try blocks | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,nested,try,block">

    <meta name="Description" content="try blocks can be nested inside one another.This is done when there are several lines of code and they can produce different types of exception at run time.For each nested try statement is entered, the context of that exception is pushed on to a stack.">

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
                <h1>Nested <span class="coral">try</span> Block in Java</h1>
                <p>In Java, <span class="coral">try</span> blocks can be nested inside one another.</p>
                <p>This is done when there are several lines of code &amp; they can produce different types of exception at run time.</p>
                <br>
                <p>For each nested try statement is entered, the context of that exception is pushed on to a stack.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">
   try{
   ...
       try{ <span class="comment">//nested try block</span>
       ...
       }
       catch(Exception_type e){
       ...
       }
   }        </pre>

                <p>The nested try statement can have its own <b>catch</b> block.</p>
                <br>
                <p>If the <b>Inner try</b> block does not have a catch Handler then the outer try blocks catch handlers are checked for possible exception type match.</p>
                <br>

                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String[] args) {
    int ar[]={1,2,3};

    try{            //try block
      int a= ar[2]/ar[1];

      try{      //nested try block
      int b= ar[5];
      }
                //nested catch block
      catch(ArrayIndexOutOfBoundsException e){  
        System.out.println("Array Index Out Of Bound Exception");
      }

    }    //More specific catch block
    catch(ArithmeticException e){    
      System.err.println("Arithmetic Exception");
    }

    catch(Exception e){   //General catch block
      System.out.println("General Exception Object");
    }
          //code after try-catch
    System.out.println("Code Executed After Exception Handling");
  }

}         </pre>

                <h4>Output:</h4>
                <pre class="output">
  Array Index Out Of Bound Exception
  Code Executed After Exception Handling  </pre>

                <p>Here, the Inner try block generates one exception which is handled by the inner catch block</p>
                <br>
                <p>The code after try-catch block is executed after the exception handling.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-multiple-catch-blocks.php" class="f-left">prev</a>
                    <a href="./java-throw-throws-finally-keyword.php" class="f-right">next</a>
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
