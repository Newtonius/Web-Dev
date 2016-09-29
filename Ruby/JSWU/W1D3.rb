# Vowel Censor
# ----------------------------------------
# Write a method, #vowel_censor that takes in a string and replaces
# any vowels in it with an "X". Do not modify the original string.

def vowel_censor(string)
  vowels = ['a','e','i','o','u'] # Array of vowels
  final_word = [] # New string for final output
  string.each_char do |c| # Itterate through original string
      if vowels.include?(c.downcase) # If a character (x) is detected that equates to an element in vowels array
        final_word << "X"
      else
        final_word << c
      end
  end
    final_word.join()

end

puts "---------Vowel Censor----------"
puts vowel_censor("Let's order a pizza") == "LXt's XrdXr X pXzzX"
puts vowel_censor("Nitwit, blubber, oddment, tweak") == "NXtwXt, blXbbXr, XddmXnt, twXXk"
puts vowel_censor("Supercalifragilisticexpialidocious") == "SXpXrcXlXfrXgXlXstXcXxpXXlXdXcXXXs"



# ----------------- Switch Roles!



# Print 10
# ----------------------------------------
# Write a method, #array_print_10, that puts the numbers 0 - 9 using an array
# and the each method

def array_print_10
  puts "--- Array Print ---"
  print [0,1,2,3,4,5,6,7,8,9].to_a
  puts ""
  [0,1,2,3,4,5,6,7,8,9].each {|n| print n, " "}
end

# Write a method, #range_print_10, that prints the numbers 0 - 9 using a range
# and the each method

def range_print_10
  puts ""
  puts "--- Range Print ---"
  print (0..9).to_a
  puts ""
  (0..9).each {|n| print n, " "}
end

# Write a method, #integer_print_10, that prints the numbers 0 - 9 using an integer
# and the times method

def integer_print_10
  puts ""
  puts "--- Integer Print ---"
  print 9.times { |n| print n, " "} # Times method
end

array_print_10
range_print_10
integer_print_10


# ----------------- Read the solutions!
