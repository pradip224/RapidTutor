<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Two Dimensional Array | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,two,dimensional,array">

    <meta name="Description" content="Two dimensional array's are represented using two pair of square brackets which denotes the two dimensions of that array,elements are accessed by two index number or subscript inside the two square brackets,ex- int student[][]= new int[10][10];">

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
                <h1>Two Dimensional Array</h1>
                <p>Two dimensional array's are represented using two pair of square brackets which denotes the two dimensions of the array.</p>

                <p>2D Arrays are accessed by two index number or subscript inside the two square brackets.</p>
                <br>
                <h4>Declaration of 2D array:</h4>
                <pre class="output">     int   array[][];
     double marks[][];</pre>
                <p>We can declare the array with data type followed by array_name with two pairs of square brackets.</p>
                <br>

                <h4>Creation Of Array:</h4>
                <pre class="output">      array= new int[3][4];
      marks[]= new double[7][8];</pre>

                <p>After declaration of array we can create the array using the new keyword and specifying the data type and size of the array. </p>
                <br>
                <h4>Declaration &amp; Creation :</h4>
                <pre class="output"> int student[][]= new int[10][10];</pre>
                <p>Declaration &amp; Creation can be done at the same time.</p>
                <br>
                <h4>Initialization of Array:</h4>
                <pre class="output">      marks[0][0]=70;
      marks[0][1]=50;
      marks[1][2]=80;</pre>

                <p>Initialization of array can be done by specifying the index number inside the brackets.</p>
                <br><br>
                <h4>Declaration &amp; Initialization:</h4>
                <pre class="output">   int myArray[][]= { {1,2,3}, {4,5,6} };</pre>

                <p>2D array initialization is done by grouping the rows with braces and separating them with commas(,).</p>
                <br><br>
                <h4>Program:</h4>
                <p>In this program, we'll create a 2D array &amp; initialize with elements and then print the elements using loop.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
    int myArray[][]={{1,2,3},{4,5,6},{7,8,9}};
     for(int i=0;i&lt;i++){
         for(int j=0;j&lt;j++){
            System.out.print(myArray[i][j]);
         }
          System.out.println();
      }
  }
}               </pre>

                <h4>Output:</h4>
                <pre class="output">
        1 2 3 
        4 5 6
        7 8 9 </pre>
                <br>
                <p>Here, we've declared and initialized the array <span class="coral">myArray[][] </span> with 9 elements.</p>
                <p>Then using the nested for loop we've accessed the elements with their corresponding index values and printed them.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-arrays.php" class="f-left">prev</a>
                    <a href="./java-multi-dimensional-array.php" class="f-right">next</a>
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
