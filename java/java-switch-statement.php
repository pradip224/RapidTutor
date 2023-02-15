<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Switch Case Statement | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,switch,case,break,default">

    <meta name="Description" content="Switch case in java switches between multiple case values and when a particular value is matched then the corresponding block of code is executed.break statement used to exit from the switch statement,default block is optional and only executed when no match is found.">

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
                <h1><span class="coral">switch</span> case in Java</h1>
                <p>Switch case in java switches between multiple case values and when a particular value is matched then the corresponding block of code is executed.</p>
                <br>
                <p>Using switch-case the readability of the program is enhanced when the program gets too big and complex.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
switch(exp){
    case val-1: block-1
                break;
    case val-2: block-2
                break;
    case val-3: block-3
                break;
    ......
    case val-n: block-n
                break;
                
    default: default-block     //default block
             break;            
}                </pre>
                <br>

                <p>The <span class="coral">exp</span> value is checked against <span class="coral">val-1</span>,<span class="coral"> val-2</span> and so on. When particular value and exp is found to be matched then the corresponding code is executed.</p>
                <p>The <span class="coral">break</span> statement is used to exit from the switch statement when one block of code is executed.</p>
                <p>The <span class="coral">default</span> block is optional and only executed when no match is found.</p>
                <br><br>
                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class Grade{
   public static void main(String args[]){
    char ch='N';
    switch(ch){
        case 'T':
            System.out.println("Tokyo");
            break;
        case'N':
            System.out.println("New York");
            break;
        case 'M':
            System.out.println("Moscow");
            break;
        default:
            System.out.println("No Match found");
            break;                
    }
}              </pre>

                <h4>Output:</h4>
                <pre class="output">    New York</pre>
                <br>
                <h4>Explanation:</h4>
                <p>Here,in the above code we are switching the variable <span class="coral">ch</span> among several case values and the matched one with <span class="coral">'N'</span> is executed and the <span class="coral">break</span> causes the control exit the switch statement.</p>
                <br><br>








                <div class="next-prev">

                    <a href="./java-else-if-ladder.php" class="f-left">prev</a>
                    <a href="./java-ternary-operator.php" class="f-right">next</a>
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
