<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java - What is Object | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,what,object">

    <meta name="Description" content="Objects are implementation of class type which may refer to a real world entity,Objects are created with the new keyword which allocates memory for the instance variables and returns reference.Instance variables & methods are accessed by the dot(.) operator. ex- new Box();">

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
                <h1>What is object &#63;</h1>
                <p>Objects are implementation of class type which may refer to a real world entity.</p>
                <br>
                <h4>Creating Object:</h4>
                <p>Objects are created with the <span class="coral">new</span> keyword which allocates memory for the instance variables and returns reference.</p><br>
                <pre class="output">
Box b;        <span class="comment"> //declaring object</span>
b= new Box(); <span class="comment"> //init object with reference</span></pre>
                <br>

                <p>Here, first we've created the object of <span class="coral">Box</span> class which points to <span class="coral">null</span>.</p>
                <br>
                <p>Then, in second line we actually initialized the object b with reference of box class.</p>
                <pre class="output">
    Box b = new Box();        </pre>

                <p>Initialization and declaration can be done at the same time using the <span class="coral">new</span> keyword.</p>
                <br>

                <h2>Accessing members with object:</h2>
                <br>
                <p>Instance variables &amp; methods are accessed by the <span class="coral">dot(.)</span> operator.</p>
                <p>Every object has their own separate copies of instance variables so inorder to initialize them we need to access them with the dot operator.</p>
                <br>
                <h4>Syntax:</h4><br>
                <pre class="output">
    obj.instance_variable=10;
    obj.method_name(arguments);  </pre>
                <p>We can access members of class by using <span class="coral">object_name</span> followed by <span class="coral">dot(.)</span> and then the <span class="coral">variable_name</span>.</p>

                <p>While accessing methods, we use <span class="coral">object_name</span> followed by <span class="coral">method_name</span> and then arguments if required.</p>

                <br><br>
                <h4>Program:</h4>
                <p>Now , let's do an example program where we access instance variables and methods using object of the class.</p><br>
                <pre class="code prettyprint linenums=1">
class Test{
  int var;
  void display(){
      System.out.println("This is Demo Method");
  }
  public static void main(String[] args) {
      Test t = new Test();
      t.var =10;      //initializing instance variable
      t.display();    //method call
      System.out.println("var value: "+t.var);
  }
}            </pre>

                <h4>Output:</h4>
                <pre class="output">
    This is Demo Method
    var value: 10         </pre>

                <br><br>










                <div class="next-prev">

                    <a href="./java-what-is-class.php" class="f-left">prev</a>
                    <a href="./java-constructors.php" class="f-right">next</a>
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
