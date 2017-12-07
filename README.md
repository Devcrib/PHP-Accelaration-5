

## Introduction to PHP Functional Programming

Before the digging deeply into what PHP functional programming is all about, a short understaning of function, functional programming and functional programming is needed to understand PHP functional programming.

*`What are functions`*
Functions are "self contained" modules of code that accomplish a specific task. Function in summary take  in data, process it and return a result. The most interesting thing about function is that it can be used over and over again and function can be embedded into another function.

*Function Programming* ua all about writing pure function and  removing hidden inputs and outputs as far as we can, so that as much of our code as possible just describes a relationship between inputs and outputs.

**Pure functions**

A function is said to be `pure` when it's free from side effect and does not change the value of an object outside itself, such as global or static variable and also does not have any I/O effects like writing into file, database and so on. All mathematical functions can be classified as `pure functions` such as *mt_rand(), rand(), str(), etc*. 

```php
$new = rand(0,999);
```



**Shared state**




**Mutation and Immutability**
Immutability is the behaviour that a value of a variable cannot after it has been declared or defined. In order to make a value Immutable, it must be define a `const`
```php
define('PATH','PROJECT_PATH');
```

In mutation, the value can be changed even it has been defined

**Side Effect**

Side effects are verboten. If a function modifies some state or has been an observable interaction with calling functions or outside world, it has a side effect even *echo* statement.

follow the link for code snippet: https://repl.it/@_emmathem/SideEffect

The function *$makeSquareEffect* has two elements: one that returns a value, and one that sends a value to the screen.

**Higher Order function** 
Higher Order functions are functions that can be used as input parameter in another function. One thing that is very important while using this function is the number of input from the higher function must be the same with the expected output.

```php
//setting the function as a variable
$call = function() {
  return 'Hello Devcrib';
};

//Function as a return type
function callSuper() {
  return function() {
    return "Welcome to Planet Nest";
  };
}

$callRob = callSuper();

//The function is set a parameter to display the above function
function showMessage($call) {
  echo $call(). "\n\n";
}

```

​	Repl.it link: 

**Referential Transparency**

 A function is said to be referential transparent when we can replace the function with its value without affecting the behaviour of the program. 

**Lambda and Closures**
This is part of the characteristics that makes it support functioning programming like using lambda or anonymous function which made it easy for function to be declared inside a class and to access the function, the **$this** is used, for example 

```php
class Example {
	public $gate;
  /** 
   * Code snippet
  */
  public function callingBot() {
    	return $this->gate //an anonymous calling of $gate
  }
}
```
**Closure**
Closure is another characteristics in PHP functional programming; is an anonymous function that can access variables imported from the outside scope without using any global variables. Theoretically, a closure is a function with some arguments closed by the environment when it is defined. Closures can work around variable scope restrictions in a clean way.

I will show you how closures is used to define a function to return a single filter function for `array_filter()`, out of a family of filter functions. 

```php
function getGreaterValue($val) {
  return function ($item) use ($val) {
    return $item > $val
  };
}

//Let us use the following number to test the function
$test = array(1,2,3,4,5,6,7);

//usin the function array_filter 
$output = array_filter($test, getGreaterValue(2))
  
 //generating the result
  
print_r($output);
```

```php
// the function return the $item less than the input 
Array (
  	[2] => 3
  	[3] => 4
  	[4] => 5
  	[5] => 6
  	[6] => 7
  )
```

**Recursion**
Recursion is also an important aspect of functional programming, mostly in imperative programming, we use `for` and `foreach` when we want to `loop` through or manipulate an array.

**Reference**

- https://www.sitepoint.com/functional-programming-and-php/
- https://www.liip.ch/en/blog/functional-programming-in-php

