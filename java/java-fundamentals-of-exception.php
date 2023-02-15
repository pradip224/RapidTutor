<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Fundamentals of Exception | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,fundamentals,exception,error,compile,time,run,checked,unchecked">

    <meta name="Description" content="Errors are unavoidable event of any development process like typing error.Two types of errors-Compile time and Run time errors.Compile time errors are detected by the compiler during compilation process.Runtime errors that occurs during execution of a program.">

    <?php include '../modules/head-links.php'; ?>



</head>

<body>

    <!--    SIDE-NAV   -->
    <?php include './j-module/side-nav.php'; ?>


    <!--    OPAQUE  -->
    <?php include '../modules/opaque.php'; ?>


    <!--    TOP-NAV-FIXED-->
    <?php include '../modules/top-nav.php'; ?>


    <!--  *************     MAIN-WRAPPER   ******** -->

    <div class="main-wrapper">


        <!--        BRAND-TOP         -->
        <?php include '../modules/brand-top.php'; ?>




        <!--  ***********     WRAPPER    **********  -->

        <div class="wrapper">


            <!--  ***********    MAIN     ********** -->


            <div class="main">
                <br>
                <h1>Fundamentals of Exception in Java</h1>

                <h3>Errors:</h3>
                <p>Errors are unavoidable event of any development process this can even be a typing error.</p>
                <br>
                <p>There are two types of errors:</p>
                <ul class="bullets">
                    <li>Compile time errors</li>
                    <li>Run time errors</li>
                </ul>
                <br>

                <h2>Compile Time Errors:</h2>
                <p>Compile time errors are those errors which can be detected by the compiler during compilation process.</p>
                <p>These type of errors are mainly occurs due to typing mistakes, like <b>syntax</b> error,missing semicolons,brackets etc.</p>
                <br>

                <h2>Run Time Errors:</h2>
                <p>Runtime errors are those errors that occurs during execution of a program.</p>
                <p>Runtime errors are nightmare for programmers. They can create serious problems, like producing wrong results or often abruptly terminates the program.</p>
                <p>Some common Runtime errors are: Divided by zero, arithmetic exception, NullPointer Exception etc.</p>
                <br>

                <h2>What is Exception &#63;</h2>
                <p>Exceptions are abnormal condition that may occur during execution of a program.</p>
                <p>Exceptions disrupts the normal flow of program execution.</p>
                <br>
                <p>There are two types of exception:</p>
                <ul class="bullets">
                    <li><b>Checked Exception:</b> are handled by writing codes inside the <span class="coral">try</span> &amp; <span class="coral">catch</span> blocks.</li>
                    <li><b>Unchecked Exception:</b> such exceptions are handled by the JVM.</li>
                </ul>
                <br>
                <br>

                <h4>Some common type of Exception are: </h4>

                <div class="table">
                    <table>
                        <tr>
                            <th>Exception Type</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>ArithmeticException</td>
                            <td>Mathematical errors such as divided by zero.</td>
                        </tr>
                        <tr>
                            <td>NumberFormatException</td>
                            <td>Invalid String to Numeric conversion.</td>
                        </tr>
                        <tr>
                            <td>IndexOutOfBoundsException</td>
                            <td>Some type of index out of Bound.</td>
                        </tr>
                        <tr>
                            <td>ArrayIndexOutOfBoundsException</td>
                            <td>Out of Bound Array Indexing.</td>
                        </tr>
                        <tr>
                            <td>StringIndexOutOfBoundsException</td>
                            <td>Out of Bound String Indexing.</td>
                        </tr>
                        <tr>
                            <td>NegativeArraySizeException</td>
                            <td>Array with negative size.</td>
                        </tr>
                        <tr>
                            <td>ArrayStoreException</td>
                            <td>Storing wrong type of data into array.</td>
                        </tr>
                        <tr>
                            <td>FileNotFoundException</td>
                            <td>Accessing non existed file.</td>
                        </tr>
                        <tr>
                            <td>IOException</td>
                            <td>I/O Failure.</td>
                        </tr>
                        <tr>
                            <td>NullPointerException</td>
                            <td>Invalid use of null reference.</td>
                        </tr>

                        <tr>
                            <td>OutOfMemoryException</td>
                            <td>Memory allocation failure.</td>
                        </tr>
                        <tr>
                            <td>StackOverFlowException</td>
                            <td>System Stack space exhausted.</td>
                        </tr>
                        <tr>
                            <td>ClassNotFoundException</td>
                            <td>Unable to find the class.</td>
                        </tr>
                        <tr>
                            <td>NoSuchFieldException</td>
                            <td>Field does not exists.</td>
                        </tr>
                        <tr>
                            <td>NoSuchMethodException</td>
                            <td>Method does not exists.</td>
                        </tr>
                        <tr>
                            <td>IllegalAccessException</td>
                            <td>Class access denied.</td>
                        </tr>
                        <tr>
                            <td>SecurityException</td>
                            <td>Security Violation.</td>
                        </tr>
                    </table>
                </div>
                <br>
                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-thread-priority-and-synchronization.php" class="f-left">prev</a>
                    <a href="./java-try-catch-block.php" class="f-right">next</a>
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
