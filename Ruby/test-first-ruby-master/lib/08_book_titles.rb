class Book

  def title()
	   @book_title
	end

	def title=(title)
	   @book_title = capitalize(title)
	end

	def capitalize(title)
    conj_prep = ['a', 'an', 'and', 'in', 'of', 'the']
    final_title = []

	  x = title.split(" ") # Grab the incomming param title and split each word
	  x.each do |x| # Itterate through the x array of the title words
        # Compare x array with conj_prep array, capitalize any words not in conj_prep array.
        x.capitalize! unless conj_prep.include?(x)
        final_title << x
	  end

    # Capitalize first character in the final_title array
    final_title[0].capitalize!
		return final_title.join(" ")
	end
end
