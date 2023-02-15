<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Nested For Loop | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,nested,for,loop">

    <meta name="Description" content="In java for loop can be nested inside one another.means inside one for loop we can have another for loop.In nested for loop arrangement both the for loops have their own initialization, condition and increment,decrement.The inner loop iterates itself inside the outer for loop.">

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
                <h1>Nested for loop</h1>
                <p>In java for loop can be nested inside one another.</p>
                <p>That means inside one for loop we can have another for loop.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
    for(<span class="coral">initialization</span>;<span class="coral">condition</span>;<span class="coral">inc/dec</span>){
        for(<span class="coral">initialization</span>;<span class="coral">condition</span>;<span class="coral">inc/dec</span>){
             }
       }                </pre>

                <p>In nested for loop arrangement both the for loops have their own initialization, condition and inc/dec.</p>
                <p>The inner loop iterates itself inside the outer for loop.</p>
                <br><br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
      for(int i=1;i&lt;=5;i++){
          for(int j=1;j&lt;=i;j++){
            System.out.print(".");
          }
          System.out.println();
      }
  }
}               </pre>
                <h4>Output:</h4>
                <pre class="output">
.
.. 
...                
....
.....</pre>
                <br>
                <h4>Explanation:</h4>
                <p>In this program two nested for loops are used to print pattern.</p>
                <p>Here, In first iteration of outer loop the inner loop iterates for one time. In second iteration inner loop iterates for two times and this way in every iteration of inner loop it printed the dots.</p>
                <br>
                <p>when exiting the inner loop control goes to the outer loop and continues to iterate until the outer condition becomes false.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-for-loop.php" class="f-left">prev</a>
                    <a href="./java-enhanced-for-loop.php" class="f-right">next</a>
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
