def hasVowel?(word)
# Determine if vowel exists in the word
 vowels = ["a","e","i","o","u"]
	if vowels.include?(word[0])
		true
	else
		false
	end
end

def translate(word)

	split_string = word.split(" ")
	length = split_string.size
	sentence = []

	# Check if word starts with vowel or consonant
	# if length of word (which was split in an array) is greater than 1, then continue
	if  length > 1
		sentence = split_string.collect {|phrase| translate(phrase)}
		return sentence.join(" ")
	end

	if hasVowel?(word)==true
		word = word + "ay"
	else
	 consonant(word)
	end
end

def consonant(word)
  # 1, 2, or 3 letter positions
	letter_1 = word[0]
	letter_2 = word[1]
	letter_3 = word[2]

	# Determine if vowel exists at 1,2, and/or third place of the string
	# Move first THREE letters to back and add 'ay'
	if hasVowel?(letter_1)==false && ((hasVowel?(letter_2)==false && hasVowel?(letter_3)==false) || (letter_2=="q" && letter_3=="u") )
		new_string = word[0..2]
		word[3..-1] + new_string + "ay"

  # Move first TWO letters to back and add 'ay'
	elsif (hasVowel?(letter_1)==false && hasVowel?(letter_2)==false) || (letter_1=="q" && letter_2=="u")
			new_string = word[0..1]
			word[2..-1] + new_string + "ay"

	# Move FIRST letter to back and add 'ay'
	else
		word=word[1..-1] + letter_1 + "ay"
	end
end
