def echo(word)
  "#{word}"
end

def shout(word)
  "#{word}".upcase
end

def repeat(word, rep = 2)
  ([word] * rep).join(" ")
end

def start_of_word(word, s)
  word[0...s]
end

def first_word(phrase)
  phrase.partition(" ").first
end

def titleize(phrase)

  # Doesn't capitalize the first letters and the small words
  if phrase.partition(" ").first != 'the'
    small_words = ["and", "over"]
    first = phrase.split(" ").map { |word| small_words.include?(word) ? word : word.capitalize }.join(" ")
  else
    small_words = ["and", "over", "the"]
    first = phrase.split(" ").map { |word| small_words.include?(word) ? word : word.capitalize }.join(" ")
    first.slice(0,1).capitalize + first.slice(1..-1)

    # The method above allows me to keep all the nouns capitalized while this method:
    # first.chomp
    # first.capitalize!
    # Capitailizes only the first word but lowercases the rest of the string [do not use then]
  end
end
