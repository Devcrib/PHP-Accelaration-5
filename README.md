### Introduction to PHP Functional Programming



Before the digging deeply into what PHP functional programming is all about, a short understaning of function, functional programming and functional programming is needed to understand PHP functional programming.

Function are "self contained" modules of code that accomplish a specific task. Function in summary take  in data, process it and return a result. The most interesting thing about function is that it can be used over and over again and function can be embedded into another function.

*Function Programming* ua all about writing pure function and  removing hidden inputs and outputs as far as we can, so that as much of our code as possible just describes a relationship between inputs and outputs. 

PHP functional programming has some characteristics that makes it support functioning programming like using lambda or anonymous function which made it easy for function to be declared inside a class and to access the function, the **$this** is used, for example 

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

