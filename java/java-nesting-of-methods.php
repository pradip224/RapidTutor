<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Nesting of Methods | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,nested,method">

    <meta name="Description" content="In java, Nesting of methods means it is possible to call one method from inside another method body, given both of them are in the same class.">

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

                <h1>Nesting of Methods</h1>

                <p>In java, Nesting of methods means it is possible to call one method from inside another method body given both of them are in the same class.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">
   return_type m1(){
    ...
    }
   return_type m2(){
        m1();    <span class="comment">//nested method call</span>           
    }        </pre>

                <p>Here, we are calling method <span class="coral">m1()</span> from inside method <span class="coral">m2()</span> which performs the same as calling using object of the class.</p>
                <br>
                <h4>Program:</h4>
                <br>
                <pre class="code prettyprint linenums=1">
class Test{
  int a,b;
  Test(int x,int y){
      a=x; b=y;
  }
  int max(){
      return (a&gt;b&#63;a:b);  //ternary operator
  }
  void display(){
      int max = max();   //nested method call
      System.out.println("max of a and b is: "+max);
  }
  public static void main(String[] args) {
      Test t = new Test(4,6);
      t.display();
  }
}        </pre>

                <h4>Output:</h4>
                <pre class="output">
  max of a and b is: 6       </pre>

                <br><br>










                <div class="next-prev">

                    <a href="./java-recursion-of-methods.php" class="f-left">prev</a>
                    <a href="./java-call-by-value.php" class="f-right">next</a>
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
