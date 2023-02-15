<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java else if ladder | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,else,if,ladder">

    <meta name="Description" content="Else if ladder in java an arrangement of if and elseif block that they form a ladder like structure where every elseif has its own condition checked one after another in a sequence.Whenever one condition is met it's  block of code is executed and the control exits the whole else if ladder.">

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
                <h1>else if ladder in Java</h1>
                <p>Else if ladder in java is such an arrangement of if and elseif block that they form a ladder like structure where every elseif has its own condition checked one after another in a sequence.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
if(condition1)
    block1;
else if(condition2)
    block2;
else if(condition3)
    block3;
...
else if(condition-n)
    block-n;
else
    default-block;      // default statement  </pre>


                <p>Whenever one condition is met their corresponding block of code is executed and the control exits the whole else if ladder.</p>
                <p>When no condition is met then the final else block is executed which is the default statement of the else if ladder. The final else block is optional.</p>
                <br>
                <h4>Ex. Program:</h4>
                <p>In this program, we'll use <b>else if</b> ladder to display the grade points.</p>
                <pre class="code prettyprint linenums=1">
class grade{
    public static void main(String args[]){
        double x=7.5;
        if(x>=9)
            System.out.println("O");
        else if(x>=8)
            System.out.println("E");
        else if(x>=7)
            System.out.println("A");
        else if(x>=6)
            System.out.println("B");
        else if(x>=5)
            System.out.println("C");
        else if(x>=4)
            System.out.println("D");
        else
            System.out.println("F");                    
    }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">  A</pre>
                <br>
                <h4>Explanation:</h4>
                <p>Here the conditions are checked from top to bottom here the condition-3 is true and corresponding block of code is executed and exits the whole else if ladder statement. </p>
                <br>
                <br>









                <div class="next-prev">

                    <a href="./java-nested-if-else.php" class="f-left">prev</a>
                    <a href="./java-switch-statement.php" class="f-right">next</a>
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
