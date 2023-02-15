<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Throw, Throws and Finally | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,throw,throws,finally,throwable">

    <meta name="Description" content="throw keyword used to explicitly throw exceptions,throws keyword used in method declaration to specify list of possible exceptions that method can throw so,caller must handle the thrown exceptions using try-catch block,finally block holds crucial statements of a program that must execute">

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




        <!--  ***********     WRAPPER    **********  -->

        <div class="wrapper">


            <!--  ***********    MAIN     ********** -->


            <div class="main">
                <br>
                <h1><span class="coral">Throw</span>, <span class="coral">Throws</span> &amp; <span class="coral">Finally</span> in Java</h1>
                <br>
                <h2><span class="coral">throw</span> keyword:</h2>
                <br>
                <p>This keyword is used to explicitly throw exceptions in java.</p>
                <p>We can only throw object of type <b>Throwable</b> or subclass of it. Any subsequent statements after throw will not execute.</p>
                <br>
                <p>The thrown object type is checked against enclosing try block's catch statements for possible match, if it does not find any match then it checks next enclosing try block's catch statements.</p>
                <br>
                <p>If match is found then the control is transferred to that catch block.</p>
                <p>If no match is found then the default exception handler terminates the program.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
throw throwable_instance;
throw new ArithmeticException(); 
throw new ArithmeticException("div by zero");</pre>

                <p>We create instance of Exception Object with the <b>new</b> keyword.</p>
                <p>Java’s run-time exceptions have two constructors one with no parameter &amp; another with <b>String</b> parameter.</p>
                <p>The <b>String</b> argument is used to describe the Exception.</p>
                <br><br>

                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
    static void method(){
         try{        //throwing exception
             throw new ArithmeticException("div by zero");
         }
         //catching &amp; re-throwing exception
         catch(ArithmeticException e){
             System.out.println("Re-throwing Exception");
             throw e;
         }
    }
    
    public static void main(String[] args) {
        try{
            method();
        }
        //catching &amp; displaying exception
        catch(Exception e){
            System.out.println(e);
        }
    }
}         </pre>

                <h4>Output:</h4>
                <pre class="output">
Re-throwing Exception
java.lang.ArithmeticException: div by zero </pre>

                <br>

                <p>First exception object is explicitly thrown with the string "<b>div by zero</b>".</p>
                <p>the thrown object is caught by enclosing try's catch statement &amp; <b>re-thrown</b> again with throw keyword.</p>
                <p>At the end it is caught inside the main method where it is displayed with the print function.</p>
                <br>
                <br>

                <h2><span class="coral">throws</span> keyword:</h2>
                <br>
                <p>The <b>throws</b> keyword is used in method declaration to specify list of possible exceptions that the method can throw.</p>
                <p>So, the caller must handle the thrown exceptions using try-catch block.</p>
                <br><br>

                <h4>Syntax:</h4>
                <pre class="output">
ret_type method_name () <span class="coral">throws</span> exception_list{
    ...               
} 
<b>Ex.</b> void calculate()throws ArithmeticException{
            ...
        }      </pre>

                <p>The <b>exception_list</b> are number of comma(,) seperated exception types.</p>
                <br><br>

                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
    static void method() throws ArithmeticException {
       int x =6/0;
    }

    public static void main(String[] args) {
        try{
            method();
        }
        //catching &amp; displaying exception
        catch(Exception e){
            System.out.println(e);
        }
    }
}       </pre>

                <h4>Output:</h4>
                <pre class="output">
 java.lang.ArithmeticException: / by zero </pre>

                <p>Here, we intentionally created exception inside <b>method()</b> which <b>throws</b> ArithmeticException in its declaration.</p>
                <p>The thrown exception is handled by the catch block inside the main method. </p>

                <br>
                <br>
                <h2><span class="coral">finally</span> keyword:</h2>
                <br>
                <p>The <b>finally</b> is a block in java which holds the crucial statements of a program that must execute.</p>
                <p>Statements inside finally block executed irrespective of the fact that whether exception has occured or not.</p>
                <p>Statements inside <b>finally</b> will always execute no matter what. These statements can be closing a opened file, connection or stream etc.</p>
                <br>
                <p>There are some situations when finally block does not execute: </p>
                <ul class="bullets">
                    <li>Exception inside finally block.</li>
                    <li>when calling <b>System.exit()</b> method.</li>
                    <li>Transition of a thread to <b>Dead</b> state.</li>
                </ul>
                <br>

                <h3>Rules of using <b>finally</b> Block:</h3>
                <br>
                <ul class="bullets">
                    <li><span class="coral">finally</span> block cannot be used without a <b>try</b> block. There always be a try block associated with a finally block.</li>
                    <li><span class="coral">finally</span> can be used together with try-catch block.
                    </li>
                    <li class="output ns">
                        try{...}
                        catch(Exception e){...}
                        finally{...} </li>

                    <li><b>try-finally</b> block can be possible without catch block.
                    </li>
                    <li class="output ns">
                        try{...}
                        finally{...} </li>

                    <li>finally block will execute even exception does not occur in try block.</li>
                    <li>finally will execute even if the try block has control transfer statements like <b>return</b>, <b>continue</b> or <b>break</b>.
                    </li>
                    <li class="output ns">
                        try{ return 0;}
                        finally{...} </li>

                </ul>

                <br><br>

                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test{
 
  static void method(){
      try{
          System.out.println("first line of try block");
          int x =5/0;
      }
      catch(ArithmeticException e){
          System.out.println("Exception Handled in catch block");
      }
      finally{
          System.out.println("finally block executed");
      }
  }
    
  public static void main(String[] args) {
      method();
  }
}        </pre>

                <h4>Output:</h4>
                <pre class="output">
first line of try block
Exception Handled in catch block
finally block executed   </pre>

                <p>Here, the generated <b>ArithmeticException</b> is handled in the catch block still the code inside finally block is executed.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-nested-try-block.php" class="f-left">prev</a>
                    <a href="./java-creating-exception-sub-class.php" class="f-right">next</a>
                </div>

                <div class="main-bottom">
                </div>

            </div>



            <!-- *********    RIGHT-SIDE   ******** -->

            <div class="right-side">Right Side</div>
        </div>

        <!--        FOOTER-->
        <?php include '../modules/footer.php'; ?>




    </div>



</body>

</html>
