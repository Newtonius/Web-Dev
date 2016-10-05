# Longest Segment
# ----------------------------------------
# Write a method, #longest_segment, that accepts two strings as arguments. The
# first is a long string of characters, and the second is a delimeter. Split the
# first string by the delimeter and return the longest segment.

def longest_segment(input, delimeter)
  split_array = input.split(delimeter)
  split_array.max_by { |segment| segment.length }
end

## Discussion topics:
#   * What type of object can the #split method be called on?
#   * What type of object does the #split method return?



# -----------------



# Next Prime
# ----------------------------------------
# Write a method, #next_prime, that accepts an integer, n, as an argument
# and returns the smallest prime number that is greater than n

def next_prime(n)
  current_number = n + 1
  loop do
    return current_number if is_prime?(current_number)
    current_number += 1
  end
end

def is_prime?(n)
  (2...n).each do |possible_divisor|
    return false if n % possible_divisor == 0
  end
  true
end

## Discussion topics:
#   * Why did we define an is_prime? method?
#   * What does loop do?
