<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java enhanced for loop | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,enhanced,for,loop">

    <meta name="Description" content="In java new feature called enhanced for loop specially used to retrieve array elements very efficiently.Ex- for(type var_name: expression){...} ,In enhanced for loop we don't need to use the array indexes or the iterators.">

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
                <h1>Enhanced for loop in Java</h1>
                <p>In java new feature called enhanced for loop specially used to retrieve array elements very efficiently.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
    for(<span style="color: green;">type</span> <span class="coral">var_name</span>: <span style="color:blue;">expression</span>){
        }                </pre>

                <p>In enhanced for loop we don't need to use the array indexes or the iterators.</p>
                <p>Using this feature elements of the expression can be retrieved very easily.</p>
                <br>
                <h4>Program:</h4>
                <p>In this program, we'll access the array elements using enhanced for loop &amp; print them.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
      int a[]={1,2,3,4,5,6};
      for(int i:a){
        System.out.print(i+" ");
      }
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
  1 2 3 4 5 6                </pre>

                <br>

                <h4>Explanation:</h4>
                <p>Here, first we've initialised the integer type array.</p>
                <p>Then we've accessed the elements of the array using the enhanced for loop without having to specify the array indexes.</p>
                <p>It automatically assign each array element to variable "i" and iterate the loop as per the length of the array.</p>
                <br>
                <br>
                <br>




                <div class="next-prev">

                    <a href="./java-nested-for-loop.php" class="f-left">prev</a>
                    <a href="./java-break-and-continue-statement.php" class="f-right">next</a>
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
