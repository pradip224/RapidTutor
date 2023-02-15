<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Multiple Catch Blocks | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,multiple,catch,block,try">

    <meta name="Description" content="try block can have multiple catch blocks immediately following it.Multiple catch blocks used when the code inside the try block can generate different type of Exception Object.The catch Block to handle the generated exception is decided based on the type of exception it takes as argument.">

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
                <h1>Multiple <span class="coral">catch</span> Blocks in Java</h1>
                <p>A <b>try</b> block can have one or multiple <b>catch</b> blocks immediately following it.</p>
                <p>Multiple catch statements used when the codes inside the try block can generate different type of Exception Object.</p>
                <br>
                <p>The catch Block to handle the generated exception is decided based on the type of exception Object it takes as argument.</p>
                <br>

                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  try{...
  }
  catch(Exception_type-1 e){
  }
  catch(Exception_type-2 e){
  }
  catch(Exception_type-3 e){
  }
  ...
  catch(Exception_type-N e){
  }         </pre>


                <p>Those catch blocks are arranged from more specific type to more general type, so that we can take more suitable action based on the type of exception.</p>
                <br><br>

                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String[] args) {

  int ar[]={1,2,3};

  try{            //try block
    int a= ar[1]/0;
    int b= ar[5];
  }

  catch(ArithmeticException e){//More specific catch block
    System.err.println("Arithmetic Exception");
  }
   
  catch(ArrayIndexOutOfBoundsException e){
    System.out.println("Array Index Out Of Bounds Exception");
  }

  catch(Exception e){   //General catch block
    System.out.println("General Exception Object");
  }

  System.out.println("Code Executed After Exception Handling");
  }

}      </pre>

                <h4>Output:</h4>
                <pre class="output">
  Arithmetic Exception
  Code Executed After Exception Handling </pre>

                <p>Here, inside the try block we've two statements, in real time scenario both of them can generate different type of exception at runtime.</p>
                <br>
                <p>So, inorder to Handle those possible exceptions we've more specific catch block after try block followed by more general catch blocks.</p>
                <br>
                <p>Here, the first exception (<b>Divided By Zero</b>) is handled by the <b>ArithmeticException</b> type catch block, After that the last statement is executed without program termination, as the generated exception is Handled.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-try-catch-block.php" class="f-left">prev</a>
                    <a href="./java-nested-try-block.php" class="f-right">next</a>
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
