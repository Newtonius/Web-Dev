# Define a method, #remove_vowels, that accepts a string as an argument. This method should
# return a new string with all the vowels removed from the old string

=begin
    input: string
    output: strng (no vowels)

    1) create an array of vowels
    2) create an empty string
    3) loop over input string
        3a) if char is a vowel, ignore it. Else add it to empty string

=end

def remove_vowels(string)
    new_string = "" # <-- will be our output
    vowels = %w(a e i o u A E I O U) # == ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U']
    # vowels_string = 'aeiouAEIOU'

    string.each_char do |char| # << pipes ( |x| ) x is the char in "string" (i.e. "s", then "t"...)
                                # 'x' can be whatever (i.e. "potato") but name it something that makes
                                # sense to you and other coders
        new_string += char unless vowels_string.include?(char) # unless is opposite of 'if'
    end

    # -----------------------------------------------------------------

    # i = 0
    # while i < string.length
    #     new_string += string[i] unless vowels_string.include?(string[i])
    #     i += 1
    # end


    # ---------------------------------------------------

    # i = 0
    # while i < string.length
    #     new_string += string[i] unless string[i] == 'a' ||
    #                                    string[i] == 'e' ||
    #                                    string[i] == 'i' ||
    #                                    string[i] == 'o' ||
    #                                    string[i] == 'u'
    #     i += 1
    # end

    new_string # <-- return new_string
end

puts "------Remove Vowels------"
puts remove_vowels("abcde") == "bcd"
puts remove_vowels("icy") == "cy"
puts remove_vowels("voul") == "vl"
