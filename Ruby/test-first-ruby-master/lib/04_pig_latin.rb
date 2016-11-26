
def translate(input)

	x= input.split(" ")
	l=x.size
	sentence=[]
	if  l > 1
		sentence=x.collect { |word|  translate(word)}
		return sentence.join(" ")
	end

	if vowel?(input)==true
		input = input+"ay"
	else
	 consonant(input)
	end
end

def vowel?(word)
# Determine if the word starts with a vowel
 vowels = ["a","e","i","o","u"]
	if vowels.include?(word[0])
		true
	else
		false
	end
end

def consonant(word)
  # Determine if the word has consonants at the 1, 2, or 3 letter. Or if 2 and 3 letter are sequentially q and u
	letter_1 = word[0]
	letter_2 = word[1]
	letter_3 = word[2]
	if vowel?(letter_1)==false && ((vowel?(letter_2)==false && vowel?(letter_3)==false) || (letter_2=="q" && letter_3=="u") )
		new_string = word[0..2]
		word[3..-1] + new_string + "ay"

	elsif (vowel?(letter_1)==false && vowel?(letter_2)==false) || (letter_1=="q" && letter_2=="u")
			new_string = word[0..1]
			word[2..-1] + new_string + "ay"
	else
		word=word[1..-1] + letter_1 + "ay"
	end
end
