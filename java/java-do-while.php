<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java do while loop | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,do-while,loop">

    <meta name="Description" content="do while loop is exit-controlled loop where the body is executed first then the condition is evaluated for further repeatition, do{...} while(condition); do-while is used when the code needs to be executed at least for once.">

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
                <h1>do-while loop</h1>
                <p>do while loop is exit-controlled loop where the body is executed first then the condition is evaluated for further repeatition.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
   do{
         //code to be executed 
   }
  while(condition);                </pre>

                <p>Here, the do clause contains the code to be executed inside the curly braces. Then the condition returns boolean value either true or false.</p>
                <p>do-while is used when the code needs to be executed at least for once.</p>
                <br>
                <h4>Program:</h4>
                <p>In this program, we print sequence of numbers using <b>do while</b> loop.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
      int i=0;
      do{
          System.out.print(i+" ");
          i++;
      }
      while(i&lt;=10);
  }
}                  </pre>
                <h4>Output:</h4>
                <pre class="output">  0 1 2 3 4 5 6 7 8 9 10</pre>
                <br>
                <h4>Explanation:</h4>
                <p>First i is initialised to 0</p>
                <p>The do clause prints the number and increments i by one in every iteration.</p>
                <p>Then while loop checks for the condition to decide for next iteration.</p>
                <p>And so on and so forth until the condition becomes false.</p>
                <br>
                <br>
                <br>









                <div class="next-prev">

                    <a href="./java-while-loop.php" class="f-left">prev</a>
                    <a href="./java-for-loop.php" class="f-right">next</a>
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
