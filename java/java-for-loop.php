<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java for Loop | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,for,loop,initialization,condition,multiple">

    <meta name="Description" content="For loop is entry-controlled loop which have the initialization,condition and increment/decrement all are structured under the same roof.Initialization used to initialize the control variable,Condition is checked in every iteration,inc/dec used to increment or decrement the control variable.">


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
                <h1>For loop in Java</h1>
                <p>For loop is entry-controlled loop which have the initialization,condition and increment/decrement all are structured under the same roof.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
for(<span class="coral">initialization</span>;<span class="coral">condition</span>;<span class="coral">increment/decrement</span>){
            <span class="comment">//code to be executed </span>  
     }                </pre>

                <br>
                <br>

                <p><span class="coral">Initialization </span> used to initialize the control variable.</p>
                <p><span class="coral">Condition</span> is checked everytime before entering inside the block.</p>
                <p><span class="coral">inc/dec</span> used to increment or decrement the control variable.</p>
                <br>
                <p>All of these are separated by using semicolons(;) in between them.</p>

                <pre class="output">
    for(i=0;i&lt;=10;i++){
    ...
      }                 </pre>

                <br>
                <br>

                <p>In java for loop can have <b>multiple initialization, condition and inc/dec</b> statements.</p>
                <p>These multiple statements are separated by <b>commas</b>(,).</p>
                <pre class="output">
    for(i=0,j=0;i&lt;10,j&lt;20;i++,j+2){
     ...
      }                </pre>

                <br>
                <br>
                <h4>Program:</h4>
                <p>In this program, we'll print sequence of numbers using the for loop.</p>
                <pre class="code prettyprint linenums=1">
class Test{
 public static void main(String args[]){
     for(int i=0;i&lt;=10;i++){
       System.out.print(i+" ");
    }
  }
}
                </pre>
                <h4>Output:</h4>
                <pre class="output">     0 1 2 3 4 5 6 7 8 9 10</pre>

                <br>

                <h4>Explanation:</h4>
                <p>First i is initialised to 0 then condition is checked which is true so the control enters the loop.</p>
                <p>In the next iteration increment or decrement takes place that is i is incremented by one and then the condition is checked which is true so control proceeds for next iteration.</p>
                <p>In this way the loop continues until the condition becomes false then the loop terminates.</p>
                <br>
                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-do-while.php" class="f-left">prev</a>
                    <a href="./java-nested-for-loop.php" class="f-right">next</a>
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
