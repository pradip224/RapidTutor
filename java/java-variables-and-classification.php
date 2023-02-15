<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Variables and Classification | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,variable,initialization,local variable,instance variable,class variable,default values">

    <meta name="Description" content="Variables hold different types of values to perform data manipulation and calculations by just specifying the name of the variable.Local Variables have the least scope and life.Instance variables are created whenever new object is instantiated.Class variables belongs to the entire class">

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
                <h1>Java Variables &amp; classification:</h1>
                <br>
                <h3>Variables:</h3>
                <p>Variables are used to hold different types of values in java. They are very useful to perform data manipulation and calculations on the data by just specifying the name of the variable.</p>
                <br>
                <h3>Declaration of Variables:</h3>
                <p>A variable is declared with a data type followed by identifier name.</p>
                <br>
                <h4>Example:</h4>
                <pre class="output">
  int a;     //single variable declaration
  float b;
  char c;
  double x,y,z; //multiple var declaration</pre>
                <p>Multiple variables can be declared by separating them with <span class="coral">commas</span>(,). </p>
                <br>
                <h3>Initialization of Variables:</h3>
                <p>Variables are initialized with the <span class="coral">assignment </span>(=) operator.</p>
                <pre class="code">
    int   number;    //initializing later 
    number = 10;  </pre>
                <p>We can declare and initialize the variables at later time.</p>
                <pre class="code">
    int number = 10; // init at same time</pre>
                <p>We can initialize the variables at the time of declaration.</p>
                <pre class="code">
 int a=10, b=20, c=30; //multi initialization</pre>


                <p>We can initialize multiple variables at the time of declaration by separating them with commas.</p>
                <br>
                <h3>Classification:</h3>
                <p>Java variables classified into three types based on their scope.</p>
                <pre class="output">
   => Local Variable
   => instance variable        
   => class variable   </pre>
                <br>
                <h3>Local Variable:</h3>
                <p>Local Variables have the least scope and life. They are declared inside method and their scope is limited within the method.</p>
                <h4>Example.</h4>
                <pre class="code prettyprint linenums=1">
class A{
  void display(){
    int num=10;        //local variable
    System.out.println("Local value= "+num);
           
      }
   }                 </pre>
                <p>Here <span class="coral">num</span> is a local variable which does not exist outside the method.</p>
                <br>
                <h3>Instance Variable:</h3>
                <p>Instance variables are created whenever new object is instantiated. These variables have seperate copies for every new object.</p>
                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
  String s="Instance Var";  //instance variable
  public static void main(String args[]){
          A obj= new A();
          System.out.println(obj.s);
      }
   }                 </pre>
                <h4>Output:</h4>
                <pre class="output"> Instance var</pre>
                <br><br>
                <h3>Class Variable:</h3>
                <p>Class variables are not part of any particular object rather belongs to the entire class. It has only one copy for all objects.</p>
                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
static String str="Class Var"; //class variable
public static void main(String args[]){
          System.out.println(A.str);
      }
   }                 </pre>
                <h4>Output:</h4>
                <pre class="output"> Class Var</pre>
                <br>
                <br>
                <h3>Java Default Values</h3>
                <p>If we don't initialize a variable there are some default values that are automatically assigned to the variable.</p>

                <p>The auto assigned values are:</p>

                <div class="table">
                    <table>
                        <tr>
                            <th>Data Type</th>
                            <th>Default Value</th>
                        </tr>
                        <tr>
                            <td>byte</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>short</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>char</td>
                            <td>null</td>
                        </tr>
                        <tr>
                            <td>int</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>long</td>
                            <td>0l</td>
                        </tr>
                        <tr>
                            <td>float</td>
                            <td>0.0f</td>
                        </tr>
                        <tr>
                            <td>double</td>
                            <td>0.0d</td>
                        </tr>
                        <tr>
                            <td>boolean</td>
                            <td>false</td>
                        </tr>
                    </table>
                </div>

                <br><br>










                <div class="next-prev">

                    <a href="./java-data-types.php" class="f-left">prev</a>
                    <a href="./java-naming-convention.php" class="f-right">next</a>
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
