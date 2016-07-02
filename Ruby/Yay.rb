class Person
  def meetingInit
    puts "*Pokes nose*"
  end
  def meetingRec
    puts "*Pokes nose back*"
end
class Heidi < Person
  def greeting
    greet = %q{Hey there Schnucki ^.^}
    puts greet
  end
end
class Robert < Person
  def greeting
    greet = %q{Awwwwww yeah, it's my schmetterling! ^.^}
    puts greet
  end
end

thing1 = Heidi.new
thing2 = Robert.new

thing1.meetingInit
thing1.greeting
thing2.meetingRec
thing2.greeting
