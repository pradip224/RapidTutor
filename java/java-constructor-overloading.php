<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Constructor Overloading | RapidTutor</title>


    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,constructor,overloading">

    <meta name="Description" content="Constructor Overloading means we can have more than one constructor in a class.Constructor Overloading is possible in java by varying-number of parameter,type of parameter,constructor call is determined on the basis of parameter count and also their type in sequence">


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
                <h1>Constructor Overloading</h1>
                <p>Constructor Overloading means we can have more than one constructor in a class.</p>
                <br>
                <p>Constructor Overloading is possible in java by varying:</p>
                <ul class="bullets">
                    <li>number of parameter</li>
                    <li>type of parameter</li>
                </ul>
                <br>
                <p>Java allows us to overload constructors which can perform different tasks based on the parameter number &amp; their type.</p>
                <p>The constructor call is determined on the basis of parameter count and also their type in sequence.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">
    Box(){...}   <span class="comment">//default constructor</span>
    Box(int a){...}
    Box(int a,int b){...} 
    Box(int a,double b){...}            </pre>

                <p>Here we can have several <b>Box</b> constructors but with differing parameter number &amp; their type.</p>
                <br>

                <h4>Program:</h4>
                <p>Let's do an example program where we overload the constructors and use them for different purposes.</p>
                <pre class="code prettyprint linenums=1">
class Box{
  double length,breadth,height;
  Box(){              
      length=breadth=height=2; //default constructor
  }
  Box(double n){
      length=breadth=height=n;
  }
  Box(double a,double b, double c){
      length=a; breadth=b; height=c;
  }
  double volume(){
      return length*breadth*height;
  }
  public static void main(String[] args) {
     Box b1 = new Box();
     Box b2 = new Box(5.0);
     Box b3 = new Box(1.0,2.0,3.0);
     System.out.println("volume of b1: "+b1.volume());
     System.out.println("volume of b2: "+b2.volume());
     System.out.println("volume of b3: "+b3.volume());
  }
}         </pre>

                <h4>Output:</h4>
                <pre class="output">
    volume of b1: 8.0
    volume of b2: 125.0
    volume of b3: 6.0           </pre>

                <br>

                <h4>Explanation:</h4>
                <br>
                <p>For object b1 default constructor in called which initialises all three parameters with value 2.</p>
                <p>For object b2 constructor with one parameter is called which initialises all three parameters with the argument passed.</p>
                <p>For object b3 constructor with three parameter is called which initialises them with passed arguments.</p>
                <p>And then calling the volume() method with the object returns the volume of that respective object.</p>
                <br>
                <br>









                <div class="next-prev">

                    <a href="./java-parameterized-constructor.php" class="f-left">prev</a>
                    <a href="./java-what-is-method.php" class="f-right">next</a>
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
