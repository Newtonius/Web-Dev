# Using comments, write out an approach in pseudocode for each of these first.

# Write a function that given an array, returns another array with each of the numbers multiplied by two. Don't change the original array, make sure you construct a copy!
def array_times_two(array)

  if array[0] < 3
    # .map! takes the original array and modifies it.
    new_array = array
    new_array.map! {|a| a*2}
  else

  end
end

# Tests — these should all spit out true!
puts "\nArray times two:\n" + "*" * 15 + "\n"
puts array_times_two([1, 2, 3]) == [2, 4, 6]
puts array_times_two([0, -1, -2]) == [0, -2, -4]
dont_change_this = [3, 4, 5]
array_times_two(dont_change_this)
puts dont_change_this == [3, 4, 5]

# *********************************************

# Write a function that given an array, now CHANGES each of the numbers to be twice as big. This should mutate the original array!
def array_times_two!(array)
  array.map! {|a| a*2}
end

# Tests
puts "\nArray times two!:\n" + "*" * 15 + "\n"
puts array_times_two!([1, 2, 3]) == [2, 4, 6]
change_this = [6, 7, 8]
array_times_two!(change_this)
puts change_this == [12, 14, 16]

# *********************************************

# Write a function that given an array, returns another array of only the unique elements. I.e., return a version without duplicates.
def uniq(array)
  # & Returns a new array containing elements common to the two arrays, excluding any duplicates.
  array & array
end

# Tests
puts "\nUniq:\n" + "*" * 15 + "\n"
puts uniq([5, 5, 5, 5]) == [5]
puts uniq([1]) == [1]
puts uniq([1, 2, 1, 3, 3]) == [1, 2, 3]

# *********************************************

# A Slippery Number is a number is that has 3 as a factor or has 5 as a factor, but does *not* have both as factors. For example, 6 is a Slippery Number, but 30 is not. Write a function that given an N, returns an array of the first N Slippery numbers.

# You'll want to write a helper function that helps you determine which numbers are Slippery.

def slippery_numbers(n)
  slippery_array = []
  number = 1 # Number to check that'll go into the array
  until slippery_array.length == n
    slippery_array << number if is_slippery?(number) # Only put in the number if it meets the condition
    number += 1
  end
  slippery_array
end

def is_slippery?(number)
  (number % 3 == 0 || number % 5 == 0) && number % 15 != 0
  # if it is both evenly divisble by 3, 5, but not by 15 since 15 has both 3 and 5 (it should only be divisible by 3 or 5)
end

# Tests
puts "\nSlippery numbers:\n" + "*" * 15 + "\n"
puts slippery_numbers(1) == [3]
puts slippery_numbers(2) == [3, 5]
puts slippery_numbers(7) == [3, 5, 6, 9, 10, 12, 18]

# *********************************************

# Write a function that finds whether any two elements in the array sum to 0. If it does, return true; else, return false.
def two_sum_to_zero?(array)
  array.each_with_index do |number1, index1| # Itterate at the first index
    array.each_with_index do |number2, index2| # Itterate through each index comparing it to the first got index from the first loop
      return true if (number1 + number2 == 0) && index1 != index2
    end
  end
  false
end

# Tests
puts "\nTwo sum to zero?:\n" + "*" * 15 + "\n"
puts two_sum_to_zero?([4, 2, 6]) == false
puts two_sum_to_zero?([-2, 5, 12, -3, 2]) == true
puts two_sum_to_zero?([0, 5]) == false

# *********************************************

# A magic number is a number whose digits, when added together, sum to 7. For example, the number 34 would be a magic number, because 3 + 4 = 7. Write a function that finds the first N many magic numbers.

# You'll want to write a helper function that checks whether a given number is a magic number.
# Reminder: you can convert an integer to a string using #to_s. You can convert a string back to an integer using #to_i.

def magic_numbers(count)

end

def is_magic_number?(number)
end

# Tests
puts "\nMagic numbers:\n" + "*" * 15 + "\n"
puts magic_numbers(1) == [7]
puts magic_numbers(3) == [7, 16, 25]
puts magic_numbers(20) == [7, 16, 25, 34, 43, 52, 61, 70, 106, 115, 124, 133, 142, 151, 160, 205, 214, 223, 232, 241]
