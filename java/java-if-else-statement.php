<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java if else statement | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,if,else,statement">

    <meta name="Description" content="if-else statement has two blocks of code which are decided to be executed based on the condition either true or false, if condition is true then if block gets executed but for false condition else block gets executed.">

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
                <h1><span class="coral">if else</span> statement</h1>
                <p>This statement has two blocks of code which are decided to be executed based on the condition either true or false.</p>
                <br>

                <h4>Syntax:</h4>

                <pre class="output">
    if(condition){
         <span class="comment">//if block</span>
     }
    else{
        <span class="comment">// else block</span>   
     }                </pre>
                <br>

                <p>In this statement we have two block of code, if the condition is true then the <span class="coral">if block</span> is executed but if the condition is false then the <span class="coral">else block</span> is executed.</p>
                <br>
                <br>

                <h4>program:</h4>
                <p>In this program, we'll display greater among two numbers using <span class="coral">if-else</span> block.</p>
                <pre class="code prettyprint linenums=1">
class A{
  public static void main(String args[]){
     int x=20,y=30;
     if(x&gt;y){
        System.out.println("x greater than y");
     }
     else{
        System.out.println("Y greater than x");
     }
  }
}                </pre>

                <h4>output:</h4>
                <pre class="output">   Y greater than X</pre>

                <br>

                <h4>Explanation:</h4>
                <p class="wall">In this above code, the if condition is false so it executed the <span class="coral">else block</span> and printed " <span class="coral">Y greater than X</span> ".</p>
                <br>
                <br>
                <br>







                <div class="next-prev">

                    <a href="./java-if-statement.php" class="f-left">prev</a>
                    <a href="./java-nested-if-else.php" class="f-right">next</a>
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
