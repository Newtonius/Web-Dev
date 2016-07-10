def echo(word)
  "#{word}"
end

def shout(word)
  "#{word}".upcase
end

def repeat(word, rep = 1)

end

def start_of_word(word, s)
  word[0...s]
end

def first_word(phrase)
  phrase.partition(" ").first
end

def titleize(phrase)
  small_words = ["and", "the", "over"]
  phrase.split(" ").map { |word| small_words.include?(word) ? word : word.capitalize }.join(" ") if phrase.partition(" ").first == 
end

first_word("Hello W")
