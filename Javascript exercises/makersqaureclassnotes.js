var test = "jump";

myFunction("Letter A", "Letter B", 10);

var myFunction = function(a, b, c) {
		console.log("It's reading in the variable function = ", a, b, c);
}

// Function are first class citizens
function myFunction(a, b, c) {
	console.log("It's reading in the hoisted function that is declared");
}

var anotherFunction = myFunction;
anotherFunction("one","two","three");



element.addEventListener("click", function() {
	console.log('element called!');
});
// Above is the same tjhing as saying
var logCallElement = function() {
		console.log('element called!');
}

var partialAdd = function(num1) {
	console.log("Num 1 is ", num1)
	return function(num2) {
		console.log("Num 2 is ", num2)
		return num1 + num2;
	};
};
var partialAddPart2 = partialAdd(5);
partialAddPart2(10);


//Callback with annonymous functions
var ifElse = function(condition, isTrue, isFalse) {
	if(condition) {
		isTrue();
	} else {
		isFalse();
	}
}
ifElse(true,
	function() { console.log(true); }, // Annonymous functions (has no reference)
	function() { console.log(false); }
);


// Defined and Annonymous functions
// Defined function, can be referenced later on
var showMessage = function() {
	console.log("Delayed message");
}
window.setTimeout(showMessage, 3000);

//Annonymous function, cannot be referenced later on
window.setTimeout(function() {
	console.log("Delayed message in Annonymous function")
}, 5000);


// Composing larger high-order function using call backs
var alphabet = ['a','b','c'];
alphabet.forEach(function(value, index, collection) {
	console.log(value + " is a letter!");
});

var nums = [10,20,30];
var map = function(collection, Callback) {
	var outPutArray = [];
	collection.forEach(function(element) {
			outPutArray.push(Callback(element))
	});
	return outPutArray;
}
var newCollection = map(nums, function(item) {
	return item + 10;
});
newCollection;


// Filters statements to delete elements that do not fill the condition; true
var numbers = [1,2,3,4,5,6,7,8,9,10];
numbers.filter(function(value) {
	return value % 2 ===0;	
});
var newArray = numbers;


// 
var balance = 1000;
var deposits = [100,200,300];
var total = deposits.reduce(function(a, b) {
	return a + b;
}, balance);
total;

var animals = ['ant', 'bat', 'cat'];
each = function(collection, iterator) {
	var outPutArray = [];
	collection.forEach(function(element) {
		outPutArray.push(iterator(element))
	});
};
each;