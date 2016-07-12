def add(first, second)
  first + second
end

def subtract(first, second)
  first - second
end

def sum(num_array)
  num_array.inject(0) {|num, x| num + x}
end

def multiply(num_array)
  num_array.inject(0) {|num, x| num * x}
end

def power(base, pow)
  base ** pow
end

def factorial(num)
  i = 1
  j = 1
  while i <= num
    cur_num = i * 1
    next_num = cur_num * i
    print next_num, " "
    i += 1
  end
end

factorial(5)
