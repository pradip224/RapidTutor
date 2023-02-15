<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Passing Object To Methods | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,passing,object,method,parameter">

    <meta name="Description" content="In java it is possible to pass objects as argument to methods.While passing object as parameter the type should be class_name followed by object_name.The return_type can be of any valid type or even the class type.The method_name can be any valid identifier.">

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
                <h1>Passing Object to Methods</h1>

                <p>In java it is possible to pass objects as argument to methods.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
return_type method_name(type object_name){
           ... <span class="comment">//method body</span>
        }</pre>
                <br>

                <p>The <span class="coral">return_type</span> can be of any valid type or even the class type.</p>
                <p>The <span class="coral">method_name</span> can be any valid identifier.</p>
                <p>Inside parenthesis, While passing object as parameter the type should be <span class="coral">class_name</span> followed by <span class="coral">object_name</span>.</p>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Student{
  String name;
  Student(String n){ //constructor
      name=n;
  }
  static void printName(Student s){ //method definition
      System.out.println("Name is: "+s.name);
  }
  public static void main(String[] args) {
      Student stu1 = new Student("John");
      printName(stu1);  //passing object as argument
  }
}   </pre>

                <h4>Output:</h4>
                <pre class="output">
    Name is: John       </pre>

                <br>

                <p>Here, we've passed object <span class="coral">stu1</span> as argument to the method <span class="coral">printName()</span> and inside the method we've accessed the name property <span class="coral">(s.name)</span> with formal parameter <span class="coral">s</span> of type <span class="coral">Student</span>.</p>
                <br><br>








                <div class="next-prev">

                    <a href="./java-what-is-method.php" class="f-left">prev</a>
                    <a href="./java-method-overloading.php" class="f-right">next</a>
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
