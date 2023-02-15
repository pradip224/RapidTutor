<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Inner, Nested Inner, Anonymous Inner and Method Inner Class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,inner,class,nested,anonymous,method">

    <meta name="Description" content="Inner class means one class is wrapped inside as a member of outer class,Inner class types- Nested,Anonymous,Method Inner Class.Nested Inner Classes are direct member of some outer class.Anonymous inner classes are with no name associated to them.Inner classes can be inside method of outer class.">

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




        <!--HEADER-->
        <div class="wrapper">


            <!--MAIN-->

            <div class="main">
                <br>
                <h1>Inner Class in Java</h1>

                <p>Inner class means one class is wrapped inside as a member of outer class.</p>
                <br>
                <p>Inner classes can be a</p>
                <ul class="bullets">
                    <li>Nested Inner Class</li>
                    <li>Anonymous Inner Class</li>
                    <li>Method Inner Class</li>
                </ul>
                <h2>Nested Inner Class:</h2>
                <br>
                <p><span class="bold">Nested Inner Classes</span> are direct member of some outer class.</p>
                <br>
                <h4>Program:</h4>
                <p>Here, we create a Nested Inner Class &amp; access inner class members.</p>
                <br>
                <pre class="code prettyprint linenums=1">
class Outer{        //Outer Class
  void display(){
      System.out.println("Outer Method");
  }
  class Inner{        //Nested Inner Class
      void display(){
          System.out.println("Inner Method");
      }
  }
  public static void main(String[] args) {
      Outer o = new Outer();          //Outer Object
      Outer.Inner obj = new Outer().new Inner(); //Inner Object
      o.display();
      obj.display();
  }
}       </pre>
                <h4>Output:</h4>
                <pre class="output">
  Outer Method
  Inner Method       </pre> <br>

                <p>Here, we created Inner Object with the reference of Outer Object (because it is instance member) &amp; able to access that Inner method.</p>
                <br><br>
                <h2>Anonymous Inner Class:</h2>
                <br>
                <p><span class="bold">Anonymous inner class</span> are the inner classes with no name associated to them. They must be of a parent type means they should have a base class and can override methods of the parent class.</p>
                <br><br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Parent{
  void display(){
    System.out.println("Parent Class");
  }
}
class A{
  static Parent obj = new Parent(){ //anonymous class of parent type 
          void display(){        //overridden method
              System.out.println("Anonymous Class");
          }
  };
  public static void main(String[] args) {
      obj.display();
  }
}     </pre>

                <h4>Output:</h4>
                <pre class="output">
  Anonymous Class    </pre>

                <br>

                <p>Here, "class A" has the anonymous class which base classed the "class Parent" &amp; overrides the display() method of the parent class.</p>

                <p>The anonymous class object "obj" is a static member of "class A" so, we don't need to create object of "class A" to get access to the overridden display() method.</p>
                <br><br>
                <h2>Method Inner Class:</h2>

                <p>In java, Inner classes can be inside method of outer class.</p>
                <br>
                <h4>Program</h4>
                <br>
                <pre class="code prettyprint linenums=1">
class Outer{
   void method(){
       class Inner{  //class inside method
           void display(){
               System.out.println("Inner Method");
           }
       }
       Inner i = new Inner();  //Inner Object
       i.display();        //Inner method call
   }
   public static void main(String[] args) {
       Outer o = new Outer();  //Outer object
       o.method();            //Outer method call
   }
}        </pre>
                <h4>Output:</h4>
                <pre class="output">
  Inner Method      </pre>

                <br>

                <p>Here, Inner class is inside the Outer class method. The Inner class has its own display() method.</p>
                <br>
                <p>To call that display() method, the object of Inner class has been created inside the Outer method &amp; simultaneously has been called using that object. </p>
                <br><br><br>










                <div class="next-prev">

                    <a href="./java-static-class-members.php" class="f-left">prev</a>
                    <a href="./java-inheritance-basics.php" class="f-right">next</a>
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
