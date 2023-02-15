<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Static Class Members | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,static,class,members">

    <meta name="Description" content="static members of class does not belong to any object rather part of entire class.static variables accessed Directly Using class name,static blocks are used to initialize static variables,static methods can be invoked without object,Only inner classes allowed to be static.">

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
                <h1>Static Class Members in Java</h1>
                <p><span class="coral">static</span> is a keyword in java.</p>
                <p>static members of class does not belong to any object rather part of entire class, thats why static members does not required to be accessed by objects.</p>
                <br>
                <h2><span class="coral">static</span> variables:</h2>
                <br>
                <h4>Declaration:</h4>
                <pre class="output">   static int number;</pre>
                <p>static variables declared with <span class="coral">static</span> keyword.</p>
                <br>
                <h4>Accessing Variables:</h4>
                <p>static variables can be accessed by</p>
                <ul class="bullets">
                    <li>Directly</li>
                    <li>Using class name</li>
                </ul>
                <br>
                <pre class="output">
   number;   <span class="comment">//direct access</span>
      or
   class_Name.number; <span class="comment">//using class name</span>    </pre>

                <br>
                <h4>Program:</h4>
                <p>In this program we create a static variable and access it without any object reference.</p>
                <pre class="code prettyprint linenums=1">
class StaticVar{
  static int number=10;
  static String str ="static string";
  public static void main(String[] args) {
      System.out.println("Value of number: "+number); //direct access
      String s= StaticVar.str;    //access with class name
      System.out.println("Value of String: "+s); 
    }
}   </pre>

                <h4>Output:</h4>
                <pre class="output">
  Value of number: 10
  Value of String: static string       </pre>

                <br>

                <h2><span class="coral">static</span> Block:</h2>
                <p>static blocks are used to initialize static variables after declaration.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  static{
   ...
  }            </pre>
                <p>It starts with <span class="coral">static</span> keyword and inside curly braces we initialize the variables.</p>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class StaticBlock{
  static int number;  
  static{         //static block
      number=10;       
  }
  public static void main(String[] args) {
      System.out.println("Value of number: "+number);
  }
}       </pre>

                <h4>Output:</h4>
                <pre class="output">
  Value of number: 10        </pre>
                <br>

                <h2><span class="coral">static</span> Method:</h2>
                <p>static methods can be directly accessed from static or non-static methods.</p>
                <br>
                <h4>Program:</h4>
                <p>In this program we create a static method &amp; access it without object reference. </p>
                <br>
                <pre class="code prettyprint linenums=1">
class StaticMethod{
    static void add(int a,int b){   //static method
        System.out.println("\nAddition is: "+(a+b));
    }
    public static void main(String[] args) {
        add(10,20);    //direct access
        StaticMethod.add(20, 30); //access with ClassName
    }
}            </pre>



                <h4>Output:</h4>
                <pre class="output">
  Addition is: 30
  Addition is: 50          </pre>

                <br>

                <h2><span class="coral">static</span> Class:</h2>
                <br>
                <p>In java, Only nested inner classes are allowed to be static.</p>
                <p>Static classes cannot access not static variables of outer class.</p>
                <br>
                <h4>Program:</h4>
                <p>Here, we don't need reference of outer object to access inner non-static members.</p>
                <br>
                <pre class="code prettyprint linenums=1">
class StaticInnerClass{
  static class Inner{  //nested inner class
      void display(){
          System.out.println("Inner method");
      }
  }
  public static void main(String[] args) {
    StaticInnerClass.Inner obj = new StaticInnerClass.Inner();
      obj.display();
  }
}         </pre>


                <h4>Output:</h4>
                <pre class="output">
  Inner method      </pre>

                <br><br>










                <div class="next-prev">

                    <a href="./java-call-by-reference.php" class="f-left">prev</a>
                    <a href="./java-inner-class.php" class="f-right">next</a>
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
