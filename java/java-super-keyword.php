<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java super keyword | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,super,keyword,constructor,methods,variable">

    <meta name="Description" content="super is a keyword in java-used to call super class constructor,Accessing super class members,super() is used as the first line of subclass constructor to pass values to the super class constructor,to invoke super version of method super keyword is used.">

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
                <h1><span class="coral">super</span> keyword in Java</h1>
                <p>super is a keyword in java which is refers to the parent class objects.</p>
                <br>
                <p>It's uses are</p>
                <ul class="bullets">
                    <li>calling super class constructor</li>
                    <li>Accessing super class members</li>
                </ul>
                <br>
                <h3>Calling super class Constructor:</h3>

                <p>In case of inheritance sometimes it is necessary to initialize super class fields when creating subclass objects.</p>
                <br>
                <p>In order to do that <span class="coral">super()</span> is used as the first line of subclass constructor to pass values to the super class constructor.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  SubClassConstructor(arg1,atg2,arg3,...){
  super(arg1,arg2);
  ...
  }          </pre>
                <p>This syntax passes arg1, arg2 to the super class constructor. </p>
                <br><br>

                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
  int n1;
  A(int x){  //super class constructor
      n1=x;
  }
}
class B extends A{
  int n2,n3;
  //subclass constructor
  B(int x,int y,int z){
      //invoking super class constructor 
      super(x);  
      n2=y; n3=z;
  }
  void display(){
   System.out.println("Addition of n1,n2,n3 is: "+(n1+n2+n3));
  }
  public static void main(String[] args) {
      B obj = new B(3, 4, 5);
      obj.display();
  }
}      </pre>

                <h4>Output:</h4>
                <pre class="output">
  Addition of n1,n2,n3 is: 12   </pre>

                <p>Here, sub class constructor takes three arguments &amp; using super keyword passes one argument to the super class constructor and initializes the parent class field.</p>
                <br>
                <h3>Accessing Super class Members:</h3>
                <p><span class="coral">super</span> can also be used to access parent class variables &amp; methods.</p>
                <br>
                <h3>Accessing super class variable:</h3>
                <p>When both super &amp; subclass contains variable with same name then in order to access super class variable we need to use <span class="coral">super</span> keyword.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  super.field;         </pre>

                <br>

                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
  String name="Class A";
}
class B extends A{
  String name ="Class B";
  void display(){
                          //accessing super class variable
      System.out.println("super class name: "+super.name);
      System.out.println("sub class name: "+name);
  }
  public static void main(String[] args) {
      B obj = new B();
      obj.display();
  }
}         </pre>

                <h4>Output:</h4>
                <pre class="output">
  super class name: Class A
  sub class name: Class B      </pre>

                <p>Here, super class name is accessed by using <span class="coral">super</span> keyword without super it will always access sub class version of name variable.</p>
                <br><br>
                <h3>Accessing super class Method:</h3>
                <p>When both super &amp; sub class contains method with same name and signature then to invoke super version of method <span class="coral">super</span> keyword is used.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  super.methodName();    </pre>

                <br>

                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class A{
  void method(){
      System.out.println("Method A");
  }
}
class B extends A{
  void method(){
      System.out.println("Method B");
  }
  void display(){
      super.method();  //invoking super class method
      method();      
  }
  public static void main(String[] args) {
     B obj = new B();
     obj.display();
  }
}         </pre>

                <h4>Output:</h4>
                <pre class="output">
  Method A
  Method B        </pre>

                <p>Here, super class method invoked by using super keyword.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-inheritance-basics.php" class="f-left">prev</a>
                    <a href="./java-method-overriding.php" class="f-right">next</a>
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
