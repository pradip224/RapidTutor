<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Method Overloading | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,method,overloading">

    <meta name="Description" content="Method overloading means,several methods can exist with the same name.Method Overloading achieved by changing either-Number of Parameters,Data type of Parameters,Sequence of data type of Parameters, method to be invoked is selected based on the number of parameter,type & their sequence.">

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
                <h1>Method Overloading</h1>
                <p>Method overloading means, in java several methods can exist with the same name.</p>
                <p>The overloading concept is very useful when we want to extend the functionality of a method.</p>

                <h4>Rules:</h4>
                <p>Method <b>Overloading</b> can be possible by changing either :</p>
                <ul class="bullets">
                    <li>Number of Parameters</li>
                    <li>Data type of Parameters</li>
                    <li>Sequence of data type of Parameters</li>
                </ul>
                <p>The method to be invoked is selected based on the number of parameter,type &amp; their sequence, which has to be matched with the method call.</p>

                <h4>Syntax:</h4>
                <pre class="output">
  void add(int a){...}
  void add(int a,int b){...}
  void add(int a,double b){...}
  void add(double a,int b){...}
  void add(int a,int b,int c){...}    </pre>




                <br><br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Overload{
  static int add(int a){  //one arg method
      return a+a;
  }
  static int add(int a,int b){ //two arg method
      return a+b;
  }
  static double add(int a, double b){ 
      return a+b;
  }
  static double add(double a, int b){
      return a+b;
  }
  static int add(int a,int b,int c){ //three arg method
      return a+b+c;
  }
  public static void main(String[] args) {
    System.out.println("one arg addition: "+add(2));
    System.out.println("two arg addition: "+add(2,3));
    System.out.println("two arg int,double: "+add(4,5.6));
    System.out.println("two arg double,int :"+add(4.5,4));
    System.out.println("three arg addition: "+add(2,3,4));
   }
}        </pre>


                <h4>Output:</h4>
                <pre class="output">
  one arg addition: 4
  two arg addition: 5
  two arg int,double: 9.6
  two arg double,int :8.5
  three arg addition: 9       </pre>

                <br>

                <div class="wall">
                    <h4>Note:</h4>

                    <p>Methods cannot be overloaded by just changing the return type of the method.</p>
                </div>
                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-passing-object-to-method.php" class="f-left">prev</a>
                    <a href="./java-recursion-of-methods.php" class="f-right">next</a>
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
