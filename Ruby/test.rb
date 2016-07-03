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
