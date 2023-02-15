<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Labeled Loops | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,labeled,for,loop">

    <meta name="Description" content="Loops can have labels with them in java,then we can refer to that particular loop using the label name.While using nested loops sometimes it is necessary to continue to outer loop or break out of the outer loop based on some condition,which is very much possible by concept of labeled loops.">

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
                <h1>Labeled loops in java</h1>
                <br>
                <p>Loops can have <b>labels</b> with them in java and then we can refer to that particular loop using the label name.</p>
                <p>While using nested loops sometimes it is necessary to continue to outer loop or break out of the outer loop based on some condition,which is very much possible by using the concept of labeled loops.</p>


                <p>While setting label we just need to add a valid identifier followed by colon(:) right before the loop begins. </p>
                <br>
                <b>like in example:</b>

                <pre class="output">  label_name: loop{...   //body of loop
                     }</pre>



                <p>Using labeled loop we can target one specific loop by just specifying the label name.</p><br>
                <b>like in example:</b>

                <pre class="output">    break label_name;</pre>

                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
 public static void main(String args[]){
 outer: for(int i=1;i&lt;=10;i++){
          for(int j=1;j&lt;=i;j++){
           if(i%2!=0)
            continue outer;
            System.out.print(".");
          }
         System.out.println();
      }
   }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
        ..   
        ....
        ......
        ........
        ..........            </pre><br>

                <p>This program prints dots(.) with even number of element at every level.</p>
                <br>
                <p>We achieve this pattern by using the label- <span class="coral">outer</span> given to the outer for loop. When the remainder is not zero then the continue statement skips the below code and continue execution to the outer for loop.</p>
                <br><br>






                <div class="next-prev">

                    <a href="./java-break-and-continue-statement.php" class="f-left">prev</a>
                    <a href="./java-arrays.php" class="f-right">next</a>
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
