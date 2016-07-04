# Single line comments

=begin
puts "Hello World"
print "test"
puts "2 + 2 is eqaul to ", 2 + 2
puts 10/3
puts 10.0/3

Shit, everything in Ruby is an object
puts 2.+(2)
    is just the same as
puts 2 + 2

=end

# Creating an object in Ruby : Person

class Person
  attr_accessor :name, :age, :gender
end

person_instance = Person.new

person_instance.name = "Robert"
person_instance.age = 21
person_instance.gender = "Male"

puts person_instance.name
puts person_instance.age
puts person_instance.gender

x = 10
puts x * 2

=begin
THIS IS CAN BE PLACED IN AN INHERITANCE STURCTURE UNDER
A PET CLASS

class Cat
  attr_accessor :name, :age, :gender, :color
end
class Dog
  attr_accessor :name, :age, :gender, :color
end
class Snake
  attr_accessor :name, :age, :gender, :color
end
=end

# INHERITANCE

# Parent
class Pet
  # Undefined Methods
  attr_accessor :name, :age, :gender, :color
end
# Subclasses
class Cat < Pet
end
class Dog < Pet
  # Defined Methods
  def bark
    puts "Woof!"
  end
end
class Snake < Pet
  attr_accessor :length
end

snake = Snake.new
snake.name = "Sammy the snake"
snake.length = 200

lassie = Dog.new
lassie.name = "Lassie"
lassie.age = 12
lassie.bark
#lassie.length = 10 DOESN'T WORK BECAUSE THERE IS NO 'length' in Dog class

rex = Dog.new
rex.bark

# Shows what class the variable 'rex' belongs too
puts rex.class
# Same for any instance
puts 2.class

# To show 'puts' is a Kernal method, you can simply write
Kernel.puts "puts is a Kernal method!"
# Or
Kernel.puts("Hello, world!")
Kernel.puts "Hello, world!"
puts("Hello, world!")
puts "Hello, world!"
# All these work because everything is an OBJECT!

=begin
Different methods to use on string classes
"Test" + "Test" = TestTest
"Test".capitalize = Test
"Test".downcase = test
"Test".chop = Tes
"Test".next = Tesu
"Test".reverse = tseT
"Test".sum = 416
"Test".swapcase = tEST
"Test".upcase = TEST
"Test".upcase.reverse = TSET
"Test".upcase.reverse.next = TSEU
=end

age = 25
w = "test"
z = "string"
puts "Success!" if w + z == "teststring"
puts "You are 24!" if age == 24
5.times{puts "Test"}
print "abc" * 5

# Convertions
a = 10
b = 3
c = 5.75
puts a.to_f / b.to_f # To float
puts c.to_i # To integer

# Multi line string, YOU CAN USE ANY DELIMETER!
d = %q{This is a test
of the multi
line capabilities}
# Any DELIMETER example
e = %q$Multi line works
between any symbols!$

puts "x" > "y" # returns false
puts "x" < "y" # returns true

# Loops do ___ end or {} can be delimeters
5.times do print "Loop test 1 " end
5.times {print "Loop test 2 "}
1.upto(5) { print "Loop test 3 "}
10.downto(5) {print "Loop test 4 "}
0.step(50,5) {print "Loop test 5 "}
# Incrementing a variable through a loop
1.upto(5) { |number| print "Number ", number, " "}

# The ? is supposed to show the position of either 'x' or 'g' in the ACII table.
puts ?x, " ", ?g
puts 120.chr # Inversion of ?, tells what char is at 120

# INTERPOLATION
f = 10
g = 20
puts "#{f} + #{g} = #{f + g}" # outputs 10 + 20 = 30
animal = "cat"
puts "The #{animal} in the hat."
puts "It's a #{"bad " * 5} world"
puts f.to_s, g.to_s # Converts integers to string

# Using methods on string classes
puts "Testing the length of a string".length
puts "Turning everything uppercase".upcase

# SUBSTITUTION
puts "foobar".sub('bar','foo') # Changes 'bar' with 'foo' prints 'foofoo'
# Multiple susbstitution
puts "Changing all I's in this with p".gsub('i','p') # Change 'i' with 'p'
# Replace to a certain ammount of characters
note = "Replacing a specific amount of characters"
puts note.sub(/^..../, 'Hello') # Replaces to 4 characters from front
puts note.sub(/....$/, 'Hello') # Replaces 4 from back

# ITTERATING through a string
stringTest = "|Individually or in groups|"
stringTest.scan(/./) {|letter| print letter, " "} # Prints each letter individually
puts " "
stringTest.scan(/../) {|letter| print letter, " "} # Prints two letters together including WHITESPACE
puts " "
stringTest.scan(/\w\w/) {|letter| print letter, " "} # Prints in couples, IGNORES WHITESPACE
puts " "
=begin
^ Anchor for the beginning of a line
$ Anchor for the end of a line
\A Anchor for the start of a string
\Z Anchor for the end of a string
. Any character
\w Any letter, digit, or underscore
\W Anything that \w doesn’t match
\d Any digit
\D Anything that \d doesn’t match (non-digits)
\s Whitespace (spaces, tabs, newlines, and so on)
\S Non-whitespace (any visible character)
* -> Match zero or more occurrences of the preceding character, and match as many
as possible.
+ -> Match one or more occurrences of the preceding character, and match as many
as possible.
*? -> Match zero or more occurrences of the preceding character, and match as few
as possible.
+? -> Match one or more occurrences of the preceding character, and match as few
as possible.
? -> Match either one or none of the preceding character.
{x} -> Match x occurrences of the preceding character.
{x,y} -> Match at least x occurrences and at most y occurrences.
=end
# Ex; Extract all number values only (the '+' grabs all digits of a number)
"The car costs $1000 and the cat costs $10".scan(/\d+/) {|number| print number, " "}
puts " "
# And you can specifically scan for same occurrences or through a range
"Look for any vowels in string".scan(/[aeiou]/){ |letter| print letter, " "}
puts " "
"Look for any vowels in string".scan(/[l-z]/){ |letter| print letter, " "}
puts " "

# MATCHING operator
puts "Print if condition has vowels" if "this is a test"  =~ /[aeiou]/
puts "Print if condition has numbers" if "this is a test"  =~ /[0-9]/
# Can also use the '.match()' method
puts "Print if condition has vowels" if "this is a test".match(/[aeiou]/)


# ARRAYS
first_array = [1, 2, 3, 4]
puts first_array[2]
puts first_array[2] + 1
second_array = ["One", "two", "three", "four"]
second_array[2] = "fish " * 3
puts second_array[2]
# blank arrays can be filled like java arraylists
blank_array = []
blank_array << "Word" # or the equivalent: blank_array.push("Word")
blank_array.push("play")
blank_array.push("fun")
puts blank_array.pop # Pop removes the most recently inserted index and its data
puts blank_array.pop
puts blank_array.length # Get length of Array
# Array methods
second_blank_array = ["Word", "Play", "Fun"]
puts second_blank_array.join
puts second_blank_array.join(', ')
# Splitting strings into ARRAYS and join them with ', '
puts "This is a test".scan(/\w/).join(',')
# Splits a string by a specified element.
puts "Here we go. We're gonna split. By periods.".split(/\./).inspect
puts "Splitting string by spaces.".split(/\s+/).inspect


# ARRAY ITTERATION
[1, "test", 2, 3, 4].each {|element| print element.to_s + "X "}
puts " "
[1, 2, 3, 4].collect {|element| print element * 2, " "} # Convert elements on the fly with 'collect'
puts " "
# While loop
third_array = [1, "while", 2, "loop", 3, 4]
i = 0
while (i < third_array.length)
  print third_array[i].to_s + "X "
  i += 1
end
puts ""

# USING 'p' instead of 'puts' !IMPORTANT!
p "You can use 'p' instead of 'puts' for debugging purposes!"

# COMBINING ARRAYS
array_one = [1, 2, 3, 4]
array_two = ["Adding", "two", "arrays", "together"]
array_consolidate = array_one + array_two # ADDING ARRAY ELEMENTS
p array_consolidate
# Removing similar elemnts in a array
array_three = [1, 2, 3]
array_remove = array_one - array_three # REMOVING ARRAY ELEMENTS IF SIMILAR
p array_remove


# CHECKING INSIDE ARRAYS
h = []
puts "h array is EMPTY" if h.empty? # Check if EMPTY
j = [1, 2, 3, 4]
# Check for element
print "Does j array have an 'X'? " + j.include?("X").to_s
puts ""
print "Does j array have a 3? " + j.include?(3).to_s
puts ""
# Grab first or last element in array
print j.first, " ", j.last
puts ""
# Joining a certain amount of elements from beginning or end of the array
puts j.first(2).join('-')
# Reversing array order
print j.reverse, " "
puts ""


# HASHES; like arrays but have a different storage format and a way to define each element
dictionary = { 'cat' => 'feline animal', 'dog' => 'canine animal' }
puts dictionary.size
puts dictionary['cat'] # Prints definition give to 'cat'
