<!-- The array() function is used to create an array.

	In PHP, there are three types of arrays:

    Indexed arrays - Arrays with numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays

 -->



 <!-- The difference is that print_r recursively prints an array (or object, 
 but it doesn't look as nice), showing all keys and values. echo does not, 
and is intended for scalar values. print_r prints 
human-readable information about a variable, while echo is used only for strings.
 -->


<?php 

//Loop through and print all the values of an indexed array:

$cars = ["Volvo","BMW","Toyota"];
$arrlength= count($cars);

 for($x = 0; $x < $arrlength; $x++ )
	  {
		  echo $cars[$x];
		  echo "<br>";
	  }


//Loop through and print all the values of an associative array:
 
$age=["Peter"=>"35","Ben"=>"37","Joe"=>"43"];

foreach($age as $x =>$x_value)
  {
  	echo "Key=" . $x . ", Value=" . $x_value;
  	echo "<br>";
  }


//two dimesonal array
$cars=array
  (
	  array("Volvo",100,96, 100),
	  array("BMW",60,59, 500),
	  array("Toyota",110,100, 300)
  );

  echo $cars[0][0] . ": ordered: " .$cars[0][1]. " Sold: "  .$cars[0][2]. ":  available:"  .$cars[0][3]. "<br>";
  echo $cars[1][0] . ": ordered: " .$cars[1][1]. " Sold: "  .$cars[1][2]. ":  available:"  .$cars[1][3] ."<br>";
  echo $cars[2][0] . ": ordered: " .$cars[2][1]. " Sold: " .$cars[2][2]. ":   available:"  .$cars[2][3] ."<br>";




//PHP array_change_key_case() Function
//
//Definition and Usage

// The array_change_key_case() function changes all keys in an array to lowercase or uppercase.
// Syntax
//array_change_key_case(array, case)

$book = ['ade'=>'ade is a boy', 'bola'=>' bola is good', 'emaa'=>'ade mighty'];

print_r( array_change_key_case($book, CASE_UPPER)). "<br>";	


// Example

// If two or more keys will be equal after running array_change_key_case() (e.g. "b" and "B"), the latest array will override the other:

$pets = array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");

print_r(array_change_key_case($pets,CASE_LOWER));



?>

//
<h3>PHP array_chunk() Function</h3>

<!-- Definition and Usage

The array_chunk() function splits an array into chunks of new arrays.
Syntax
array_chunk(array, size, preserve_key)
Parameter Values
Parameter 	Description
array 	Required. Specifies the array to use
size 	Required. An integer that specifies the size of each chunk
preserve_key 	Optional. Possible values:

    true - Preserves the keys
    false - Default. Reindexes the chunk numerically

Technical Details
Return Value: 	Returns a multidimensional indexed array, starting with zero, with each dimension containing size elements
 PHP Version: 	4.2+ -->

<?php
	
	$cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel","ade", "ade2", "ade3"];

	print_r(array_chunk($cars,3));
?> 

<!-- Split an array into chunks of two and preserve the original keys:
 -->

<?php

	$age = ["Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50"];

	print_r(array_chunk($age,2,true));


?> 



<h4>PHP array_column() Function</h4>

<!-- Definition and Usage

The array_column() function returns the values from a single column in the input array.
Syntax
array_column(array, column_key, index_key)
Parameter Values
Parameter 	Description
array 	Required. Specifies the multi-dimensional array (record-set) to use. As of PHP 7.0, this can also be an array of objects.
column_key 	Required. An integer key or a string key name of the column of values to return. This parameter can also be NULL to return complete arrays (useful together with index_key to re-index the array)
index_key 	Optional. The column to use as the index/keys for the returned array
Technical Details
Return Value: 	Returns an array of values that represents a single column from the input array
PHP Version: 	5.5+
 -->

 <?php
// An array that represents a possible record set returned from a database
$a = [
  [
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ],

  [ 
  	'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ],

  [
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  ]
];

$last_names = array_column($a, 'last_name');

print_r($last_names);
?> 
<br>


<!-- Example

Get column of last names from a recordset, indexed by the "id" column: -->

 <?php
// An array that represents a possible record set returned from a database
$a = [
 [ 
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ],

  [
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ],

  [
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  ]
];


$first_names = array_column($a, 'first_name', 'id');

print_r($first_names);
?> 
