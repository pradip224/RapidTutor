<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Method Overriding | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,method,overriding">

    <meta name="Description" content="Method Overriding is the concept where child class redefines the method that is already defined by the parent class.so, In method overriding the parent & child class method has to have same-Method Name,parameter List,return Type but with different method definition.">

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
                <h1>Method Overriding in Java</h1>
                <p>Method Overriding is the concept where child class redefines the method that is already defined by the parent class.</p>
                <p>so, if we call the method with the child object then the child version of the method is invoked.</p>
                <p>This concept is used when we want some different functionality of a method in the child class.</p>
                <h4>Rules: </h4>
                <p>To have method overriding the parent &amp; child class method has to have same-</p>
                <ul class="bullets">
                    <li>Method Name</li>
                    <li>parameter List</li>
                    <li>return Type</li>
                </ul>
                <p>But, with different method <b>definition</b> in the child class.</p>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
  void display(){  //parent version of display()
      System.out.println("Class A Method");
  }
}

class B extends A{
  void display(){   //child version of display()
     System.out.println("Class B Method");
  }
  
  public static void main(String[] args) {
     B obj = new B();
     obj.display();
  }
}       </pre>


                <h4>Output:</h4>
                <pre class="output">
  Class B Method        </pre>



                <p>Here, parent version of <span class="coral">display()</span> method is overridden by child class and provided a different definition.</p>
                <br>
                <p>Now,if we call <span class="coral">display()</span> method using the child object then it will always call child version of method.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-super-keyword.php" class="f-left">prev</a>
                    <a href="./java-final-keyword.php" class="f-right">next</a>
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
