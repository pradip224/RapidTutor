<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Array Length Variable | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,array,1D,length,syntax,output,size">

    <meta name="Description" content="Array length variable used to find the length of any array, array_name.length will return the length of that particular Array, Ex. ar.length,Size of any Array can be easily obtained by the length variable provided in java, length variable can be accessed by any array with the dot operator.">

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

                <h1>Array length variable in Java</h1>
                <p>Size of any Array can be easily obtained by the length variable provided in java.</p>
                <p>The length variable can be accessed by any array with the dot operator to obtain the length of that particular array.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output"> int sizeOfArray= ar.length;</pre>
                <br>
                <h4>Ex. Program:</h4>
                <p><span class="coral">array_name.length</span> will return the length of that particular Array.</p>
                <br>
                <pre class="code prettyprint linenums=1">
class Test{
 public static void main(String args[]){
     int marks[]={70,50,80};
     System.out.println("size of Array: "+marks.length);
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">     size of Array: 3</pre>
                <p>The <span class="coral">length</span> property comes very handy when working with loops to traverse the array elements.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-multi-dimensional-array.php" class="f-left">prev</a>
                    <a href="./java-arraylist.php" class="f-right">next</a>
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
