<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Ternary Operator | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,ternary,operator">

    <meta name="Description" content="Ternary Operator is a special type of operator in java which can replace if-else statements,called Ternary operator because it takes three operand as argument,though it is easier to write but it reduces the readability of the code.">

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
                <h1>Ternary Operator</h1>
                <p>Ternary Operator is a special type of operator in java which can replace if-else statements.</p>
                <p>This is called <span class="coral">Ternary</span> operator because it takes three operand as argument.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output"> (condition)?exp1:exp2;</pre>
                <p>Here, first the condition is evaluated to boolean value either true or false.</p>
                <p>If the condition is true then <span class="coral">exp1</span> is returned and if it is false then <span class="coral">exp2</span> is returned as value of the whole expression.</p>
                <br>
                <h4>Ex. Program:</h4>
                <p>In this program, we'll find max of two numbers using ternary operator.</p>

                <pre class="code prettyprint linenums=1">
class Ternary{
  public static void main(String args[]){
     int a=10,b=20;
     int max=(a&gt;b)?a:b;
     System.out.println("Max of a and b is: "+max);
   }
}            </pre>
                <h4>Output:</h4>
                <pre class="output">    Max of a and b is: 20</pre>
                <br>
                <h4>Explanation:</h4>

                <p>first condition (a&gt;b) is checked which turns out to be false so value of b is returned to the variable max.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-switch-statement.php" class="f-left">prev</a>
                    <a href="./java-while-loop.php" class="f-right">next</a>
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
