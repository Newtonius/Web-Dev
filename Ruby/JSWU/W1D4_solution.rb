# Rubyify
# ----------------------------------------
# Write a function that turns regular sentences into (really bad and
# super long) ruby method names.

def rubyify(sentence)
  sentence.downcase.gsub(" ", "_").delete(".?")
end

## Discussion Topics
#   * What does the gsub method do? What are it's parameters?

#   * What does the argument ".?" tell the delete method to do?



# -----------------



# Key-Value Swap
# ----------------------------------------
# Write a method, #key_value_swap, that accepts a hash as an argument and
# returns a new hash with all the key / value pairs swapped. Do not use Hash#invert.

def key_value_swap(hash)
  hash.map { |k, v| v = k; k = v; }
end

puts key_value_swap({a: :b, c: :d, e: :f}) == {b: :a, d: :c, f: :e}
puts key_value_swap({1 => "string"}) == {"string" => 1}
puts key_value_swap({a: :a, 1 => 1}) == {a: :a, 1 => 1}




## Discussion topics:
#   * How are the {} braces on line 23 different from a do ... end block?
#     * When do we prefer one style over the other?
#   * Can you think of a way to do this in one line?
