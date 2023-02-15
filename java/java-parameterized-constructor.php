<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Parameterized Constructors | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,parameterized,constructor">

    <meta name="Description" content="Parameterized Constructors are same as default constructor but having some parameters with them which are used to initialise the instance variables.">

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
                <h1>Parameterized Constructor</h1>
                <p>Parameterized Constructors are same as default constructor but having some parameters with them which are used to initialise the instance variables.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
     Box(int a,int b){
       ...   <span class="comment">//constructor body</span>
     }        </pre>

                <br><br>

                <h4>Program:</h4>
                <p>Now, let's do an example program where we use parameterized constructor to initialise the variables.</p>
                <pre class="code prettyprint linenums=1">
class Student{
  String name;
  Student(String n){  //parameterized constructor
      name=n;
      System.out.println("variable initialised");
  }
  public static void main(String[] args) {
      Student stu1 = new Student("John");
      System.out.println("Student name: "+stu1.name);
  }
}          </pre>

                <h4>Output:</h4>
                <pre class="output">
    variable initialised
    Student name: John    </pre>
                <br>

                <p>Here, we sent parameter "John" to the constructor which initializes the "name" variable.</p>
                <p>And this way we able to print the value of name variable.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-constructors.php" class="f-left">prev</a>
                    <a href="./java-constructor-overloading.php" class="f-right">next</a>
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
