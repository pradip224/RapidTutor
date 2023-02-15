<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Creating Exception Sub class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,creating,exception,subclass,extending">

    <meta name="Description" content="It is possible to create our own Exception type by just simply extending the Exception Class.By having our own exception type allows us to handle exceptions specific to our application.">

    <?php include '../modules/head-links.php'; ?>


</head>

<body>

    <!--    SIDE-NAV   -->
    <?php include './j-module/side-nav.php'; ?>


    <!--    OPAQUE  -->
    <?php include '../modules/opaque.php'; ?>


    <!--    TOP-NAV-FIXED-->
    <?php include '../modules/top-nav.php'; ?>



    <div class="main-wrapper">


        <!--        BRAND-TOP         -->
        <?php include '../modules/brand-top.php'; ?>




        <!--  ***********     WRAPPER    **********  -->

        <div class="wrapper">


            <!--  ***********    MAIN     ********** -->


            <div class="main">
                <br>
                <h1>Creating Exception sub class in Java</h1>
                <p>It is possible to create our own <b>Exception</b> type by just simply <b>extending</b> the Exception Class.</p>
                <p>By having our own exception type allows us to handle exceptions specific to our application.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">
  class MyException extends Exception{
  ...
  } </pre>
                <br>

                <h4>Ex. Program:</h4>
                <p>In this program, we'll create subclass of <b>Exception</b>.</p>
                <pre class="code prettyprint linenums=1">
            //creating exception sub class
class MyException extends Exception{
    public MyException(String s){
        super(s);
    }
}

class Test{
    public static void main(String[] args) {

        try{
            throw new MyException("custom exception");
        }
        
        catch(Exception e){
            System.out.println(e);
        }
    }
}           </pre>

                <h4>Output:</h4>
                <pre class="output">
 MyException: custom exception  </pre>

                <br>

                <p>Here, in the example program we've created our own exception type "<b>MyException</b>" which extends the "<b>Exception</b>" super class.</p>

                <p>It has a parameterized constructor which sends the string argument to the super class constructor.</p>
                <br>
                <p>In the main we've thrown instance of new "<b>MyException</b>" type using the <b>throw</b> keyword and as argument send the string message "<b>custom exception</b>".</p>
                <p>The corresponding catch block of the try statement has received the exception object &amp; printed the string message that was passed which prints out the String "<b>MyException: custom exception</b>".</p>
                <br>
                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-throw-throws-finally-keyword.php" class="f-left">prev</a>

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
