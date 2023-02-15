<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java break and continue Statements | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,output,break,continue,statement,">

    <meta name="Description" content="Two jump statements in java are break and continue,Break statement used to exit or terminate a loop,continue used to skip some portion of the code and diverts control to the beginning of the loop where condition is checked again for another iteration.">

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
                <h1><span class="coral">break</span> and <span class="coral">continue</span> in java</h1>
                <p>Sometimes it is necessary to have better control over the loop execution by using the jump statements in java.</p>
                <p>Two jump statements in java are <span class="coral">break</span> and <span class="coral">continue</span>.</p>
                <br>
                <h3><b>break</b>:</h3>
                <p>Break statement used to exit or terminate a loop. </p>
                <p>Like in switch case it is used to terminate the sequence of statement execution.</p>
                <br>
                <h4>Syntax:</h4>
                <p>We simply write the keyword <b>break</b> whenever we want the loop to be exited.</p>
                <pre class="output">   break; <span class="comment">//simple break</span></pre>
                <br>


                <h4>Program:</h4>
                <p>In this example program, we exit from a loop when a certain condition is met.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
    for(int i=1;i&lt;=10;i++){
        if(i==5)
            break;
        System.out.println(i+" ");
      }
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">  1 2 3 4</pre>
                <p>This program prints numbers from 1 to 4 by using the break statement.</p>
                <p>Here, The for loop itended to iterate for 10 times but using break statement we are jumping out of the loop when (i==5) is true and then executes the code following the loop.</p>

                <p>This way we have better control over the execution of the loop using the break statement.</p>
                <br>

                <h3><b>Continue</b>:</h3>
                <p>This is another jumping statement used in java.</p>
                <p>It is used to skip some portion of the code and diverts control to the beginning of the loop where condition is checked again for another iteration.</p>
                <br>
                <h4>Syntax:</h4>
                <p>We just simply write the keyword <b>continue</b> to transfer control to the beginning of the loop.</p>
                <pre class="output">   continue; <span class="comment">//simple continue</span> </pre>
                <br>
                <h4>Program:</h4>
                <p>In this example program, we use <b>continue</b> statement to skip some portion of code when a certain condition is met.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
     for(int i=1;i&lt;=10;i++){
        if(i%2!=0)
          continue;
         System.out.print(i+" ");
      }
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">     2 4 6 8 10</pre>
                <br>
                <p>This program prints even numbers upto 10.</p>
                <p>Here, The continue statement continues the execution to the beginning of the loop which skips some portion of the code below whenever the condition <span class="coral">(i%2!==0)</span> is true.</p>
                <p>This way the loop which iterates for 10 times but only prints the even numbers by using continue statement.</p>

                <br><br><br>







                <div class="next-prev">

                    <a href="./java-enhanced-for-loop.php" class="f-left">prev</a>
                    <a href="./java-labeled-loops.php" class="f-right">next</a>
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
