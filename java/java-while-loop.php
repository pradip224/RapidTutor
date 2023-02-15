<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java while Loop | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,while,loop">

    <meta name="Description" content="Loops are used to execute blocks of code repeatedly multiple times based on given condition.Three type of loops are-while,do-while and for loop.While loop is entry controlled loop because the condition is checked first then block of code is executed repeatedly several times.">

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

            <div class="main"><br>
                <h1><span class="coral">while</span> Loop In Java</h1>
                <p>In java loops are used to execute blocks of code repeatedly multiple times based on some given condition.</p>
                <br>
                <p>Three type of loops in java are-</p>
                <ul class="bullets wall">
                    <li>while</li>
                    <li>do-while</li>
                    <li>for</li>
                </ul>
                <br>
                <h3><span class="coral">while</span> loop:</h3>
                <p>while loop is entry controlled loop because the condition is checked first then if the condition is true only then block of code is executed repeatedly several times.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
    while(condition){
        // code to be executed
     }                </pre>


                <p>The while statement syntax contains the while keyword then inside the Parentheses we've the condition. If the condition is true then the code inside the curly braces are executed repeatedly.</p>
                <br>
                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
      int i=0;
      while(i&lt;=10){
          System.out.print(i+" ");
          i++;
      }
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">    0 1 2 3 4 5 6 7 8 9 10</pre>
                <br>
                <h4>Explanation:</h4>
                <p>First i is initialised with 0</p>
                <p>Then the condition <span class="coral">(i&lt;=10)</span> is checked which is true so the code inside the braces gets executed.</p>
                <p>Then i is incremented by one on every repeatition so the loop gets executed 10 times and printed 0 to 10.</p>
                <p>And finally when the condition becomes false then it exits the loop.</p>
                <br><br>








                <div class="next-prev">

                    <a href="./java-ternary-operator.php" class="f-left">prev</a>
                    <a href="./java-do-while.php" class="f-right">next</a>
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
