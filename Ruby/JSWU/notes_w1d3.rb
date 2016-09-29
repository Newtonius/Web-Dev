# Two-Sum

# Define a method, #two_sum, that accepts an array and a target sum (integer) as arguments.
# The method should return true if any two integers in the array sum to the target.
# Otherwise, it should return false. Assume the array will only contain integers.


# 'Each' solution
=begin
def two_sum(array, target)
  array.each_with_index do |el1, idx1|
    array.each_with_index do |el2, idx2|
      # Skip this check if second index is less than first index.
      # We've already checked those!
      if idx2 <= idx1
        next
      end
      # Indices can't be equal AND the two elements must sum to target
      if idx1 != idx2 && el1 + el2 == target
        return true
      # This would return false as soon as one if statement failed!
      # else
      #   return false
      end
    end
  end

  # It's conventional to add an extra line break before your final
  # return statement.
  false
end
=end

# 'While' solution
def two_sum(array, target)
  idx1 = 0
  while idx1 < array.length
    # Start with the element immediately following idx1's element.
    # Optimization!!!!
    idx2 = idx1 + 1
    while idx2 < array.length
      return true if array[idx1] + array[idx2] == target
      idx2 += 1
    end
    idx1 += 1
  end

  false
end

puts "------Two Sum------"
# Left side evaluates to true or false, and we check if they evaluated
# as expected. These should all print true if your method is working.
puts two_sum([1,2,3,4,5,6], 8) == true
puts two_sum([1,2,3,4,5,6], 18) == false
puts two_sum([1,3,6], 6) == false
puts two_sum([1,8,2,1], 0) == false
