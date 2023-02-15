<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java- What is Thread &#63; | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,thread,life,cycle,creating,born,runnable,running,dead,state">

    <meta name="Description" content="Thread is a concept where a program divided into subprograms & executed in parallel.Multiple threads improves overall speed of program execution.Threads used for multitasking & responsive GUI.Thread goes through different life cycle states-Born,Runnable,Running,Blocked,Dead">

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
                <h1>What is Thread &#63;</h1>
                <p>Thread is a concept where a program can be divided into subprograms &amp; execute them in parallel.</p>
                <p>Java allows us to create multiple threads which improves the overall speed of program execution.</p>
                <br>
                <p>Every thread has its own <b>stack</b>, <b>program counter</b> &amp; <b>Memory space</b> associated to it.</p>
                <p>Using threads <b>multitasking</b> &amp; <b>responsive</b> GUI application can be possible.</p>
                <br>

                <h3>Creating Thread:</h3>
                <p>Threads can be created by two ways:</p>
                <ul class="bullets">
                    <li>By <span class="coral">extending</span> Thread Class</li>
                    <li>By <span class="coral">implementing</span> Runnable Interface</li>
                </ul>
                <br>

                <h3>Thread Life Cycle:</h3>
                <p>A thread goes through different life cycle states, they are:</p>
                <ul class="bullets">
                    <li>Born</li>
                    <li>Runnable</li>
                    <li>Running</li>
                    <li>Blocked</li>
                    <li>Dead</li>
                </ul>
                <br>
                <img src="../images/java-thread-life-cycle.png" alt="Thread life cycle" width="400"><br><br>
                <p>Lets learn more about life cycle threads:</p>

                <h3>Born state:</h3>
                <p>Creating a new thread object is said to be in born state.</p>
                <p>From this state a thread can go to <b>running</b> state with the <span class="coral">start()</span> method or it can go to <b>Dead</b> state with <span class="coral">stop()</span> method.</p>

                <br>

                <h3>Runnable state:</h3>
                <p>It is the state where different threads ready to be executed are waiting in a queue.</p>
                <p>Threads switch between runnable &amp; running state depending up on Thread <b>Priority</b> and availability of the processor.</p>
                <br>

                <h3>Running State:</h3>
                <p>It is the state where thread is in execution.</p>
                <p>From this state a thread can go to Runnable state by <span class="coral">yield()</span> method.</p>
                <p>A running Thread goes to blocked state with <span class="coral">suspend() , sleep()</span> and <span class="coral">wait()</span> method.</p>
                <p>or can go to Dead state with <span class="coral">stop()</span> method.</p>

                <br>

                <h3>Blocked State:</h3>
                <p>A thread is in blocked or idle state where it is waiting for certain condition to be fulfilled to reenter the runnable or running state.</p>
                <p>The <span class="coral">notify()</span> and <span class="coral">resume()</span> methods are used to reenter in running state.</p>
                <p>or it can go directly to dead state with <span class="coral">stop()</span> method.</p><br>

                <h3>Dead State:</h3>
                <p>A Thread ends its life cycle in Dead state.</p>
                <p>A thread goes to dead state after it has executed its <span class="coral">run()</span> method.</p>
                <p>or it can forcibly lead to dead state from any of the above states by using the <span class="coral">stop()</span> method at any point of time.</p>
                <br>

                <h2>Thread methods:</h2>
                <p>Thread has several methods to transit between different states &amp; also to perform various operations on them.</p>
                <br><br>
                <p>Some of the useful methods are:</p>
                <div class="table">
                    <table>
                        <tr>
                            <th>Method</th>
                            <th>Operation</th>
                        </tr>
                        <tr>
                            <td>start()</td>
                            <td>Starts the thread by calling it's run method</td>
                        </tr>
                        <tr>
                            <td>run()</td>
                            <td>This method contains statements to be executed by the thread</td>
                        </tr>
                        <tr>
                            <td>yield()</td>
                            <td>Running thread goes to Runnable state</td>
                        </tr>
                        <tr>
                            <td>schedule()</td>
                            <td>Runnable thread goes to Running state</td>
                        </tr>
                        <tr>
                            <td>suspend()</td>
                            <td>Thread goes to blocked state until recall</td>
                        </tr>
                        <tr>
                            <td>resume()</td>
                            <td>Resumes execution of the suspended thread</td>
                        </tr>
                        <tr>
                            <td>sleep()</td>
                            <td>Thread blocked for specified amount of time</td>
                        </tr>
                        <tr>
                            <td>wait()</td>
                            <td>Thread blocked until certain condition occurs</td>
                        </tr>

                        <tr>
                            <td>notify()</td>
                            <td>Resumes thread execution from sleep state</td>
                        </tr>
                        <tr>
                            <td>notifyall()</td>
                            <td>Resumes execution of all threads from sleep state</td>
                        </tr>
                        <tr>
                            <td>stop()</td>
                            <td>Thread goes to Dead state</td>
                        </tr>
                        <tr>
                            <td>setPriority()</td>
                            <td>Sets a priority for the thread</td>
                        </tr>
                        <tr>
                            <td>getName()</td>
                            <td>Returns the name of the thread</td>
                        </tr>
                        <tr>
                            <td>isAlive()</td>
                            <td>Returns boolean value if the thread is still running</td>
                        </tr>
                    </table>
                </div>
                <br><br>










                <div class="next-prev">

                    <a href="./java-implementing-and-extending-interfaces.php" class="f-left">prev</a>
                    <a href="./java-creating-threads.php" class="f-right">next</a>
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
