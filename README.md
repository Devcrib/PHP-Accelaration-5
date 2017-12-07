# PHP-Accelaration-5
Introduction to functional programming

Introduction to PHP Functional Programming



Before the digging deeply into what PHP functional programming is all about, a short understaning of function, functional programming and functional programming is needed to understand PHP functional programming.

Function are "self contained" modules of code that accomplish a specific task. Function in summary take  in data, process it and return a result. The most interesting thing about function is that it can be used over and over again and function can be embedded into another function.

Function Programming ua all about writing pure function and  removing hidden inputs and outputs as far as we can, so that as much of our code as possible just describes a relationship between inputs and outputs. 

PHP functional programming has some characteristics that makes it support functioning programming like using lambda or anonymous function which made it easy for function to be declared inside a class and to access the function, the $this is used, for example 

    class Example {
    	public $gate;
      /** 
       * Code snippet
      */
      public function callingBot() {
        	return $this->gate //an anonymous calling of $gate
      }
    }


