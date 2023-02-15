<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Call by Reference | RapidTutor</title>


    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,reference,call,array,collection,objects,call by reference">

    <meta name="Description" content="Call by Reference means where we pass reference of argument to the method,so any changes made inside the method are reflected back to the Actual Parameters,In java everything is passes as call by value- But if we pass-Array,Collection,Objects as method parameter then call by reference possible.">

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
                <h1>Call by Reference in Java</h1>
                <p>Call by Reference means where we pass <span class="coral">reference</span> of argument to the method instead of a copy of the value, so any changes made inside the method are reflected back to the Actual Parameters.</p>
                <br>
                <p>In java everything is passes as call by value.</p>
                <p>But if we pass</p>
                <ul class="bullets">
                    <li>Array</li>
                    <li>Collection</li>
                    <li>Class Objects</li>
                </ul>
                <p>as method parameter then we can achieve call by reference in Java.</p>
                <br>
                <h2>Passing Array as argument:</h2>
                <br>
                <h4>Program:</h4>
                <p>In this Example Program, we pass an array as method argument &amp; make changes to the array inside the method then, check in main method if the changes are reflected back or not.</p>
                <pre class="code prettyprint linenums=1">
class Array{
  static void change(int ar[]){    // change method
      for(int i=0;i&lt;ar.length;i++)
          ar[i]+=1;
  }
  static void display(int ar[]){   //display method
      for(int i: ar)
      System.out.print(" "+i);
  }
  public static void main(String[] args) {
      int ar[]={1,2,3,4,5};
      System.out.println("Array before change");
      display(ar);  //display call
      change(ar);    //change call
      System.out.println("\nArray after change");
      display(ar);
  }
}        </pre>

                <h4>Output:</h4>
                <pre class="output">
   Array before change
   1 2 3 4 5
   Array after change
   2 3 4 5 6       </pre>

                <p>Here, we used array as method argument so changes are reflected back to the actual parameter.</p>
                <br>

                <h2>Object as Method Argument:</h2>
                <br>
                <h4>Program:</h4>
                <p>In this Program, we pass object as method argument and achieve call by reference.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  int a;
  Test(int x){  //parameterized constructor
      a=x;
  }
  static void swap(Test t1, Test t2){   //swap method
      int tmp;
      tmp=t1.a;
      t1.a= t2.a;
      t2.a =tmp;
  }
  public static void main(String[] args) {
   Test t1 = new Test(5);
   Test t2 = new Test(10);
   System.out.println("Before swap t1.a= "+t1.a+" t2.a= "+t2.a);
   swap(t1,t2);    //swap method call
   System.out.println("After swap t1.a= "+t1.a+" t2.a= "+t2.a);
  }
}         </pre>
                <h4>Output:</h4>
                <pre class="output">
   Before swap t1.a= 5 t2.a= 10
   After swap t1.a= 10 t2.a= 5     </pre>

                <p>As you can see while passing object as parameter then the changes are reflects back.</p>
                <p>In this case two object values are swapped between each other and the changes are maintained after the method call.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-call-by-value.php" class="f-left">prev</a>
                    <a href="./java-static-class-members.php" class="f-right">next</a>
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
