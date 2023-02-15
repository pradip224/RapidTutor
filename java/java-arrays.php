<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java array, 1D Array Initialization | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,tutor,rapid,learn,syntax,array,1D,2D,declaration,creation,initialization,accessing">

    <meta name="Description" content="Array in java used to group similar type of element with the same variable name, Those elements are simply accessed by the index number inside square brackets,three types of array-1D Array,2D Array,Multi-Dimensional Array,One Dimensional array-accessed by one index inside the brackets">

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
                <h1>Array in java</h1>
                <p>In java array is used to group similar type of element with the same variable name. Those elements are simply accessed by the index number inside square brackets.</p>
                <p>There are three types of array in java. they are-</p>
                <ul class="bullets">
                    <li>1D Array</li>
                    <li>2D Array</li>
                    <li>Multi-Dimensional Array</li>
                </ul>
                <h2>1D Array:</h2>
                <p>One Dimensional array essentially list of same type data items grouped contiguously and those are accessed by one index number or subscript inside the brackets.</p>
                <br>
                <h3>Declaration of 1D array:</h3>
                <pre class="output">     int array[];
     double marks[];</pre>
                <p>We can declare the array with data type followed by array_name with a pair of square brackets.</p>
                <br>

                <h3>Creation Of Array:</h3>
                <pre class="output">      array= new int[10];
      marks[]= new double[20];</pre>

                <p>After declaration of array we can create the array using the new keyword and specifying the data type and size of the array. </p>
                <br>
                <h3>Declaration &amp; Creation :</h3>
                <pre class="output"> int student[]= new int[10];</pre>
                <p>Declaration &amp; Creation can be done at the same time.</p>
                <br>
                <h3>Initialization of Array:</h3>
                <pre class="output">      marks[0]=70;
      marks[1]=50;
      marks[2]=80;</pre>

                <p>Initialization of array can be done by specifying the index number inside the brackets.</p>
                <br>
                <h3>Declaration &amp; Initialization:</h3>
                <pre class="output">     int marks[]={70,50,80};</pre>

                <p>Declaration &amp; Initialization can be done at the same time.</p>
                <br>
                <h3>Accessing Array element</h3>
                <pre class="output">  int myMark=marks[0];</pre>
                <p>we can access the value of an Array element by using the subscript of that data item and assign to a variable.</p>
                <p>We can work on the array element as any other normal variable.</p>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
      int marks[]={70,50,80};
      for(int i=0;i&lt;i++){
          System.out.println("marks"+i+" "+marks[i]);
      }
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
        marks0 70
        marks1 50
        marks2 70                </pre>

                <p>Here, we've declared and initialized the array marks with 3 values and printed them using the for loop.</p>
                <h4>Note:</h4>
                <p class="wall">Java strictly checks for array boundry that means if we try to access the index outside the range then it gives error (unlike in C &amp; C++).</p>
                <br><br>








                <div class="next-prev">

                    <a href="./java-labeled-loops.php" class="f-left">prev</a>
                    <a href="./java-two-dimensional-array.php" class="f-right">next</a>
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
