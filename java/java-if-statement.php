<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java if statement | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,if,statement">

    <meta name="Description" content="if statement in java used for branching purposes. It is used to execute a part of the code when a given condition is true.">

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
                <h1><span class="coral">if</span> Statement</h1>
                <p>if statement in java used for branching purposes. It is used to execute a part of the code when a given condition is true.</p>
                <br>
                <h4>Syntax</h4>
                <pre class="output">
        if(<span class="coral">condition</span>){
            //execution code
        }                </pre>

                <br>


                <h4>Program:</h4>
                <p>In this program, we'll execute a statement based on a given condition using <span class="coral">if</span> statement.</p>
                <pre class="code prettyprint linenums=1">
class A{
  public static void main(String args[]){
      int x=20,y=10;
      if(x&gt;y){
          System.out.println("x greater than y");
       }
    }
  }            </pre>
                <h4>Output:</h4>
                <pre class="output">    x greater than y</pre>

                <br>

                <p>Here in this above code the <span class="coral">if</span> condition x&gt;y is true, so it executed the code inside the braces.</p>
                <br>
                <br>
                <br>








                <div class="next-prev">

                    <a href="./java-type-casting.php" class="f-left">prev</a>
                    <a href="./java-if-else-statement.php" class="f-right">next</a>
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
