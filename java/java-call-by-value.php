<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Call by value | RapidTutor</title>


    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,call,by,value">

    <meta name="Description" content="Call by value is where the copy of actual parameter is passed to the method as formal parameter,So, any changes made on formal parameter does not reflect on the actual value">

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
                <h1>Call by value in Java</h1>
                <p>Call by value is where the copy of actual parameter is passed to the method as formal parameter.</p>
                <p>So, any changes made on formal parameter does not reflect on the actual value.</p>
                <br>
                <h4>Program:</h4>
                <p>In this program, we pass values as method argument &amp; observe changes inside method are not reflected back.</p>
                <br>
                <pre class="code prettyprint linenums=1">
class CallByValue{
  static void swap(int a,int b){
      int tmp;
      tmp=a;
      a=b;
      b=tmp;
  }
  public static void main(String[] args) {
     int a=1,b=2;
     System.out.println("Before swap a="+a+" b="+b);
     swap(a,b);
     System.out.println("After swap a="+a+" b="+b);
  }
}       </pre>

                <h4>Output:</h4>
                <pre class="output">
   Before swap a=1 b=2
   After swap a=1 b=2        </pre>

                <br>

                <h4>Explanation:</h4>
                <p>Here, You can see the output remains same before &amp; after the <span class="coral">swap()</span> method calling.</p>
                <p>Because, here we sent value of Actual parameter which is copied to the formal parameter of swap() method so, changes will not be reflected.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-nesting-of-methods.php" class="f-left">prev</a>
                    <a href="./java-call-by-reference.php" class="f-right">next</a>
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
