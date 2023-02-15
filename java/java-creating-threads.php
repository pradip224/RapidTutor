<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Creating Threads,Implementing Runnable Interface | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,threads,extending,runnable,interface,implementing">

    <meta name="Description" content="Threads can be created by two ways-By extending Thread Class,implementing Runnable Interface.Easiest way to create a thread is by extending the Thread class.Thread class is inside the package java.lang.Thread which is imported by default">


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
                <h1>Creating Threads</h1>
                <p>Threads can be created by two ways:</p>
                <ul class="bullets">
                    <li>By <span class="coral">extending</span> Thread Class</li>
                    <li>By <span class="coral">implementing</span> Runnable Interface</li>
                </ul>
                <br>

                <h3>Extending Thread Class:</h3>
                <p>The easiest way to create a thread is by extending the <b>Thread class</b>.</p>
                <p>The Thread class is inside the package <span class="coral">java.lang.Thread</span> which is imported by default.</p>
                <br>

                <h4>Steps to create Thread:</h4>
                <br>
                <ul class="bullets">
                    <li>Create a class which extends the <span class="coral">Thread</span> class.</li>
                    <li class="output ns">
                        Ex. class Test extends Thread {...} </li>

                    <li>Define the <span class="coral">run()</span> method for the thread</li>
                    <li class="output ns">
                        Ex. public void run (){...} </li>

                    <li>Create the object &amp; call the <span class="coral">start()</span> method to start execution of the Thread.</li>
                    <li class="output ns">
                        Ex. Test obj = new Test();
                        &nbsp; &nbsp; &nbsp; obj.start(); </li>
                </ul>
                <br>

                <h4>Ex. Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test extends Thread{  //extending thread class
    
    public void run(){     //implementing run method
        System.out.println("This is run method");
    }

    public static void main(String[] args) {
        Test t = new Test();
        t.start();            //starting thread execution
    }
}          </pre>

                <h4>Output:</h4>
                <pre class="output">
  This is run method         </pre>

                <p>Here, The class <b>Test</b> extends the <b>Thread</b> class and defines the <span class="coral">run()</span> method.</p>
                <p>Then, The thread execution is started by calling the <span class="coral">start()</span> method using the object of Test class.</p>
                <br>
                <br>

                <h3><b>Creating Multiple Threads:</b></h3>
                <p>Multiple Threads can be created &amp; executed parallel to each other.</p>

                <h4>Ex. Program:</h4>

                <pre class="code prettyprint linenums=1">
class A extends Thread{
   
    public void run(){     //defining run method
        for(int i=0; i&lt;3 i++){
            System.out.println("Thread A: "+i);
        }
    }
}

class B extends Thread{
   
    public void run(){     //defining run method
        for(int i=0; i&lt;3; i++){
            System.out.println("Thread B: "+i);
        }
    }
    
    public static void main(String[] args) {
       
        A obj = new A();
        B obj1 = new B();
        obj.start();
        obj1.start();
    }
}         </pre>

                <h4>Output:</h4>
                <pre class="output">
Thread A: 0
Thread A: 1
Thread A: 2
Thread B: 0
Thread B: 1
Thread B: 2           </pre>
                <p>Here, we've created two classes &amp; extended the <b>Thread</b> class to them and also defined the <b>run()</b> method for each class.</p>
                <p>Then, created object of those two classes &amp; started execution of those threads by calling the <b>start()</b> method.</p>
                <br>
                <p class="wall"><b>Note:</b> Output may vary in your case, because threads always does not execute on the same sequence.</p>
                <br>
                <br>

                <h2>Implementing Runnable Interface:</h2>
                <p>We can create a thread by implementing <b>Runnable</b> Interface.</p>
                <p>This method of thread creation is required because java does not support <b>Multiple</b> Inheritance.</p>
                <p>so, when we want to extend another class then implementing the <b>Runnable Interface</b> allows us to create thread.</p>
                <br>
                <h4>Steps :</h4>
                <ul class="bullets">
                    <li>Create a class by implementing the <span class="coral">runnable</span> Interface.</li>
                    <li class="output ns">
                        Ex. class Test implements runnable {...} </li>

                    <li>Define the <span class="coral">run()</span> method.</li>
                    <li class="output ns">
                        Ex. public void run() {...} </li>

                    <li>Create <span class="coral">Thread</span> class object by passing the object of that newly created class as constructor parameter.</li>
                    <li class="output ns">
                        Ex. Thread t = new Thread (new Test()); </li>
                    <li>Call the <span class="coral">start()</span> method with the thread object.</li>
                    <li class="output ns">
                        Ex. t.start(); </li>
                </ul>
                <br>
                <h4>Ex. Program:</h4>
                <p>Let's do an example program where we create a thread by implementing runnable interface.</p>
                <pre class="code prettyprint linenums=1">
class Test implements Runnable{   //implementing Runnable
    
          //defining run method
  public void run(){
    System.out.println("Thread using Runnable Interface");
  }
    
  public static void main(String[] args) {

           //creating Thread object
      Thread t = new Thread(new Test());
      t.start();
    }
}       </pre>

                <h4>Output:</h4>
                <pre class="output">
  Thread using Runnable Interface   </pre>

                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-what-is-thread.php" class="f-left">prev</a>
                    <a href="./java-thread-priority-and-synchronization.php" class="f-right">next</a>
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
