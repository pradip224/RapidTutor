<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Thread Priority and Synchronization | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,thread,priority,setPriority,getPriority,synchronization">

    <meta name="Description" content="Thread priority is a number from range 1 to 10 based on which one thread is given more importance respective to other,higher the number the more important that thread is.MIN_PRIORITY: value is 1,NORM_PRIORITY: value is 5,MAX_PRIORITY: value is 10">

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
                <h1>Thread Priority</h1>
                <p>Thread priority is a number from range 1 to 10 based on which one thread is given more importance respective to other.</p>
                <p>The higher the number the more important that thread is.</p>
                <p>All the threads in java has some priority associated to it.</p>
                <br><br>
                <p>Some methods to work on thread priority are:</p>
                <ul class="bullets">
                    <li><b>setPriority(n):</b> sets the priority of specified thread as integer number n.</li>
                    <li><b>getPriority():</b> returns the priority of the specified thread</li>
                </ul>
                <br>

                <h3>Three static variables of Thread class:</h3>
                <br>
                <p><b><span class="coral">MIN_PRIORITY</span></b>: value is <b>1</b>. This is minimum priority of Thread range.</p>
                <p><b><span class="coral">NORM_PRIORITY</span></b>: value is <b>5</b>. This is default priority of any Thread.</p>
                <p><b><span class="coral">MAX_PRIORITY</span></b>: value is <b>10</b>. This is maximum priority of Thread Range.</p>
                <br>
                <br>

                <h4>Ex. Program:</h4>
                <p>Now, Let's do an example program where we set priority of Threads using the static variables &amp; also print their priority using <b>getPriority()</b> method.</p>
                <br>
                <pre class="code prettyprint linenums=1">
import java.lang.Thread;

class Test extends Thread{

  public void run(){
      System.out.println("run method");
  }
    
  public static void main(String[] args) {
      Test t1,t2,t3;
      t1 =new Test();
      t2 = new Test();
      t3 = new Test();

      t1.setPriority(Thread.MIN_PRIORITY);
      t2.setPriority(Thread.NORM_PRIORITY);
      t3.setPriority(Thread.MAX_PRIORITY);

      System.out.println("t1 priority: "+t1.getPriority());
      System.out.println("t2 priority: "+t2.getPriority());
      System.out.println("t3 priority: "+t3.getPriority());
  }        
}        </pre>

                <h4>Output:</h4>
                <pre class="output">
  t1 priority: 1
  t2 priority: 5
  t3 priority: 10   </pre>
                <br>

                <h2>Synchronization:</h2><br>
                <p>In java, Synchronization is used in Multi-Threaded environment where multiple Threads working on the same resource can produce erroneous results.</p>
                <p>By declaring a block of code as <span class="coral">synchronized</span> it is ensured that there will not be any conflict between the executing threads.</p>
                <br>
                <p>In Synchronization the concept of <b>monitor</b> is used where only one thread can own a monitor.Once a thread is inside a
                    synchronized block of code, no other thread can call any other synchronized method on
                    the same object </p>
                <p>The locked monitor is available to other threads only when the executing thread exits the monitor.</p>
                <br>

                <h4>Syntax:</h4>
                <pre class="output">
  synchronized void write (){
  ...   <span class="comment">//statements to be synchronized</span>
  }    </pre>
                <br>
                <br>
                <h4>Ex. Program without using synchronization:</h4>
                <br>

                <pre class="code prettyprint linenums=1">
 class Count{
    public static int c =1;

    void disp(){    //method without synchronization
       for(int i=0; i&lt;3; i++)
        System.out.println("Count value: "+(c++));
    }
}

class A extends Thread{
    Count ca;
    A(Count obj){
        ca =obj;
    }
    public void run(){
        ca.disp();
    }
}

class B extends Thread{
    Count cb;
    B(Count obj){
        cb=obj;
    }
    public void run(){
        cb.disp();
    }
}

class Test{
    public static void main(String[] args) {
        
        Count obj = new Count();

        A oba = new A(obj);
        B obb = new B(obj);

        oba.start();
        obb.start();
    }
}
                  </pre>

                <h4>Output:</h4>
                <p>Output without using synchronization</p>
                <pre class="output">
Count value: 1
Count value: 3
Count value: 4
Count value: 2
Count value: 5
Count value: 6       </pre>

                <p>As you can see the <b>count</b> value is not in sequence that means different threads executed the block of code randomly.</p>
                <br>
                <br>

                <h4>Ex. Program with synchronization:</h4>
                <br>
                <pre class="code prettyprint linenums=1">
 class Count{
    public static int c =1;

    synchronized void disp(){    //method with synchronization
       for(int i=0; i&lt;3; i++)
        System.out.println("Count value: "+(c++));
    }
}

class A extends Thread{
    Count ca;
    A(Count obj){
        ca =obj;
    }
    public void run(){
        ca.disp();
    }
}

class B extends Thread{
    Count cb;
    B(Count obj){
        cb=obj;
    }
    public void run(){
        cb.disp();
    }
}

class Test{
    public static void main(String[] args) {

        Count obj = new Count();

        A oba = new A(obj);
        B obb = new B(obj);

        oba.start();
        obb.start();
    }
}
                </pre>

                <h4>Output:</h4>
                <pre class="output">
Count value: 1
Count value: 2
Count value: 3
Count value: 4
Count value: 5
Count value: 6     </pre>

                <p>As you can see by using <b>synchronized</b> keyword the count value is printed in sequence.</p>
                <br><br>








                <div class="next-prev">

                    <a href="./java-creating-threads.php" class="f-left">prev</a>
                    <a href="./java-fundamentals-of-exception.php" class="f-right">next</a>
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
