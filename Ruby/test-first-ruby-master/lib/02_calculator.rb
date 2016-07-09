def add(first, second)
  first + second
end

def subtract(first, second)
  first - second
end

def sum(first_array)
  first_array.inject(0) {|num, x| num + x}
end
