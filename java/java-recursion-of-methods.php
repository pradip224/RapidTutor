<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Recursion of Methods | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,recursion,recursive,method">

    <meta name="Description" content="Recursion in methods means the method makes recursive calls to itself over and over again until a certain break point is reached.">

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
                <h1>Recursion of Methods</h1>
                <p>Recursion in methods means the method makes recursive calls to itself over and over again until a certain condition is met or break point is reached.</p>
                <br>
                <h4>Program:</h4>
                <p>Let's do an example program, in this program we are going to find the factorial of a given number by calling the method itself recursively.</p>
                <br>
                <pre class="code prettyprint linenums=1">
class Recursion{
  int factorial(int n){
      if(n==0)
      return 1;
      else
      return n*factorial(n-1);   //recursive call
  }
  public static void main(String[] args) {
     Recursion r = new Recursion();
    System.out.println("Factorial is: "+r.factorial(4));
  }
}          </pre>


                <h4>Output:</h4>
                <pre class="output">
  Factorial is: 24    </pre>


                <p>Here, the base condition is <span class="coral">if(n==0)</span> then the recursion ends by returning 1.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-method-overloading.php" class="f-left">prev</a>
                    <a href="./java-nesting-of-methods.php" class="f-right">next</a>
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
