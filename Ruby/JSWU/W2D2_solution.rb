# Pizza Slices
# ----------------------------------------
# You are cutting a gigantic pizza. Given the circumference of the pizza
# and the length of the crust of each slice, return the exact number
# (i.e. potentially including a partial slice up to three decimal places)
# of slices you can cut from that pizza.

def pizza_slices(circumference, crust_length)
  (circumference.to_f / crust_length).round(3)
end

## Discussion topics:
#   * What does the #to_f method do?
#   * How is an integer different from a float?
#   * What is 100 / 3 in ruby?



# -----------------



# String Sum
# ----------------------------------------
# Write a method, #string_sum, that accepts a string as an argument and returns
# the sum of the characters of that string. ie: a --> 1, b--> 2 .. z --> 26.
# Assume you have an input of only lower-case characters. You may want to define
# a helper method! (hint hint)

def string_sum(string)
  sum = 0
  string.each_char do |c|
    value = value_of(c)
    sum += value
  end
  sum
end

def value_of(character)
  letters = ('a'..'z').to_a
  letters.index(character) + 1
end

## Discussion topics:
#   * Why did we split up this solution into two methods?
#   * Why kind of object is created when we do this: ('a'..'z')
#   * Why do we add + 1 at the end of the value_of method?
#   * What does the each_char method do? What kind of objects does it operate on?
