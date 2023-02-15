<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Nested If Else Statement | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,nested,if,else,statement">

    <meta name="Description" content="Nested if else where first if statement contains another if statement, which has its own condition to check for.In order to execute the code inside the inner if, both the conditions has to be true.">

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
                <h1>Nested if else statement</h1>
                <p>In java nested if else statement can be possible that is one if can contain another if statement which can have its own else block too.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  if(condition1){          //outer if 
      if(condition2){      //Inner if block   
       }
      else{             
       }
   }                </pre>

                <p>Nested if else where first if statement contains another if statement, which has its own condition to check for.</p>
                <br>
                <p>In order to execute the code inside the nested if both the conditions has to be true.</p>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
 public static void main(String args[]){
      int x=30,y=30;
      if(x>=y){
         if(x>y){
          System.out.println("x greater than y");
          }
        else{
          System.out.println("x equals to y");
          }
      }
     else{
        System.out.println("Y greater than x");
      }
  }
}               </pre>

                <h4>Output:</h4>
                <pre class="output"> X equals to Y</pre>
                <br>

                <h4>Explanation:</h4>
                <p class="wall">Here, the <span class="coral">condition1</span> is true so control enters inside the outer if block. Then check the <span class="coral">condition2</span> which is false so executed the else block of nested if statement.</p>
                <br><br>







                <div class="next-prev">

                    <a href="./java-if-else-statement.php" class="f-left">prev</a>
                    <a href="./java-else-if-ladder.php" class="f-right">next</a>
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
