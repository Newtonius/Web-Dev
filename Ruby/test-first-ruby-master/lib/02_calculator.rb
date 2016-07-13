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
  num_array.inject() {|num, x| num * x}
end

def power(base, pow)
  base ** pow
end

def factorial(num)
  if num == 0
    k = 0
  else
    i = 0
    k = 1
    while i < num
      n = 1 + i
      k = k * n
      i += 1
    end
  end
  k
end

factorial(0)
