<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Multi-Dimensional Array | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,multi,dimensional,array">

    <meta name="Description" content="Multi-dimensional arrays are 2D arrays where each row can have different number of elements.this can be said as arrays of arrays,declare the array with data type followed by array_name with two pairs of square brackets.different size can be assigned to each of the rows.">

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
                <h1>Multi-Dimensional Array</h1>

                <p>Multi-dimensional arrays are actually 2D arrays where each row can have different number of elements.</p>
                <p>This can be said as "arrays of arrays".</p>
                <br>
                <h3>Declaration of array:</h3>
                <pre class="output">     int array[][]= new int[3][];
         array[0]= new int[3];
         array[1]= new int[1];
         array[2]= new int[2];     </pre>
                <br>
                <p>We can declare the array with data type followed by array_name with two pairs of square brackets.</p>
                <p>Then different size can be assigned to each of the rows with the above syntax.</p>
                <br>


                <h3>Declaration &amp; Creation :</h3>
                <pre class="output">
    int ar[][]= {{1,2,3},{4},{5,6}};  </pre>
                <p>Declaration &amp; Initialization can be done at the same time.</p>
                <br>


                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
    public static void main(String args[]){
        int ar[][]= {{1,2,3},{4},{5,6}};
        for(int i[]:ar){
          for(int j:i){
            System.out.print(j+" ");
          }
        System.out.println();
        }        
    }
}               </pre>

                <br>


                <h4>Alternate Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
    int ar[][]= {{1,2,3},{4},{5,6}};
    for(int i=0;i&lt;ar.length;i++){
      for(int j=0;j&lt;ar[i].length;j++){
        System.out.print(ar[i][j]+" ");
      }
    System.out.println();
    }        
  }
}           </pre>


                <h4>Output:</h4>
                <pre class="output">
        1 2 3 
        4 
        5 6 </pre>

                <p>Here, we've declared and initialized the array <span class="coral">ar[][] </span> with 3 rows each row having different element.</p>
                <br>
                <p>Where ar[0] having 3 elements</p>
                <p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ar[1] having 1 elements</p>
                <p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ar[2] having 2 elements</p>
                <br>
                <p>The length property returns the length of each individual rows having variable elements.</p>
                <br>
                <p>Using the nested for loop we've accessed the elements with their corresponding index values.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-two-dimensional-array.php" class="f-left">prev</a>
                    <a href="./java-array-length.php" class="f-right">next</a>
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
