<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java- What Is Method &#63; | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,what,method,declaration,definition,parameterized,call,array,passing">

    <meta name="Description" content="Methods are defined inside a class which are mainly used to perform any particular task or to manipulate the data elements.whenever we need to perform that task we simply call that particular method instead of writing those statements again, this way we achieve reusability using method">

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
                <h1>What is method &#63;</h1>
                <p>In java, <b>Methods</b> are defined inside a class which are mainly used to perform any particular task or to manipulate the data elements and produce results.</p>
                <br>
                <p>Methods usually have set of statements which together perform a task. whenever we need to perform that task we simply call that particular method instead of writing those statements again, this way we achieve <b>reusability</b> with the use of method.</p>
                <br>
                <h4>Method Definition:</h4>
                <p>Simple methods consists of <span class="coral">return_type</span> followed by <span class="coral">method_name</span> &amp; inside curly braces the body of the method.</p>
                <pre class="output">
   return_type method_name(){
       ... <span class="comment">//body</span>
     }        </pre>
                <br>

                <h4>Method Call:</h4>
                <p>Method can be called with object_name and the <span class="coral">dot(.)</span> operator and then the <span class="coral">method_name()</span> closed with semicolon.</p>
                <pre class="output">
  object.method_name();     </pre>

                <br>
                <br>

                <h2>Parameterized Methods:</h2>
                <p>When parameter List is used in the method definition,then those methods are called parameterized methods.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
return_type method_name(type p1,type p2,...){
        ... <span class="comment">// method body</span>
        }</pre>
                <br>
                <p>The <span class="coral">return_type</span> can be of any valid type even the class type we created. If the method does not return anything then we specify <span class="coral">void</span> to indicate that.</p>
                <p>The <span class="coral">Method_name</span> can be any valid identifier except the reserve keywords &amp; should be meaningful.</p>
                <br>
                <p>The <span class="coral">parameter_list</span> used to pass values to the method. The parameters are declared by <span class="coral">type</span> then followed by any valid<span class="coral"> para_name(p1)</span>. If contains multiple parameters then they should be separated by commas(,).</p>
                <p>Then inside the curly braces we've the method body where the statements are written for task to be performed.</p>
                <br><br>

                <h4>Method Declaration:</h4>
                <p>A simple method declaration as follows:</p>
                <pre class="output">
  void add(int a,int b){
   ... <span class="comment">//method_body</span> 
   }      </pre>

                <p>Method declaration or definition consists of <span class="coral">Formal Parameters</span> which are used into operation. The method body contains statements to perform it.</p>
                <br>
                <h4>Method Call:</h4>
                <pre class="output">
  object.add(2,5);       </pre>

                <p>The method is called with the object then the <span class="coral">dot(.)</span> operator followed by the method name. Here the <span class="coral">Actual Parameters</span> or <span class="coral">arguments</span> are passed as a copy to the formal parameters.</p>
                <br><br>
                <h4>Ex. Program:</h4>
                <p>Let's do an example program to define a method &amp; call it using object of the class.</p>
                <br>
                <pre class="code prettyprint linenums=1">
class Test{
  void Greet(){         //no parameter method
      System.out.println("Good evening");
  }
  void add(int a,int b){      //parameterized method
      int c=a+b;
      System.out.println("Addition is: "+c);
  }
  public static void main(String[] args) {
      Test  t = new Test();
      t.Greet();            //no parameter method call
      t.add(10,5);        //parameterized method call
  }
}        </pre>

                <h4>Output:</h4>
                <pre class="output">
   Good evening
   Addition is: 15        </pre>
                <br><br>

                <h2>Passing Array to Methods:</h2>
                <p>In java, it is possible to pass Arrays to methods and work on the array elements. Any changes made to the formalArray will reflect back on actualArray.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
void method(int array[]) {...} <span class="comment">//method definition</span>
object.method_name(array_name); <span class="comment">//method call</span> </pre>
                <p>In method definition we need to specify the formal parameter as array type with two square brackes.</p>
                <p>But in method call we can pass the array by just specifying the name of the array.</p>
                <br>
                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
void printArray(int formalArray[]){ //method definition
   System.out.println("Array Elements are:");
      for(int i:formalArray)   //enhanced for loop
       System.out.print(i+" ");
  }
  public static void main(String[] args) {
      int ar[] = {1,2,3,4,5}; //array initialization
      Test t = new Test();
      t.printArray(ar);      //method call
  }
}        </pre>
                <h4>Output:</h4>
                <pre class="output">
  Array Elements are:
  1 2 3 4 5          </pre>
                <br>

                <h2>Returning Value from Method:</h2>
                <p>We can return a value from method using the <span class="coral">return</span> keyword.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  return_type method_name(para_list){
        ... <span class="comment">//method body</span>
        return value;
    }    </pre>

                <p>While returning value, there should not be <span class="coral">void</span> as return type of method definition.</p>
                <br><br>
                <h4>Ex. Program:</h4>
                <p>Now, Let's do an example program where we return a value from method.</p>
                <pre class="code prettyprint linenums=1">
class Calculate{
  int add(int a,int b){
      return a+b;
  }
  public static void main(String[] args) {
    Calculate c = new Calculate();
    int result = c.add(5, 10);
    System.out.println("Addition is: "+result);
  }
}       </pre>
                <h4>Output:</h4>
                <pre class="output">
   Addition is: 15       </pre>

                <br><br>










                <div class="next-prev">

                    <a href="./java-constructor-overloading.php" class="f-left">prev</a>
                    <a href="./java-passing-object-to-method.php" class="f-right">next</a>
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
